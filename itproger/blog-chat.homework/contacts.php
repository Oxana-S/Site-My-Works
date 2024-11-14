<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = 'Контакты';
    require_once 'blocks/head.php';
    ?>
</head>

<body>
    <?php require_once 'blocks/header.php'; ?>

    <!-- Основной Раздел на странице -->
    <main>
        <h1>Контакты</h1>
        <!-- Форма РЕГИСТРАЦИИ на сайте -->
        <form class="contacts">
            <label for="name">Ваше имя:</label>
            <input id="name" type="text" name="name">

            <label for="email">Email:</label>
            <input id="email" type="text" name="email">

            <label for="message">Сообщение:</label>
            <textarea id="message"  name="message"></textarea>


            <div id="error-block" class="error-mess"></div>

            <button id="message_send" type="button">Отправить</button>

        </form>

    </main>

    <?php require_once 'blocks/aside.php'; ?>

    <?php require_once 'blocks/footer.php'; ?>

    <!-- Подключение скрипта обработки Формы КОНТАКТЫ технологией 'ajax' -->
    <script>
        $('#message_send').click(function() {
            let name = $('#name').val();
            let email = $('#email').val();
            let message = $('#message').val();
            // console.log()

            $.ajax({
                url: 'ajax/mail.php',
                type: 'POST',
                cache: false,
                data: {
                    'name': name,
                    'email': email,
                    'message': message,
                },
                dataType: 'html',
                success: function(data) {
                    // console.log(data);
                    if (data === "Done") {
                        $('#message_send').text("Отправлено");
                        $('#message_send').css({
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
                        $('#message').val("");
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