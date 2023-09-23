<?php

include "config.php";


if (isset($_POST["submit"])) {

    $category = $_POST['category'];

    $filename = $_FILES['category_img']["name"];
    $file_temp = $_FILES['category_img']["tmp_name"];


    move_uploaded_file($file_temp, "upload/" . $filename);

}

	$query = "INSERT INTO `category`(`category_name`, `category_img`) VALUES ('$category','$filename')";

    $result = mysqli_query($conn, $query);

    if($result){

        header('location:add-category.php');

    }

    else {
        echo "Failed";
    }



?>