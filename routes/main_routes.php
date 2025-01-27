<?php

$router->addRoute('GET', '/', function () {
    require(__DIR__."/../include/config.php");
    $query    = "SELECT * FROM `galleries` ORDER BY created_at DESC LIMIT 6";
    $result = mysqli_query($con, $query);
    $galleries = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/index.php';
    exit;
});

$router->addRoute('GET', '/history', function () {
    require __DIR__ . '/../views/history.php';
    exit;
});

$router->addRoute('GET', '/about', function () {
    require __DIR__ . '/../views/about.php';
    exit;
});
$router->addRoute('GET', '/team', function () {
    require __DIR__ . '/../views/team.php';
    exit;
});

$router->addRoute('GET', '/contact', function () {
    require __DIR__ . '/../views/contact.php';
    exit;
});

$router->addRoute('GET', '/founders-welcome-message', function () {
    require __DIR__ . '/../views/founders-welcome-message.php';
    exit;
});


$router->addRoute('GET', '/management', function () {
    require __DIR__ . '/../views/management.php';
    exit;
});


$router->addRoute('GET', '/mission-vision-values', function () {
    require __DIR__ . '/../views/mission-vision-values.php';
    exit;
});

$router->addRoute('GET', '/blogs', function () {

    require(__DIR__."/../include/config.php");

    $query    = "SELECT * FROM `news` ORDER BY date DESC";
    
    $result = mysqli_query($con, $query);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/blogs.php';
    exit;
});

$router->addRoute('GET', '/blogs/:blogId', function ($blogId) {

    require(__DIR__."/../include/config.php");

    $query    = "SELECT * FROM `news` WHERE id='$blogId'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $news = mysqli_fetch_assoc($result);

        $query_l    = "SELECT * FROM `news` ORDER BY date DESC";
        $result_l = mysqli_query($con, $query_l);
        $latest_news = mysqli_fetch_all($result_l, MYSQLI_ASSOC);

        $read_by = $news['read_by']+1;

         mysqli_query($con, "Update `news` SET read_by = '$read_by' WHERE id = '$blogId'");
        require __DIR__ . '/../views/blog.php';
    }else{
        require __DIR__ . '/../views/404.php';
    }
    exit;
});
