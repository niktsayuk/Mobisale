<?php

    session_start();
    require_once '../vendor/connect.php';


    $check_product = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` AND `name` AND `image` AND `price`");
    if (mysqli_num_rows($check_product) > 0) 
    {
        $product = mysqli_fetch_assoc($check_product);

        $_SESSION['product'] = [
            "id" => $product['id'],
            "name" => $product['name'],
            "image" => $product['image'],
            "price" => $product['price']
        ];
    }
    header('Location: index.php');
?>