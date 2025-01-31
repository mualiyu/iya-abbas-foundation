<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: /admin/login');
    exit;
}

require(__DIR__."/../include/config.php");

// print_r($_REQUEST);

if (empty($_REQUEST['title']) || empty($_REQUEST['content']) || !isset($_FILES['image'])) {
    // print_r($_REQUEST);
    $_SESSION["errorMessage"] = "Failed. Try Again, Make sure all fields have been passed. Thank you!!!";
    header("Location: /admin/news/add");
}else{

    if (isset($_REQUEST['title'])) {
        $title    = stripslashes($_REQUEST['title']);
        $title    = mysqli_real_escape_string($con, $title);
        
        $content    = stripslashes($_REQUEST['content']);
        $content    = mysqli_real_escape_string($con, $content);
    
        $create_datetime = date("Y-m-d H:i:s");
    
        // $username = $_REQUEST['file'];
    
        if(isset($_FILES['image'])){
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            
            $dd = explode('.',$_FILES['image']['name']);
            $dd = end($dd);
            $file_ext=strtolower($dd);
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                $_SESSION["errorMessage"] = "extension not allowed, please choose a JPEG or PNG file.";
                header("Location: /admin/news/add");
            }
            
            if($file_size > 4097152){
                $_SESSION["errorMessage"] = "File size must be excately 4 MB.";
                header("Location: /admin/news/add");
            }
            
            move_uploaded_file($file_tmp,"news/".$file_name);
            // echo "Success";  
        }else{
           $_SESSION["errorMessage"] = "Image is not uploaded.";
           header("Location: /admin/news/add");
        }
    
        $user_id = $_SESSION['id'];
        // return "Yess";
        $query = "INSERT into `news` (title, content, image, created_at, read_by, status, date, user_id)
                     VALUES ('$title', '$content', '$file_name', '$create_datetime', '0', 'Active', '$create_datetime', '$user_id')";
    
        $result = mysqli_query($con, $query);
    
        if ($result) {
            $_SESSION["message"] = "News Published!!";
            header("Location: /admin/news");
        } else {
            $_SESSION["errorMessage"] = "Failed to publish news. Try again.";
            header("Location: /admin/news/add");
        }
    }else{
        $_SESSION["errorMessage"] = "Failed. Try Again, Make sure all data has been passed. Thank you!!!";
        header("Location: /admin/news/add");
    }
}



?>