<?php
/** 
 * reg.php 
*/
// Проверка, фильтрация filter_var() на вредоносный код и удаляем пробелы до и после trim()
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email    = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login    = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';
// Проверка на ввод данных по длине вводимой строки, strlen()

if (strlen($username) < 2) {
    $error = 'Заполните имя';
} elseif (strlen($email) < 5) {
    $error = 'Заполните email';
} elseif (strlen($login) < 3) {
    $error = 'Заполните login';
} elseif (strlen($password) < 4) {
    $error = 'Заполните password';
}

if ($error != '') {
    echo $error;
    exit();
}

// Подключение к базе данных
// Данные для подключения и само подключение к базе данных в файле lib/connect.phh
require_once '../lib/connect.php';


// Кеширование пароля
$salt = 'tyhbwt87v%#7uhf6';
$password = md5($salt . $password);

// Запрос на Добавление Нового Пользователя
$sql = "INSERT INTO users(name, email, login, password) VALUE(?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $password]);

//
echo 'Done';