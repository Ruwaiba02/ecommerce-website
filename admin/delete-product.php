<?php
    include('config.php');

    $id = $_GET['id'];
    $cat_id = $_GET['cat_id'];

    $query= "DELETE FROM `product` WHERE `product_id` = '$id';";
    $query .= "UPDATE `category` SET `product` = `product` - 1 WHERE `category_id` = $cat_id";

    if(mysqli_multi_query($conn,$query))
    {
        header('location:product-list.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>
