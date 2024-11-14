<?php

/*
* ajax/chat_show_add.php 
  Подключаю в js/chat_show_add
*/

// Подключение к базе данных
// Данные для подключения и само подключение к базе данных в файле lib/connect.phh
// Вопрос: 
// Почему здесь путь к подключению файла connect.php без ../, 
// а в в файле ajax/chat_send.php путь с ../
// Ответ: 
// Потому-что я его подключаю из js/chat_show_add.js, обработчика ajax запроса 
require_once '../lib/connect.php';

// Запрос на получение отправленных сообщений из базы данных
$sql = "SELECT * FROM chat ORDER BY id";
$query = $pdo->prepare($sql);
$query->execute();


// Вывод сообщений в блоке с чатом в диве с классом "mess_out" в файле blocks/chat.php
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo "<p>" . $row->user_name . " : " . $row->chat_mess . "</p>";
}
