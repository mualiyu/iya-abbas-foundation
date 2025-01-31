<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: /admin/login');
    exit;
}

require(__DIR__."/../include/config.php");

if (empty($_REQUEST['description']) || !isset($_FILES['image'])) {
    // print_r($_REQUEST);
    $_SESSION["errorMessage"] = "Failed. Try Again, Make sure all fields have been passed. Thank you!!!";
    header("Location: /admin/galleries/add");
}else{
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
            $_SESSION["errorMessage"] = "File size must be less than 4MB.";
            header("Location: /admin/galleries/add");
        }

        $desc    = stripslashes($_REQUEST['description']);
        $desc    = mysqli_real_escape_string($con, $desc);

        $create_datetime = date("Y-m-d H:i:s");
        
        move_uploaded_file($file_tmp,"gallery/".$file_name);
        
        $query = "INSERT into `galleries` (description, image, created_at)
                     VALUES ('$desc', '$file_name', '$create_datetime')";
    
        $result = mysqli_query($con, $query);
    
        if ($result) {
            $_SESSION["message"] = "News Published!!";
            header("Location: /admin/galleries");
        } else {
            $_SESSION["errorMessage"] = "Failed to publish news. Try again.";
            header("Location: /admin/galleries/add");
        }
    }else{
       $_SESSION["errorMessage"] = "Image is not uploaded.";
       header("Location: /admin/galleries/add");
    }
}



?>