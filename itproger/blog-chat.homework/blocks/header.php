<header class="header">
    <a href="index.php"><span class="logo">Blog Master</span></a>
    <nav>
        <a href="index.php">Главная</a>
        <a href="contacts.php">Контакты</a>
        <?php if (isset($_COOKIE['log_login'])) : ?>
            <a href="articles_add.php" class="lnk">Добавить статью</a>
            <a href="users.php" class="btn">Список пользователей</a>
            <a href="login.php" class="btn">Кабинет пользователя</a>
        <?php else : ?>

            <a href="login.php" class="btn">Войти</a>
            <a href="register.php" class="btn">Регистрация</a>
        <?php endif; ?>
    </nav>
</header>