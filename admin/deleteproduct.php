<?php

    session_start();
    require_once 'connect.php';

    $id =  $_SESSION['product']['id'];

     mysqli_query($connect, "DELETE FROM `prduct` WHERE `user`.`id` = '$id'");
     header('Location: /');
    ?>
