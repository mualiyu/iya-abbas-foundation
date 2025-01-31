<?php

$router->addRoute('GET', '/', function () {
    require(__DIR__ . "/../include/config.php");

    // Galleries
    $query    = "SELECT * FROM `galleries` ORDER BY created_at DESC LIMIT 6";
    $result = mysqli_query($con, $query);
    $galleries = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Latest News
    $limit = 3; // Number of entries to show in a page.
    $query = "SELECT news.*, users.name AS user_name 
              FROM `news` 
              JOIN `users` ON news.user_id = users.id 
              ORDER BY news.date DESC 
              LIMIT $limit";
    $result = mysqli_query($con, $query);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/main/index.php';
    exit;
});


// Who we are
$router->addRoute('GET', '/about-us', function () {
    require __DIR__ . '/../views/main/about-us.php';
    exit;
});
$router->addRoute('GET', '/our-team', function () {
    require __DIR__ . '/../views/main/our-team.php';
    exit;
});
$router->addRoute('GET', '/board-of-trustees', function () {
    require __DIR__ . '/../views/main/board-of-trustees.php';
    exit;
});


// Programmers
$router->addRoute('GET', '/health', function () {
    require __DIR__ . '/../views/main/health.php';
    exit;
});
$router->addRoute('GET', '/education', function () {
    require __DIR__ . '/../views/main/education.php';
    exit;
});
$router->addRoute('GET', '/project-supported', function () {
    require __DIR__ . '/../views/main/project-supported.php';
    exit;
});


// Grant Making
$router->addRoute('GET', '/annual-grant', function () {
    require __DIR__ . '/../views/main/annual-grant.php';
    exit;
});
$router->addRoute('GET', '/discretionary-grant', function () {
    require __DIR__ . '/../views/main/discretionary-grant.php';
    exit;
});
$router->addRoute('GET', '/partnership', function () {
    require __DIR__ . '/../views/main/partnership.php';
    exit;
});


// Media Center
$router->addRoute('GET', '/latest-news', function () {

    require(__DIR__ . "/../include/config.php");

    $limit = 10; // Number of entries to show in a page.
    if (isset($_GET["page"])) {
        $page  = $_GET["page"];
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $limit;

    $query = "SELECT news.*, users.name AS user_name 
              FROM `news` 
              JOIN `users` ON news.user_id = users.id 
              ORDER BY news.date DESC 
              LIMIT $start_from, $limit";

    $result = mysqli_query($con, $query);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Get total number of records
    $query_total = "SELECT COUNT(*) FROM `news`";
    $result_total = mysqli_query($con, $query_total);
    $total_records = mysqli_fetch_array($result_total)[0];
    $total_pages = ceil($total_records / $limit);

    require __DIR__ . '/../views/main/latests-news.php';
    exit;
});
$router->addRoute('GET', '/latest-news/:blogId', function ($blogId) {

    require(__DIR__ . "/../include/config.php");

    $query    = "SELECT * FROM `news` WHERE id='$blogId'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $news = mysqli_fetch_assoc($result);

        $query_l    = "SELECT * FROM `news` ORDER BY date DESC";
        $result_l = mysqli_query($con, $query_l);
        $latest_news = mysqli_fetch_all($result_l, MYSQLI_ASSOC);

        $read_by = $news['read_by'] + 1;

        mysqli_query($con, "Update `news` SET read_by = '$read_by' WHERE id = '$blogId'");
        require __DIR__ . '/../views/main/blog.php';
    } else {
        require __DIR__ . '/../views/main/404.php';
    }
    exit;
});

$router->addRoute('GET', '/publications', function () {

    // require(__DIR__."/../include/config.php");

    // $query    = "SELECT * FROM `publications` ORDER BY date DESC";

    // $result = mysqli_query($con, $query);

    // $publications = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/main/publications.php';
    exit;
});
$router->addRoute('GET', '/publications/:slug', function ($slug) {

    require(__DIR__ . "/../include/config.php");

    $query    = "SELECT * FROM `publications` WHERE slug='$slug'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $news = mysqli_fetch_assoc($result);

        $query_l    = "SELECT * FROM `publications` ORDER BY date DESC";
        $result_l = mysqli_query($con, $query_l);
        $latest_news = mysqli_fetch_all($result_l, MYSQLI_ASSOC);

        $read_by = $news['read_by'] + 1;

        mysqli_query($con, "Update `publications` SET read_by = '$read_by' WHERE slug = '$slug'");
        require __DIR__ . '/../views/main/publication_single.php';
    } else {
        require __DIR__ . '/../views/main/404.php';
    }
    exit;
});


$router->addRoute('GET', '/videos', function () {
    require(__DIR__ . "/../include/config.php");

    $query    = "SELECT * FROM `videos` ORDER BY created_at DESC";

    $result = mysqli_query($con, $query);

    $videos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    require __DIR__ . '/../views/main/videos.php';
    exit;
});

// $router->addRoute('GET', '/mission-vision-values', function () {
//     require __DIR__ . '/../views/main/mission-vision-values.php';
//     exit;
// });

$router->addRoute('GET', '/contact-us', function () {
    require __DIR__ . '/../views/main/contact-us.php';
    exit;
});
