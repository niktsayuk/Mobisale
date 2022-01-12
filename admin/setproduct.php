<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    mysqli_query($connect, "INSERT INTO `user` (`name`, `password`) VALUES ('$login','$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
     header('Location: ../auth.php');
?>