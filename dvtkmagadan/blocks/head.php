<!-- head.php -->

<!DOCTYPE html>
<html lang="ru">
<!--Head здесь находятся title, meta теги и подключения сss файлов-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>
        <?php
        if ($pageName == 'index') {
            echo 'Группа компаний мир антенн';
        }
        if ($pageName == 'about') {
            echo 'О компании Мир Антенн';
        }
        ?>
    </title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/assets/owl.theme.default.css">

    <!-- Для страницы csrtificate.php -->
    <!--<link rel="stylesheet" href="modal/css/modal-video.min.css">
    <link href="scroll/css/jquery.fullPage.css" type="text/css" rel="stylesheet">-->
    <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/favicon-32x32">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/favicon-32x32">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/favicon-32x32">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/favicon-32x32">
    <!-- GOOGLE WEB FONT -->
    <link rel="stylesheet" href="fonts/bebas-neue/bebas-neue.css">
    <link rel="stylesheet" href="fonts/museo-sans/museo-sans.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--[if lte IE 9]>
        <link rel="stylesheet" href="css/styles-ie9.css">
      <![endif]-->
</head>