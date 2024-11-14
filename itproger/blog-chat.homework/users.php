<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Меняю значение переменной в title сайта -->
    <?php
    $website_title = 'Пользователи';

    require_once 'blocks/head.php';
    ?>
</head>

<body>
    <?php require_once 'blocks/header.php'; ?>

    <!-- Основной Раздел на странице -->
    <main>
        <?php if (!isset($_COOKIE['log_login'])) : ?>
            <h1>Пользователи</h1>
            <div class="warning">
                <p>Вы не авторизованы на сайте.</p>
                <p>Пожалуйста зарегистрируйтесь.</p>
            </div>

        <?php else : ?>
            <h2>Пользователь - <?= $_COOKIE['log_login']; ?></h2>
            <table>
                <tr>
                    <th>имя</th>

                    <th>email</th>

                    <th>Логин</th>
                </tr>
                <tr>
                    <td><?= $_COOKIE['log_name']; ?></td>
                    <td><?= $_COOKIE['log_email']; ?></td>
                    <td><?= $_COOKIE['log_login']; ?></td>
                </tr>
            </table>

            <h2>Пользователи</h2>
            <!-- Здесь скрипт выборки из базы данных -->
            <div class="users">
                <?php require_once 'ajax/users_show.php'; ?>
            </div>

        <?php endif; ?>

    </main>

    <?php require_once 'blocks/aside.php'; ?>
    <?php require_once 'blocks/footer.php'; ?>

    <!-- Подключение скрипта Обработки Кнопки 'Удалить' пользователя,
    подключаемой в файле 'ajax/users_show.php'. Технология - ajax -->
    <script>
        $('.user_delete').click(function() {
            // Все кнопки имеют класс .user_delete, поэтому
            // использую this и выбираю кнопку на которую нажал
            let tmp = $(this);
            // Получаю значение атрибута data (это id пользователя в базе данных) этой кнопки.
            // Код кнопки прописан в файле 'ajax/users_show.php'.
            // Это и есть уникальный id пользователя, который буду использовать для
            // передачи в ajax в файл 'user_del.php'.
            let user_id = tmp.attr('data');
            // Переменная для хранения селектора выбора по атрибуту data класса
            // блока <div class='users_login'> (блок находится в файле 'users_show.php') .
            // По этому селектору буду выбирать этот блок с записью, 
            // и удалять его (в этом блоке выводятся данные пользователя).
            let data_user_id = '[data=' + user_id + ' ]';
            // console.log(class_user_id);

            $.ajax({
                url: 'ajax/user_del.php',
                type: 'POST',
                cache: false,
                data: {
                    'user_id': user_id,
                },
                dataType: 'html',
                success: function(data) {
                    console.log(data);
                    if (data === "Done") {
                        $(tmp).text("Удален");
                        $(tmp).css({
                            'background': 'green',
                            'font-size': '18px'
                        });
                        $(data_user_id).hide()
                    }

                }
            })
        })
    </script>

</body>

</html>