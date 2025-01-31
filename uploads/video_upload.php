<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: /admin/login');
    exit;
}

require(__DIR__ . "/../include/config.php");

if (empty($_REQUEST['description']) || empty($_REQUEST['link'])) {
    // print_r($_REQUEST);
    $_SESSION["errorMessage"] = "Failed. Try Again, Make sure all fields have been passed. Thank you!!!";
    header("Location: /admin/videos/add");
} else {

    $link    = stripslashes($_REQUEST['link']);
    $link    = mysqli_real_escape_string($con, $link);
    $desc    = stripslashes($_REQUEST['description']);
    $desc    = mysqli_real_escape_string($con, $desc);

    $create_datetime = date("Y-m-d H:i:s");

    $query = "INSERT into `videos` (description, link, created_at)
                     VALUES ('$desc', '$link', '$create_datetime')";

    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION["message"] = "News Published!!";
        header("Location: /admin/videos");
    } else {
        $_SESSION["errorMessage"] = "Failed to publish news. Try again.";
        header("Location: /admin/videos/add");
    }
}
