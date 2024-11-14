<?php
$user = 'admin';
$pass_db = 'admin@Robur';
$db = 'h_blog';
$host = 'homework.loc';
// $port = '80';

// $dsn, Если подключатся с портом
// $dsn = 'mysql:host=' . $host . ';dbname=' . $db . 'port=' . $port;

$dsn = 'mysql:host=' . $host . ';dbname=' . $db;

// Установить режим ошибки PDO на исключение
// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$pdo = new PDO($dsn, $user, $pass_db);
