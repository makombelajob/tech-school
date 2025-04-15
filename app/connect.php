<?php

    $host = 'mysql';
    $db = 'techSchool';
    $user = 'root';
    $pass = 'techAdmin7791';
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        echo 'connected !';
    }catch(PDOException $e){
        echo 'Errors : ' .$e -> getMessage();
    }