<?php
/** 
 * ajax/article_add.php 
*/
// Проверка, фильтрация filter_var() на вредоносный код и удаляем пробелы до и после trim()
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS));
$anons    = trim(filter_var($_POST['anons'], FILTER_SANITIZE_SPECIAL_CHARS));
$full_text    = trim(filter_var($_POST['full_text'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';
// Проверка на ввод данных по длине вводимой строки, strlen()

if (strlen($title) < 10) {
    $error = 'Заполните название статьи';
} elseif (strlen($anons) < 5) {
    $error = 'Заполните анонс статьи';
} elseif (strlen($full_text) < 3) {
    $error = 'Введите текст статьи';
} 

if ($error != '') {
    echo $error;
    exit();
}

// Подключение к базе данных
// Данные для подключения и само подключение к базе данных в файле lib/connect.phh
require_once '../lib/connect.php';

// Запрос на Добавление Новой статьи в базу данных
$sql = "INSERT INTO articles(title, anons, full_text, author, date) VALUE(?, ?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$title, $anons, $full_text, $_COOKIE['log_login'], time()]);

//
echo 'Done';