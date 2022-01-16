<?php

    session_start();
    require_once '../vendor/connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $path = 'uploads/' . time() . $_FILES['image']['name'];
    $_GET = $path;
    if (!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path))
    {
        $_SESSION['message'] = 'Данные не записались';
        header('Location: index.php');
    }

    mysqli_query($connect, "INSERT INTO `product` (`name`, `image`, `price`) VALUES ('$name','$path', $price)");

    $_SESSION['message'] = 'Данные записаны';
    header('Location: index.php');


?>