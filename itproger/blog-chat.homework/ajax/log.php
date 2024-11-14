<?php

/** 
 * ajax/log.php 
 */

// Проверка, фильтрация filter_var() на вредоносный код и удаляем пробелы до и после trim()
$login    = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
// $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = '';
// Проверка на ввод данных по длине вводимой строки, strlen()

if (strlen($login) < 3) {
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

// Запрос на Нахождение Пользователя
$sql = "SELECT id, name, email FROM users WHERE `login` = ? AND `password` = ?";
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

// Дополнительно Получение email пользователя
while ($row = $query->fetch()) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
}
// echo $email;
// exit();

// Посчитаем сколько записей мы нашли в базе данных, метод rowCount()
if ($query->rowCount() == 0) {
    // Всё плохо
    echo 'Такого пользователя нет';
} else {
    // Всё хорошо
    // Устанавливаю куки в глобальный массив $_COOKIE[] 
    setcookie('log_name', $name, time() + 3600 * 24 * 30, "/");
    setcookie('log_email', $email, time() + 3600 * 24 * 30, "/");
    setcookie('log_login', $login, time() + 3600 * 24 * 30, "/");
    // Отправляю код успешного выполнения
    echo 'Done';
}
