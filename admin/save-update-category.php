<?php

include('config.php');


        if(empty($_FILES['category_img']['name']))
        {
            $filename = $_POST['old_img'];
        }
        else{
            $filename = $_FILES['category_img']["name"];
            $file_temp = $_FILES['category_img']["tmp_name"];
        }

        $id = $_POST['category_id'];
        $category = $_POST['category'];

        $query = "UPDATE `category` SET `category_name`='$category',`category_img`='$filename' WHERE `category_id` = '$id'";
        $result = mysqli_query($conn,$query);

        if($result){

            if($_FILES['category_img']['name'] !='')
            {
                move_uploaded_file($file_temp, "upload/" . $filename);
                unlink("upload/".$_POST['old_img']);
            }

            header('location:category-list.php');
        }
?>