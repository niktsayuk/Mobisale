<?php

    session_start();
    require_once 'connectUsers.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connectusers, "SELECT * FROM `user` WHERE `name` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name']
        ];

        header('Location: ../');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../auth.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
