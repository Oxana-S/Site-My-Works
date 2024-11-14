<?php
/** 
 * ajax/mail.php 
*/
// Проверка, фильтрация filter_var() на вредоносный код и удаляем пробелы до и после trim()
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
$email    = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$message    = trim(filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';
// Проверка на ввод данных по длине вводимой строки, strlen()

if (strlen($name) < 2) {
    $error = 'Заполните имя';
} elseif (strlen($email) < 5) {
    $error = 'Заполните email';
} elseif (strlen($message) < 5) {
    $error = 'Заполните сообщение';
} 

if ($error != '') {
    echo $error;
    exit();
}

// Подключение к базе данных
// Данные для подключения и само подключение к базе данных в файле lib/connect.phh
require_once '../lib/connect.php';

// Отправка почты
$to = 'channel.my.honey@gmail.com';
$subject =  "=?utf-8?B?".base64_encode("Новое сообщение")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$message = "Пользователь: $name.<br>$message";
mail($to, $subject, $message, $headers);



//
echo 'Done';