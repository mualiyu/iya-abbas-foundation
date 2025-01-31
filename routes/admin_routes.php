<?php

$router->addRoute('GET', '/admin/login', function () {
    require __DIR__ . '/../views/admin/login.php';
    exit;
});

$router->addRoute('POST', '/admin/login', function () {

    if ( !isset($_REQUEST['username'], $_REQUEST['password']) ) {
        // Could not get the data that should have been sent.
        $_SESSION["errorMessage"] = "Please fill both the username and password fields!";
        header("Location: /admin/login");
    }

    require(__DIR__."/../include/config.php");

    if ($stmt = $con->prepare('SELECT id, name, email, phone, password FROM users WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_REQUEST['username']);
        $stmt->execute();

        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $email, $phone, $password);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if (password_verify($_REQUEST['password'], $password)) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $_REQUEST['username'];
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                
                // redirect to home
                header("Location: /admin");

            } else {
                // Incorrect password
                $_SESSION["errorMessage"] = "Incorrect password!";
                header("Location: /admin/login");
            }
        } else {
            $_SESSION["errorMessage"] = "Incorrect username and/or password!";
            header("Location: /admin/login");
        }

        $stmt->close();
    }

    exit;
});

// Register route
$router->addRoute('GET', '/admin/register/user', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require __DIR__ . '/../views/admin/register.php';
    exit;
});

// Insert new users route
$router->addRoute('POST', '/admin/register/user', function () {

    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    
    if (empty($_REQUEST['name']) || empty($_REQUEST['username']) || empty($_REQUEST['email']) || empty($_REQUEST['phone']) || empty($_REQUEST['password'])) {
        // print_r($_REQUEST);
        $_SESSION["message"] = "Failed. Try Again, Make sure all fields have been passed. Thank you!!!";
        header("Location: /admin/register/user");
    }else{
        if (isset($_REQUEST['username'])) {
            $name    = stripslashes($_REQUEST['name']);
            $name    = mysqli_real_escape_string($con, $name);
            
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
    
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);
    
            $phone    = stripslashes($_REQUEST['phone']);
            $phone    = mysqli_real_escape_string($con, $phone);
    
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
    
            $query = "INSERT into `users` (name, email, username, phone, password)
                         VALUES ('$name', '$email', '$username', '$phone', '" .password_hash($password, PASSWORD_DEFAULT). "')";
            $result = mysqli_query($con, $query);
    
            if ($result) {
                $_SESSION["message"] = "New user is created! Thank you.";
                header("Location: /admin/register/user");
            } else {
                $_SESSION["message"] = "Failed!!! Try Again.";
                header("Location: /admin/register/user");
            }
        }else{
            $_SESSION["message"] = "Failed. Try Again, Make sure all data has been passed. Thank you!!!";
            header("Location: /admin/register/user");
        }
    }

    exit;
});

// Dashboard Route
$router->addRoute('GET', '/admin', function () {

    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    // news
    $query    = "SELECT * FROM `news`";
    $result = mysqli_query($con, $query);
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // comments


    // latest news
    $query    = "SELECT * FROM `news` ORDER BY created_at DESC LIMIT 3";
    $result = mysqli_query($con, $query);
    $letest_news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $query    = "SELECT * FROM `galleries`";
    $result = mysqli_query($con, $query);
    $galleries = mysqli_fetch_all($result, MYSQLI_ASSOC);


    require __DIR__ . '/../views/admin/index.php';
    exit;
});


// logout route
$router->addRoute('POST', '/admin/logout', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    session_destroy();
    // Redirect to the login page:
    header('Location: /admin/login');

    exit;
});

// list news
$router->addRoute('GET', '/admin/news', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query    = "SELECT * FROM `news` ORDER BY date DESC";
    
    $result = mysqli_query($con, $query);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/admin/news.php';
    exit;
});

// Edit news
$router->addRoute('GET', '/admin/news/edit/:id', function ($id) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query    = "SELECT * FROM `news` WHERE id='$id'";
    
    $result = mysqli_query($con, $query);

    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $news = mysqli_fetch_assoc($result);
        require __DIR__ . '/../views/admin/single_news.php';
        exit;
    }else{
        require __DIR__ . '/views/404.php';
        exit;
    }
});

// show add news
$router->addRoute('GET', '/admin/news/add', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require __DIR__ . '/../views/admin/add_news.php';
    exit;
});

$router->addRoute('GET', '/admin/news/delete/:id', function ($id) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query = "DELETE FROM `news` WHERE id='$id'";
    
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION["message"] = "One news is deleted! Thank you.";
        header("Location: /admin/news");
    } else {
        $_SESSION["message"] = "Failed!!! Try Again.";
        header("Location: /admin/news");
    }
});


// list galleries
$router->addRoute('GET', '/admin/galleries', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query    = "SELECT * FROM `galleries` ORDER BY created_at DESC";
    
    $result = mysqli_query($con, $query);

    $galleries = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/admin/galleries.php';
    exit;
});

// show add gallery
$router->addRoute('GET', '/admin/galleries/add', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require __DIR__ . '/../views/admin/add_galleries.php';
    exit;
});

$router->addRoute('GET', '/admin/galleries/delete/:id', function ($id) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query = "DELETE FROM `galleries` WHERE id='$id'";
    
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION["message"] = "One gallery is deleted! Thank you.";
        header("Location: /admin/galleries");
    } else {
        $_SESSION["message"] = "Failed!!! Try Again.";
        header("Location: /admin/galleries");
    }
});


// list videos
$router->addRoute('GET', '/admin/videos', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query    = "SELECT * FROM `videos` ORDER BY created_at DESC";
    
    $result = mysqli_query($con, $query);

    $videos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/admin/videos.php';
    exit;
});

// show add gallery
$router->addRoute('GET', '/admin/videos/add', function () {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require __DIR__ . '/../views/admin/add_videos.php';
    exit;
});

$router->addRoute('GET', '/admin/videos/delete/:id', function ($id) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /admin/login');
        exit;
    }

    require(__DIR__."/../include/config.php");

    $query = "DELETE FROM `videos` WHERE id='$id'";
    
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION["message"] = "One Video is deleted! Thank you.";
        header("Location: /admin/videos");
    } else {
        $_SESSION["message"] = "Failed!!! Try Again.";
        header("Location: /admin/videos");
    }
});

// end of admin routes

// Route for 404