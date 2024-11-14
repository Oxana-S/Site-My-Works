<!-- tv.php -->
<?php
$pageName = 'tv';
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
                    <li><img src="img/icon/tv.png" alt="Иконка ТВ"> <a class="bottom__menu-active" href="tv.php">ТВ</a>
                    </li>
                    <li><img src="img/icon/video.png" alt="Иконка видеокамеры"> <a href="video.php">Видеонаблюдение</a>
                    </li>
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
    <div class="main__retiree_back">
        <div class="container">
            <div class="main__retiree">
                <div class="main__retiree_left animate__animated animate__bounceInLeft">
                    <img src="img/icon/looop-new.png" alt="Лупа" />
                </div>
                <div class="main__retiree_right">
                    <div class="retiree__right_title animate__animated animate__bounceInDown">
                        <h3>скидка для песнионеров на Цифровое ТВ</h3>
                    </div>
                    <div class="retiree__right_bottom animate__animated animate__bounceInUp">
                        <p><span class="retire-oldprice">450</span>350 <span class="retire-valute">₽/месяц</span> <a
                                onclick="openModal('.callback-modal-36')">Подключить по акции</a></p>
                    </div>
                </div>
                <div class="main__retiree_mobile animate__animated animate__bounceInUp">
                    <p><span class="retire-oldprice">400</span>300 <span class="retire-valute">₽/месяц</span></p>
                    <p><a onclick="openModal('.callback-modal-36')">Подключить по акции</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Список преимуществ -->
    <div class="world-overflow">
        <div class="container">
            <div class="main__world">
                <div class="main__world_left" data-aos="fade-right">
                    <ul>
                        <li>80% домов подклчены к сети<br /> Мир Антенн <img src="img/line.png" alt="Линия" /></li>
                        <li>Изображение высокого качества <img src="img/line.png" alt="Линия" /></li>
                        <!-- <li>Быстрое подключение в <br />день обращения <img src="img/line.png" alt="Линия" /></li> -->
                        <li>Быстрое подключение<img src="img/line.png" alt="Линия" /></li>
                        <li>Более 150 цифровых каналов <img src="img/line.png" alt="Линия" /></li>
                        <li>Цена окончательная <img src="img/line.png" alt="Линия" /></li>
                    </ul>
                    <div class="world_left-bottom">
                        <p>450<span>₽/месяц</span></p>
                        <p class="world_left-bottom-button"><a onclick="openModal('.callback-modal-31')">Подключить</a>
                        </p>
                        <p class="world_left-bottom-links"><a href="index-internet-tv.php">Выгодное предложение:
                                Интернет + ТВ</a></p>
                        <p style="width: 250px"> <a href="img/channel-list-new.pdf" target="_blank" style="
                        color: #ffffff;
                        font-size: 14px;
                        background: #1F0C40;
                        font-weight: 100;
                        border: 1px solid #1F0C40;
                        padding: 10px 10px;
                      ">Список Аналоговых ТВ каналов</a>
                        </p>
                    </div>
                </div>
                <div class="main__world_right" data-aos="fade-left">
                    <img src="img/tele.png" alt="Теле" />
                </div>
            </div>
            <!-- Список преимуществ мобильные-->
            <div class="main__world_mobile" data-aos="fade-up">
                <h3>ТВ “Мир Антенн”</h3>
                <ul>
                    <li>80% домов подключены к сети</li>
                    <li>Изображение высокого качества</li>
                    <li>Подключение в день обращения</li>
                    <li>Более 150 цифровых каналов</li>
                    <li>Цена окончательная</li>
                </ul>
                <div class="world_left-bottom" data-aos="fade-up">
                    <p>400<span>₽/месяц</span></p>
                    <p class="world_left-bottom-button"><a onclick="openModal('.callback-modal-31')">Подключить</a></p>
                    <p class="world_left-bottom-links"><a href="#">Выгодное предложение: Интернет + ТВ</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Список пакетов -->
    <div class="main__title" data-aos="fade-up">
        <h3>
            Расширенные и премиальные пакеты
        </h3>
    </div>
    <div class="container">
        <div class="owl-carousel owl-theme packet-carousel" data-aos="fade-up">
            <div class="packet-carousel-item">
                <img src="img/packet-1.png" alt="" />
                <div class="packet-info">
                    <h3>Матч!</h3>
                    <p>от 3 каналов</p>
                </div>
                <div class="packet-price">
                    <p>380<span>₽/месяц</span></p>
                    <a onclick="openModal('.callback-modal-32')">Подключить</a>
                </div>
            </div>

            <!-- <div class="packet-carousel-item">
                <img src="img/packet-2.png" alt="" />
                <div class="packet-info">
                    <h3>Фильмовой пакет</h3>
                    <p>от 8 каналов</p>
                </div>
                <div class="packet-price">
                    <p>350<span>₽/месяц</span></p>
                    <a onclick="openModal('.callback-modal-33')">Подключить</a>
                </div>
            </div> -->

            <!-- <div class="packet-carousel-item">
                <img src="img/packet-2.png" alt="" />
                <div class="packet-info">
                    <h3>Разное</h3>
                    <p>от 3 каналов</p>
                </div>
                <div class="packet-price">
                    <p>200<span>₽/месяц</span></p>
                    <a onclick="openModal('.callback-modal-34')">Подключить</a>
                </div>
            </div> -->


            <div class="packet-carousel-item">
                <img src="img/packet-3.png" alt="" />
                <div class="packet-info">
                    <h3>Эротический пакет</h3>
                    <p>от 2 каналов</p>
                </div>
                <div class="packet-price">
                    <p>190<span>₽/месяц</span></p>
                    <a onclick="openModal('.callback-modal-35')">Подключить</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Оставьте заявку -->
    <div class="main__form_back">
        <div class="main__title-white" data-aos="fade-up">
            <h3>
                Оставьте заявку и получите 10 дней в подарок на все услуги
            </h3>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="main__form_title">
                Наш менеджер перезвонит Вам в течение 15 минут и подберет наиболее выгодныый тариф
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
    <!-- Услуги провайдера -->
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
<!------>
<div class="form__block modal__block modal__block--small callback-modal-31" data-modal-close=""
    data-form-title="Выгодное предложение 400">
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
<!------>
<div class="form__block modal__block modal__block--small callback-modal-32" data-modal-close=""
    data-form-title="Пакет Матч">
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
<!------>
<div class="form__block modal__block modal__block--small callback-modal-33" data-modal-close=""
    data-form-title="Фильмовый пакет">
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
<!------>
<div class="form__block modal__block modal__block--small callback-modal-34" data-modal-close=""
    data-form-title="Пакет разное">
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
<!------>
<div class="form__block modal__block modal__block--small callback-modal-35" data-modal-close=""
    data-form-title="Эротический пакет">
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
<!------>
<div class="form__block modal__block modal__block--small callback-modal-36" data-modal-close=""
    data-form-title="Скидка для пенсионеров">
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