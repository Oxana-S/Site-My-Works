<!-- video.php  -->
<?php
$pageName = 'video';
include("blocks/head.php");
include("blocks/header.php");

?>

<!--Основная нижняя часть шапки-->
<div class="header__bottom">
    <div class="container">
        <div class="header__bottom_blocks">
            <div class="bottom_blocks-logo">
                <a href="index.php"><img src="img/logo.png" alt="Логотип" /></a>
            </div>
            <div class="bottom_blocks-menu">
                <ul>
                    <li><img src="img/icon/wifi.png" alt="Иконка Вай Фай"> <a href="index.php"> Интернет</a></li>
                    <li><img src="img/icon/wifi-tv.png" alt="Иконка Вай Фай и ТВ"> <a href="index-internet-tv.php">
                            Интернет + ТВ</a></li>
                    <li><img src="img/icon/tv.png" alt="Иконка ТВ"> <a href="tv.php">ТВ</a></li>
                    <li><img src="img/icon/video.png" alt="Иконка видеокамеры"> <a class="bottom__menu-active"
                            href="video.php">Видеонаблюдение</a></li>
                </ul>
            </div>
            <div class="bottom_blocks-links">
                <div class="blocks-links-link back-blue">
                    <a href="https://lk.telemagadan.ru/index.xhtml" target="_blank">Личный кабинет</a>
                </div>
                <div class="blocks-links-link back-yellow">
                    <a onclick="openModal('.callback-modal')">Подключиться</a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- Верстка Основной части сайта -->
