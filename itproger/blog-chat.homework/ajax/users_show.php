<?php
// Подключение к базе данных
// Данные для подключения и Само Подключение к базе данных в файле lib/connect.phh
require_once 'lib/connect.php';

// Запрос на Выбор Пользователей из базы данных
$sql = "SELECT id, name, email, login FROM users";
$query = $pdo->prepare($sql);
$query->execute();

$id = [];
$name = [];
$email = [];
$login = [];

// Получение массивов пользователей с id[], name[], email[], login[]
while ($row = $query->fetch()) {
    array_push($id, $row['id']);
    array_push($name, $row['name']);
    array_push($email, $row['email']);
    array_push($login, $row['login']);
}

// Вывод отдельных записей с пользователями 
for ($i = 0; $i < count($id); $i++) {
    echo "
    <div class='users_login ' data='$id[$i]'>
        <p class='user_login'>
            <b>Id:</b> $id[$i]
            <b>Имя:</b>  $name[$i] 
            <b>Email:</b>  $email[$i] 
            <b>Логин:</b>  $login[$i] 
        </p>
        <button class='user_delete btn' data='$id[$i]'>Удалить</button>
    </div>
    ";
}
