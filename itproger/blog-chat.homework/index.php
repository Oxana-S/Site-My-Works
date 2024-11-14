<!DOCTYPE html>
<html lang="ru">

<head>
    <?php 
    $website_title = 'Блог Мастер';
    require_once 'blocks/head.php'; ?>
</head>

<body>
    <?php //require_once 'blocks/header.php'; ?>
    <!-- Подключаю шапку с регистрацией через ajax -->
    <?php require_once 'blocks/header.php'; ?>

    <main>
        <!-- <p>Main text</p> -->
        <h1>Интересные статьи</h1>

        <?php require_once 'blocks/articles.php'; ?>

    </main>

    <?php require_once 'blocks/aside.php'; ?>

    <!-- 
        Блок с Чатом 
    -->
    <?php require_once 'blocks/chat.php'; ?>


    <?php require_once 'blocks/footer.php'; ?>
    

</body>

</html>