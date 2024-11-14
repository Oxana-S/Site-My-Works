<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = 'Авторизация';
    require_once 'blocks/head.php';
    ?>
</head>

<body>
    <?php require_once 'blocks/header.php'; ?>

    <!-- Основной Раздел на странице -->
    <main>
        <!-- Форма АВТОРИЗАЦИИ на сайте -->
        <?php if (!isset($_COOKIE['log_login'])) : ?>
            <h1>Авторизация</h1>
            <form>
                <label for="login">Логин:</label>
                <input id="login" type="text" name="login">

                <label for="password">Пароль:</label>
                <input id="password" type="password" name="password">

                <div id="error-block" class="error-mess"></div>

                <button id="user_login" type="button">Войти</button>
            </form>
        <?php else : ?>
            <h2>Кабинет пользователя "&nbsp;<span><?= $_COOKIE['log_login']; ?></span>"</h2>
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
            <form>
                <button id="user_exit" type="button">Выйти</button>
            </form>

        <?php endif; ?>

    </main>
    <?php require_once 'blocks/aside.php'; ?>

    <?php require_once 'blocks/footer.php'; ?>

    <!-- Подключение скрипта обработки Формы АВТОРИЗАЦИИ технологией 'ajax' -->
    <script>
        // Войти (Авторизоваться) в Личный кабинет пользователя
        $('#user_login').click(function() {
            let login = $('#login').val();
            let password = $('#password').val();

            console.log('Вошли')

            $.ajax({
                url: 'ajax/log.php',
                type: 'POST',
                cache: false,
                data: {
                    'login': login,
                    'password': password
                },
                dataType: 'html',
                success: function(data) {
                    // console.log(data);
                    if (data === "Done") {
                        $('#user_login').text("Всё готово");
                        $('#user_login').css({
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

        // Выйти из Кабинета пользователя
        $('#user_exit').click(function() {
            console.log("Выйти");

            $.ajax({
                url: 'ajax/log_exit.php',
                type: 'POST',
                cache: false,
                data: {},
                dataType: 'html',
                success: function(data) {
                    document.location.reload(true);
                }
            });
        });
    </script>

</body>

</html>