<main>
    <div class="main__request_back">
        <!-- Информация на бэкграунде И прием заявки-->
        <img class="camera-img animate__animated animate__bounceInUp" src="img/camera1.png" alt="" />
        <div class="container">
            <div class="main__request">
                <h3 class="animate__animated animate__bounceInLeft">Будь в курсе 24/7</h3>
                <p class="animate__animated animate__bounceInLeft">Видеонаблюдение с установкой “под ключ” за 1 день</p>
                <div class="form__block" data-form-title="Будь в курсе 24/7">
                    <form class="request__form animate__animated animate__bounceInUp">
                        <label class="name input__group input__group--short">
                            <input required="" name="name" type="text" placeholder="Имя">
                        </label>
                        <label class="name input__group input__group--short">
                            <input class="main__form_phone" required="" name="phone" type="tel" placeholder="Телефон">
                        </label>
                        <button type="button" class="button button--large button--shadow request__form_button">Оставить
                            заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Список тарифов слайдер -->
    <div class="main__title" data-aos="fade-up">
        <h3>
            Тарифы
        </h3>
    </div>
    <div class="container">
        <div class="inside-tarif">
            <div class="inside-tarif-item" data-aos="zoom-in-down">
                <div class="inside-tarif-item-img">
                    <img src="img/icon/house.png" alt="" />
                </div>
                <div class="inside-tarif-item-title">
                    <h3>1 Камера</h3>
                </div>
                <ul>
                    <!-- <li>1 камера</li> -->

                    <li>Время хранения: 5 дней</li>

                    <!-- <li>Установка в день обращения</li> -->

                </ul>
                <div class="inside-tarif-price">
                    <p>300<br><span>₽/месяц</span></p>
                    <p style="opacity: 0; line-height: 25px;">-----</p>
                    <a onclick="openModal('.callback-modal-41')">Подключить</a>
                </div>
            </div>
            <div class="inside-tarif-item" data-aos="zoom-in-down">
                <div class="inside-tarif-item-img">
                    <img src="img/icon/house.png" alt="" />
                </div>
                <div class="inside-tarif-item-title">
                    <h3>Более 3 Камер</h3>
                </div>
                <ul>
                    <!-- <li>2/3 камеры</li> -->

                    <li>Время хранения: 5 дней</li>

                    <!-- <li>Установка в день обращения</li> -->

                </ul>
                <div class="inside-tarif-price">
                    <p>250<br><span>₽/месяц</span>
                        <br><span style="font-size:16px">за одну камеру</span>
                    </p>
                    <a onclick="openModal('.callback-modal-42')">Подключить</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Список возможностей -->
    <div class="main__video_back">
        <div class="main__title" data-aos="fade-up">
            <h3>
                Возможности видеонаблюдения
            </h3>
            <h4>Мы используем камеры нового поколения </h4>
        </div>
        <div class="container">
            <div class="main__vide_mobile" data-aos="fade-right">
                <ul>
                    <li>Контроль онлайн из любой точки мира</li>
                    <li>Быстрое подключение</li>
                    <li>Контроль помещения 24/7</li>
                    <li>Отслеживание количества посетителей</li>
                    <li>Отслеживание качества обслуживания</li>
                    <li>Четкое изображение</li>
                    <li>Надежное хранение видеозаписи</li>
                </ul>
                <img src="img/camera1.png" alt="" />
            </div>
            <div class="main__video">
                <div class="main__video_left" data-aos="fade-right">
                    <ul>
                        <li class="video_left-one">Контроль онлайн из любой точки мира</li>
                        <li class="video_left-two">Быстрое подключение</li>
                        <li class="video_left-three">Контроль помещения 24/7</li>
                        <li class="video_left-for">Отслеживание количества посетителей</li>
                    </ul>
                </div>
                <div class="main__video_img">
                    <img src="img/camera1.png" alt="" />
                </div>
                <div class="main__video_right" data-aos="fade-left">
                    <ul>
                        <li class="video_right-one">Отслеживание качества обслуживания</li>
                        <li class="video_right-two">Четкое изображение</li>
                        <li class="video_right-three">Надежное хранение видеозаписи</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Стоимость камеры и подключение-->
    <div class="main__title" data-aos="fade-up">
        <h3>
            Стоимость камеры и подключение “ под ключ” от 6 999 руб
        </h3>
        <h4>Бесплатный выезд эксперта для расчета окончательной стоимости</h4>
        <div class="container">
            <ul class="camera-list">
                <li><span>+</span>Спроектируем систему наблюдения для вашего бизнеса под ключ.</li>
                <li><span>+</span>Проконсультируем и поможем выбрать камеры для разных объектов.</li>
                <li><span>+</span>Специалисты проведут монтаж оборудования и настроят видеокамеры.</li>
                <li><span>+</span>Покажем как пользоваться и управлять видеонаблюдением.</li>
                <li><span>+</span>Оставьте заявку и получите специальные условия на подключение wi-fi интернета,<br />
                    цифрового телевидения и облачного видеонаблюдения.</li>
            </ul>
        </div>
    </div>
    <!-- Мне нужно больше камер -->
    <!--<div class="main__title" data-aos="fade-up">
          <h3>
            Мне нужно больше камер
          </h3>
          <h4>При подключении дополнительных камер вы получаете дополнительную скидку</h4>
          </div>-->
    <!--<div class="container" data-aos="zoom-in-down">
          <div class="main__procent">
            <div class="main__procent_item">
              <div class="procent_item-left procent-mobile-one">5%</div>
              <div class="procent_item-right">При подключении 2-х камер</div>
            </div>
            <div class="main__procent_item">
              <div class="procent_item-left procent-mobile-two">10%</div>
              <div class="procent_item-right">При подключении 3/4-х камер</div>
            </div>
            <div class="main__procent_item">
              <div class="procent_item-left procent-mobile-thre">15%</div>
              <div class="procent_item-right">При подключении 5-и и более камер</div>
            </div>
          </div>
        </div>-->

    <!-- Оставь заявку -->
    <div class="main__form_back" data-aos="fade-up">

        <div class="main__title-white" data-aos="fade-up">
            <h3>
                Оставьте заявку и получите до 50 000 рублей
            </h3>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="main__form_title">
                Оставьте заявку и получите до 50 000 рублей на продвижение вашего бизнеса в интернете, а также 10 дней
                на все услуги в подарок. Наш менеджер перезвонит Вам и подберет наиболее выгодный тариф
            </div>
            <div class="form__block" data-form-title="Оставь заявку и получи на счет 799 рублей">
                <form class="main__form main__form_flex">
                    <label class="name input__group input__group--short">
                        <input required="" name="name" type="text" placeholder="Имя">
                    </label>
                    <label class="phone input__group input__group--short">
                        <input class="main__form_phone" required="" name="phone" type="tel" placeholder="Телефон">
                    </label>
                    <button type="button"
                        class="button button--large button--shadow main__form_button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Текст перед футером -->
    <div class="main__title-blue" data-aos="fade-up">
        <h3>
            Услуги провайдера Мир Антенн
        </h3>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="main__services">
            <div class="main__services_top">
                <img src="img/icon/vector-icon.png" alt="Иконка" />
                <p>Группа компани “Мир Антенн” предоставляет телекоммуникационные услуги на территории Магадана и
                    Магаданской области. Наша компания была основана в 2001 году. </p>
            </div>
            <p>Сеть кабельного телевидения от группы компаний «Мир Антенн» на 100% использует современные оптоволоконные
                технологии. Специалисты предприятия ежегодно повышают свою квалификацию. Мы гарантируем качество наших
                услуг.</p>
            <p>Для удобства клиентов группы компаний работают три пункта обслуживания абонентов в различных районах
                города. При возникновении аварийных и неотложных проблем всегда оперативно готова помочь
                аварийно-сервисная служба. </p>
        </div>
    </div>
