<?php

/** 
 * ajax/articles_show.php 
 */

// Подключение к базе данных
// Данные для подключения и Само Подключение к базе данных в файле lib/connect.phh
require_once 'lib/connect.php';

// Запрос на Выбор Всех записей (статей) из таблицы articles в базе данных 
$sql = "SELECT * FROM articles ORDER BY `date` DESC";
$query = $pdo->query($sql);

// Получение Объекта с статьями fetch(PDO::FETCH_OBJ) и вывод их по одной
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    // Использование функции date() для вывода даты и времени публикации
    echo "<div class='article'>
            <h2 class='article__title'>" . $row->title . "</h2> 
            <p class='article__anons'>" . $row->anons . "</p> 
            <p class='article__author'><span>Автор:</span> " . "<span class='mod'>" . $row->author . "</span>" . "</p>
            <p class='article__date'><span>Дата:</span> " . date("Y.m.d - H:i:s", $row->date)  . "</p> 
            <a href='article.php?id=" . $row->id . "' title='" . $row->title . "' class='article__read'>Прочитать</a>
        </div>
        ";
}
