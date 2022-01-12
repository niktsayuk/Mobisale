<?php

    session_start();
    require_once 'connect.php';

    $id =  $_SESSION['user']['id'];

     mysqli_query($connect, "DELETE FROM `user` WHERE `user`.`id` = '$id'");
     header('Location: logout.php');
    ?>