</main>
<!--Модальные окна-->
<div class="b-main__logo" id="parallaxLogo"></div>
<div id="block-contacts" class="site__block block-contacts">
    <div class="b-contacts__map" id="mapBlock"></div>
</div>
<div class="modal__back" data-modal-close=""></div>
<div class="form__block modal__block modal__block--small callback-modal" data-modal-close=""
    data-form-title="Заказать обратный звонок">
    <div class="modal__content">
        <div class="modal__close" data-modal-close=""></div>
        <div class="modal__body">
            <div class="modal__info">
                <h4>Подключиться к сети “Мир Антенн”</h4>
                <img src="img/icon/line-form.png" alt="" />
                <div class="modal__info_top">
                    <img src="img/icon/blue-box.png" alt="" />
                    <p>Дарим 799 бонусых рублей на все услуги</p>
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
                    <input class="input-address" required="" name="addres" type="text" placeholder="Адрес"
                        class="input">
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
<div class="form__block modal__block modal__block--small callback-modal-41" data-modal-close=""
    data-form-title="Тариф мой двор">
    <div class="modal__content">
        <div class="modal__close" data-modal-close=""></div>
        <div class="modal__body">
            <div class="modal__info">
                <h4>Подключиться к сети “Мир Антенн”</h4>
                <img src="img/icon/line-form.png" alt="" />
                <div class="modal__info_top">
                    <img src="img/icon/blue-box.png" alt="" />
                    <p>Дарим 799 бонусых рублей на все услуги</p>
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
                    <input class="input-address" required="" name="addres" type="text" placeholder="Адрес"
                        class="input">
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
<div class="form__block modal__block modal__block--small callback-modal-42" data-modal-close=""
    data-form-title="Тариф мой бизнес">
    <div class="modal__content">
        <div class="modal__close" data-modal-close=""></div>
        <div class="modal__body">
            <div class="modal__info">
                <h4>Подключиться к сети “Мир Антенн”</h4>
                <img src="img/icon/line-form.png" alt="" />
                <div class="modal__info_top">
                    <img src="img/icon/blue-box.png" alt="" />
                    <p>Дарим 799 бонусых рублей на все услуги</p>
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
                    <input class="input-address" required="" name="addres" type="text" placeholder="Адрес"
                        class="input">
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
include("blocks/footer.php");
?>
</body>

</html>