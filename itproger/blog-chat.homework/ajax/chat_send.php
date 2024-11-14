<?php

/** 
 * ajax/chat_send.php 
 */

// Проверка, фильтрация filter_var() на вредоносный код и удаляем пробелы до и после trim()
$chat_input = trim(filter_var($_POST['chat_input'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';
// Проверка на ввод данных по длине вводимой строки, strlen()

if (strlen($chat_input) < 1) {
    $error = 'Введите сообщение';
}

if ($error != '') {
    echo $error;
    exit();
}



// Подключение к базе данных
// Данные для подключения и само подключение к базе данных в файле lib/connect.phh
require_once '../lib/connect.php';

if (!isset($_COOKIE['log_login'])) 
    $username ='guest';
else $username = $_COOKIE['log_login'];

// Запрос на добавление введенного текста сообщения
$sql = "INSERT INTO `chat` SET `user_name`=:name, `chat_mess` = :mess";
$query = $pdo->prepare($sql);
$query->execute(['name' => $username, 'mess' => $chat_input]);


echo 'Done';
