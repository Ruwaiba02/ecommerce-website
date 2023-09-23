<?php

include('config.php');




        if(empty($_FILES['img1']['name']))
        {
            $filename1 = $_POST['old_img1'];
        }
        else{
            $filename1 = $_FILES['img1']["name"];
            $file_temp1 = $_FILES['img1']["tmp_name"];
        }


        if(empty($_FILES['img2']['name']))
        {
            $filename2 = $_POST['old_img2'];
        }
        else{
            $filename2 = $_FILES['img2']["name"];
            $file_temp2 = $_FILES['img2']["tmp_name"];
        }


        if(empty($_FILES['img3']['name']))
        {
            $filename3 = $_POST['old_img3'];
        }
        else{
            $filename3 = $_FILES['img3']["name"];
            $file_temp3 = $_FILES['img3']["tmp_name"];
        }



        if(empty($_FILES['img4']['name']))
        {
            $filename4 = $_POST['old_img4'];
        }
        else{
            $filename4 = $_FILES['img4']["name"];
            $file_temp4 = $_FILES['img4']["tmp_name"];
        }
        
            $id = $_POST['product_id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            $price = $_POST['price'];


           $query = "UPDATE `product` SET `title`='$title',`description`='$description',`category`='$category',`product_img1`='$filename1',`product_img2`='$filename2',`product_img3`='$filename3',`product_img4`='$filename4',`price`='$price' WHERE `product_id` = '$id'";
           $result = mysqli_query($conn,$query);

           if($result){

            if($_FILES['img1']['name'] !='')
            {
                move_uploaded_file($file_temp1, "upload/" . $filename1);
                unlink("upload/".$_POST['old_img1']);
            }

            if($_FILES['img2']['name'] !='')
            {
                move_uploaded_file($file_temp2, "upload/" . $filename2);
                unlink("upload/".$_POST['old_img2']);
            }

            if($_FILES['img3']['name'] !='')
            {
                move_uploaded_file($file_temp3, "upload/" . $filename3);
                unlink("upload/".$_POST['old_img3']);
            }

            if($_FILES['img4']['name'] !='')
            {
                move_uploaded_file($file_temp4, "upload/" . $filename4);
                unlink("upload/".$_POST['old_img4']);
            }


            header('location:product-list.php');
           }