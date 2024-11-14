<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = 'Регистрация';
    require_once 'blocks/head.php';
    ?>
</head>

<body>
    <?php require_once 'blocks/header.php'; ?>

    <!-- Основной Раздел на странице -->
    <main>
        <h1>Регистрация</h1>
        <!-- Форма РЕГИСТРАЦИИ на сайте -->
        <form>
            <label for="username">Ваше имя:</label>
            <input id="username" type="text" name="username">

            <label for="email">Email:</label>
            <input id="email" type="text" name="email">

            <label for="login">Логин:</label>
            <input id="login" type="text" name="login">

            <label for="password">Пароль:</label>
            <input id="password" type="password" name="password">

            <div id="error-block" class="error-mess"></div>

            <button id="user_reg" type="button">Отправить</button>

        </form>

    </main>

    <?php require_once 'blocks/aside.php'; ?>

    <?php require_once 'blocks/footer.php'; ?>

    <!-- Подключение скрипта обработки Формы РЕГИСТРАЦИИ технологией 'ajax' -->
    <script>
        $('#user_reg').click(function() {
            let username = $('#username').val();
            let email = $('#email').val();
            let login = $('#login').val();
            let password = $('#password').val();
            // console.log()

            $.ajax({
                url: 'ajax/reg.php',
                type: 'POST',
                cache: false,
                data: {
                    'username': username,
                    'email': email,
                    'login': login,
                    'password': password
                },
                dataType: 'html',
                success: function(data) {
                    // console.log(data);
                    if (data === "Done") {
                        $('#user_reg').text("Всё готово");
                        $('#user_reg').css({
                            'background': 'green',
                            'font-size': '18px'
                        });

                        $('#error-block').hide();
                        // Очистить поля:
                        // Можно перезагрузкой страницы:
                        // document.location.reload(true);
                        // А можно без перезагрузки:
                        // Очистка полей 
                        $('#username').val("");
                        $('#email').val("");
                        $('#login').val("");
                        $('#password').val("");

                        function chang_sign() {
                            $('#user_reg').css({
                                'background': '#e9a723',
                                'font-size': '16px'
                            });
                            $('#user_reg').text("Отправить")
                        }
                        setInterval(chang_sign, 1000);
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