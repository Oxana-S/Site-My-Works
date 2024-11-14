<?php
/**
 * 
 * 
 */


$user_id = $_POST['user_id'];

// Подключение к базе данных
// Данные для подключения и Самой Подключение к базе данных в файле lib/connect.phh
require_once '../lib/connect.php';

// Запрос на Нахождение Пользователя по id для удаления
$sql = "DELETE FROM `users` WHERE id = $user_id";
$query = $pdo->prepare($sql);
$query->execute();



// echo $user_id;
echo 'Done';