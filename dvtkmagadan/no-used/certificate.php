<!-- certificate.php  -->
<?php 
$pageName = 'certificate'; 

?>
<!DOCTYPE html>
<html>
<!--Head здесь находятся title, meta теги и подключения сss файлов-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Группа компаний мир антенн</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/assets/owl.theme.default.css">

    <link rel="stylesheet" href="modal/css/modal-video.min.css">
    <link href="scroll/css/jquery.fullPage.css" type="text/css" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!--[if lte IE 9]>
        <link rel="stylesheet" href="css/styles-ie9.css">
      <![endif]-->
</head>
<?php  
include ("blocks/header.php");
?>
    </header>
    <!-- Верстка Основной части сайта -->
    <main>
      <!-- Лицензии -->
      <div class="container">
        <div class="internal__title">
          <img src="img/logo-none-text.png" alt="" />
          <h3>Лицензии</h3>
        </div>
        <div class="internal__content">
          <div class="internal__content_cert" id="galleryBlock">
            <div class="content_cert_item animated zoomIn" data-animated-name="zoomIn" data-aos="fade-up">
                 <a rel="example_group" href="img/cert-1.jpg" title=""><img alt="" src="img/cert-1.jpg" /></a>
              <p>Лицензия №167221</p>
            </div>
            <div class="content_cert_item animated zoomIn" data-animated-name="zoomIn" data-aos="fade-up"> 
              <a rel="example_group" href="img/cert-2.jpg" title=""><img alt="" src="img/cert-2.jpg" /></a>
             
              <p>Лицензия №167377</p>
            </div>
            <div class="content_cert_item animated zoomIn" data-animated-name="zoomIn" data-aos="fade-up">
              <a rel="example_group" href="img/cert-3.jpg" title=""><img alt="" src="img/cert-2.jpg" /></a>
              <p>Лицензия №167378</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--Модальные окна-->
    <div class="b-main__logo" id="parallaxLogo"></div>
    <div id="block-contacts" class="site__block block-contacts">
        <div class="b-contacts__map" id="mapBlock"></div>
    </div>
    <div class="modal__back" data-modal-close=""></div>
    <div class="form__block modal__block modal__block--small callback-modal" data-modal-close="" data-form-title="Заказать обратный звонок">
        <div class="modal__content">
            <div class="modal__close" data-modal-close=""></div>
            <div class="modal__body">
                <div class="modal__info">
                    <h4>Подключиться к сети “Мир Антенн”</h4>
                    <img src="img/icon/line-form.png" alt="" />
                    <div class="modal__info_top">
                      <img src="img/icon/blue-box.png" alt="" />
                      <p>Дарим 10 дней в подарок на любые услуги</p>
                    </div>
                </div>
                <form>
                    <label class="name input__group input__group--short">
                        <input class="input-name" required="" name="name" type="text" placeholder="Имя" class="input">
                    </label>
                    <label class="phone input__group input__group--short">
                        <input required="" name="phone" type="tel" placeholder="Телефон" class="input">
                    </label>
                    <label class="phone input__group input__group--short">
                        <input class="input-address" required="" name="addres" type="text" placeholder="Адрес" class="input">
                    </label>
                    <div class="input__group text-center">
                        <button type="button" class="button button--large button--shadow">Подключиться</button>
                    </div>
                </form>
                <div class="modal__info">
                    <p>Мы не передаем Ваши данные третьим лицам</p>
                </div>
            </div>
        </div>
    </div>
    <!--Модальное окно с благодарностью после отправки письма-->
    <div class="modal__block modal__block--small success-modal" data-modal-close="">
        <div class="modal__content modal__succes_contant">
            <div class="modal__close" data-modal-close=""></div>
            <div class="modal__body">
                <div class="modal__info">
                    <h4>Спасибо!</h4>
                    <img src="img/icon/line-form.png" alt="" />
                    <p>Наш менеджер перезвонит Вам в ближайшее время</p>
                    <a data-modal-close="">Ок</a>
                </div>
            </div>
        </div>
    </div>
  <!--Подвал сайта-->
    <?php 
     include ("blocks/footer.php");
    ?>
    <!-- js из файла старого certificate.php -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $("a[rel=example_group]").fancybox({
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
      });

    });
	</script>
  </body>
</html>