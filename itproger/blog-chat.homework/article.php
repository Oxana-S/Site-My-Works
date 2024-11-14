<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    // Изменение title в head страницы:
    // Подключение к базе данных
    // Данные для подключения и Само Подключение к базе данных в файле lib/connect.phh
    require_once 'lib/connect.php';

    // Запрос на Выбор Всех записей (статей) из таблицы articles в базе данных 
    // по id
    $sql = "SELECT * FROM articles WHERE `id` = ?";
    $query = $pdo->prepare($sql);
    // Использую GET запрос, он берет значение id из строки в URL адресе
    $query->execute([$_GET['id']]);

    $article = $query->fetch(PDO::FETCH_OBJ);

    $website_title = $article->title;
    // END: Изменение title страницы.

    require_once 'blocks/head.php';
    ?>

</head>

<body>

    <?php require_once 'blocks/header.php'; ?>

    <main>
        <!-- <p>Main text</p> -->
        <div class="articles">
            <?php
            // Вывод Объекта с статьёй 
            echo "<h1 class='article__title'>" . $article->title . "</h1> ";

            echo "<div class='article'>
                    <p class='article__anons'>" . $article->full_text . "</p> 
                </div>
                ";
            // Использование функции date() для вывода даты и времени публикации
            echo "<div class='article'>
                    <p class='article__author'><span>Автор:</span> " . "<span class='mod'>" . $article->author . "</span>" . "</p>
                    <p class='article__date'><span>Время публикации:</span> " . date("Y.m.d - H:i:s", $article->date) . "</p>
                </div>
                ";
            ?>
        </div>

        <h3>Комментарии</h3>
        <!-- Форма Добавления Комментариев на сайте -->
        <form class="article">
            <label for="username">Имя:</label>
            <!-- Вывод в input логина пользователя из куки, если пользователь авторизован-->
            <?php if (isset($_COOKIE['log_login'])) : ?>
                <input id="username" type="text" name="username" value="<?= $_COOKIE['log_login'] ?>">
            <?php else : ?>
                <input id="username" type="text" name="username">
            <?php endif; ?>

            <label for="mess">Комментарии:</label>
            <textarea id="mess" name="mess"></textarea>

            <div id="error-block" class="error-mess"></div>

            <button id="mess_send" type="button">Добавить комментарий</button>
        </form>

        <!-- Вывод Комментариев статьи -->
        <div class="comments">
            <?php
            // Вывод Комментариев статьи

            // Подключение к базе данных
            // Данные для подключения и Само Подключение к базе данных в файле lib/connect.phh
            require_once 'lib/connect.php';

            // Запрос на Выбор Всех записей (Комментариев) из таблицы comments в базе данных 
            // по article_id
            $sql = "SELECT * FROM comments WHERE `article_id` = ? ORDER BY id DESC";
            $query = $pdo->prepare($sql);
            // Использую GET запрос, он берет значение id из строки в URL адресе
            $query->execute([$_GET['id']]);

            $comments = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($comments as $el) {
                echo "
                <div class='comment'>
                    <h3> " . $el->name . " </h3>
                    <p>" . $el->mess . "</p>
                </div>
            ";
            }
            ?>
        </div>

    </main>

    <?php require_once 'blocks/aside.php'; ?>

    <?php require_once 'blocks/footer.php'; ?>

    <!-- 
        'ajax'
        Подключение скрипта обработки Формы КОММЕНТАРИЕВ.  
    -->
    <script>
        $('#mess_send').click(function() {
            let username = $('#username').val();
            let mess = $('#mess').val();

            console.log('yes')

            $.ajax({
                url: 'ajax/comment_add.php',
                type: 'POST',
                cache: false,
                data: {
                    'username': username,
                    'mess': mess,
                    'id': <?= $_GET['id']; ?>,
                },
                dataType: 'html',
                success: function(data) {
                    // console.log(data);
                    if (data === "Done") {
                        $('.comments').prepend(`
                            <div class='comment'>
                                <h3> ${username} </h3>
                                <p> ${mess} </p>
                            </div>
                        `);
                        $('#mess_send').text("Добавлен");
                        $('#mess_send').css({
                            'background': 'green',
                            'font-size': '18px'
                        });
                        // Очистка поля комментариев
                        $('#mess').val("");

                        $('#error-block').hide();
                        // document.location.reload(true);
                    } else {
                        $('#error-block').show();
                        $('#error-block').text(data);

                    }

                }

            });
        });
    </script>

</body>

</html>