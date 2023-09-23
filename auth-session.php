<?php
    if(!isset($_SESSION['email'])){
        header('location: cust-login.php');
        exit();
    }