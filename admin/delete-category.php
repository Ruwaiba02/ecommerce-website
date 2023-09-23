<?php
    include('config.php');

    $id = $_GET['id'];

    $query= "DELETE FROM `category` WHERE `category_id` = '$id'";
    

    if(mysqli_query($conn,$query))
    {
        header('location:category-list.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>
