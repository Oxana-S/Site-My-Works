<?php
/** 
 * articleS_add.php 
 * 
*/

// Проверяю есть ли куки 'login', т.е. пользователь,
// который открыл эту страницу прошел регистрацию или нет. 

if (!isset($_COOKIE['log_login'])) {
    header('Location: /register.php');
    exit();
}
?>

<!-- 
    Основной код страницы  
-->
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = 'Добавить статью';
    require_once 'blocks/head.php';
    ?>
</head>

<body>
    <?php require_once 'blocks/header.php'; ?>

    <!-- Основной Раздел на странице -->
    <main>
        <h1>Добавить статью</h1>
        <!-- Форма РЕГИСТРАЦИИ на сайте -->
        <form class="article">
            <label for="title">Название статьи:</label>
            <input id="title" type="text" name="title">
            <label for="anons">Анонс статьи:</label>
            <textarea id="anons" name="anons"></textarea>
            <label for="full_text">Текст статьи:</label>
            <textarea id="full_text" name="full_text"></textarea>

            <div id="error-block" class="error-mess"></div>

            <button id="article_add" type="button">Добавить</button>

        </form>

    </main>

    <?php require_once 'blocks/aside.php'; ?>

    <?php require_once 'blocks/footer.php'; ?>

    <!-- 
        'ajax()' 
        - Подключение скрипта обработки Формы РЕГИСТРАЦИИ  
    -->
    <script>
        $('#article_add').click(function() {
            let title = $('#title').val();
            let anons = $('#anons').val();
            let full_text = $('#full_text').val();
            // console.log()

            $.ajax({
                url: 'ajax/article_add.php',
                type: 'POST',
                cache: false,
                data: {
                    'title': title,
                    'anons': anons,
                    'full_text': full_text,
                },
                dataType: 'html',
                success: function(data) {
                    // console.log(data);
                    if (data === "Done") {
                        $('#article_add').text("Всё готово");
                        $('#article_add').css({
                            'background': 'green',
                            'font-size': '18px'
                        });

                        $('#error-block').hide();
                        document.location.reload(true);
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