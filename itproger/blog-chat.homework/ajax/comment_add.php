<?php
/** 
 * ajax/comment_add.php 
*/

// Проверка, фильтрация filter_var() на вредоносный код и удаляем пробелы до и после trim()
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$mess    = trim(filter_var($_POST['mess'], FILTER_SANITIZE_SPECIAL_CHARS));
$id = trim(filter_var($_POST['id'], FILTER_SANITIZE_SPECIAL_CHARS));

// Проверка на ошибки ввода пользователем полей
$error = '';
// Проверка на ввод данных по длине вводимой строки, strlen()
if (strlen($username) < 2) {
    $error = 'Заполните имя';
} elseif (strlen($mess) < 5) {
    $error = 'Заполните сообщение';
} 

if ($error != '') {
    echo $error;
    exit();
}

// Подключение к базе данных
// Данные для подключения и само подключение к базе данных в файле lib/connect.phh
require_once '../lib/connect.php';


// Запрос на Добавление Нового Комментария
$sql = "INSERT INTO comments(name, mess, article_id) VALUE(?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$username, $mess, $id]);

//
echo 'Done';

