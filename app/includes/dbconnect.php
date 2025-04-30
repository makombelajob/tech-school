<?php
const DBHOST = 'database';
const DBNAME = 'sessions_base';
const DBUSER = 'sessions_admin';
const DBPASS = 'azerty';

try{
    $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;

    $pdo = new PDO($dsn, DBUSER, DBPASS);

    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception){
    die('Message : ' . $exception->getMessage());
}