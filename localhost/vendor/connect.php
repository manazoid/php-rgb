<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'base-db');

    if (!$connect) {
        die('Error connect to DataBase');
    }