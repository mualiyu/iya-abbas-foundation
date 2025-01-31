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
    $id = $_REQUEST['news_id'];
    header("Location: /admin/news/edit/$id");
}else{
    if (isset($_REQUEST['news_id'])) {
    
        $id = $_REQUEST['news_id'];
    
        $title    = stripslashes($_REQUEST['title']);
        $title    = mysqli_real_escape_string($con, $title);
        
        $content    = stripslashes($_REQUEST['content']);
        $content    = mysqli_real_escape_string($con, $content);
    
        $updated_datetime = date("Y-m-d H:i:s");
    
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
                header("Location: /admin/news/edit/$id");
            }
            
            if($file_size > 4097152){
                $_SESSION["errorMessage"] = "File size must be excately 4 MB.";
                header("Location: /admin/news/edit/$id");
            }
            
            move_uploaded_file($file_tmp,"news/".$file_name);
            // echo "Success";  
        }else{
           $_SESSION["errorMessage"] = "Image is not uploaded.";
           header("Location: /admin/news/edit/$id");
        }
    
        // return "Yess";
        $query = "Update `news` SET title = '$title', content='$content', image='$file_name', created_at='$updated_datetime' WHERE id = '$id'";
    
        $result = mysqli_query($con, $query);
    
        if ($result) {
            $_SESSION["message"] = "News Updated!!";
            header("Location: /admin/news");
        } else {
            $_SESSION["errorMessage"] = "Failed to Update news. Try again.";
            header("Location: /admin/news/edit/$id");
        }
    }else{
        $_SESSION["errorMessage"] = "Failed to Edit.";
        header("Location: /admin/news");
    }
}



?>