<?php

    session_start();
    require_once '../vendor/connect.php';

    $id = $_GET['id'];

     mysqli_query($connect, "DELETE FROM `product` WHERE `product`.`id` = '$id'");
     header('Location: index.php');
?>
