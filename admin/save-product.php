
<?php

include "config.php";


if (isset($_POST["submit"])) {


    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $product_date = date("d, M ,Y");


    $filename1 = $_FILES['img1']["name"];
    $file_temp1 = $_FILES['img1']["tmp_name"];
    $filename2 = $_FILES['img2']["name"];
    $file_temp2 = $_FILES['img2']["tmp_name"];
    $filename3 = $_FILES['img3']["name"];
    $file_temp3 = $_FILES['img3']["tmp_name"];
    $filename4 = $_FILES['img4']["name"];
    $file_temp4 = $_FILES['img4']["tmp_name"];


    move_uploaded_file($file_temp1, "upload/" . $filename1);
    move_uploaded_file($file_temp2, "upload/" . $filename2);
    move_uploaded_file($file_temp3, "upload/" . $filename3);
    move_uploaded_file($file_temp4, "upload/" . $filename4);


}

    $query = "INSERT INTO `product`( `title`, `description`, `category`, `product_date`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `price`)
     VALUES ('$title','$description','$category','$product_date','$filename1','$filename2','$filename3','$filename4','$price');";

    $query .= "UPDATE `category` SET `product` = `product` + 1 WHERE `category_id` = $category";


    if(mysqli_multi_query($conn, $query)){

        header('location:product-list.php');

    }

    else {
        echo "Failed";
    }

