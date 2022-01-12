<?php

    $connectusers = mysqli_connect('localhost', 'root', '', 'users');

    if (!$connectusers) {
        die('Error connect to DataBase');
    }
?>