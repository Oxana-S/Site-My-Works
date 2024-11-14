<!-- bussines.php  -->
<?php $pageName = 'bussines';

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
                    <li><img src="img/icon/wifi.png" alt="Иконка Вай Фай"> <a class="bottom__menu-active"
                            href="bussines.php"> Интернет</a></li>
                    <li><img src="img/icon/video.png" alt="Иконка видеокамеры"> <a
                            href="bussines-video.php">Видеонаблюдение</a></li>
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
    </header>
    <!-- Верстка Основной части сайта -->
    <main>
        <!--Текст на баннере сверху-->
        <div class="main__header_overflow">
            <div class="main__header" style="background-image:url(img/background/back-one.png">
                <div class="container">
                    <div class="main__header_title padding-top animate__animated animate__bounceInLeft">
                        Дарим 50.000 рублей<br />
                    </div>
                    <div class="main__header_text animate__animated animate__bounceInLeft">
                        Оставьте заявку и получите до 50 000 рублей на продвижение вашего бизнеса в интернете, а также
                        10 дней на все услуги в подарок
                    </div>
                    <div class="main__header_text-mobile animate__animated animate__bounceInLeft">
                        <p>Оставьте заявку и получите до 50 000 рублей на продвижение вашего бизнеса в интернете, а
                            также 10 дней на все услуги в подарок</p>
                    </div>
                    <div class="main__header_link animate__animated animate__bounceInUp">
                        <a onclick="openModal('.callback-modal')">Подключить</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Выбор тарифов и слайдер тарифов-->
        <div class="main__title" data-aos="fade-up">
            <h3>
                Выбери свой тариф
            </h3>
        </div>
        <div class="container">
            <div class="main__tarif" data-aos="fade-up">
                <div class="owl-carousel owl-theme inside-tarif-carousel">
                    <div class="tarif-carousel-item">
                        <div class="tarif-inside-background">
                            <img src="img/icon/10.png" alt="" />
                            <p>Юридические лица 10</p>
                        </div>
                        <div class="tarif-carousel-top"></div>
                        <div class="tarif-carousel-content">
                            <p class="tarif-content-title">Безлимитный</p>
                            <p class="tarif-content-megabit">10 Мбит/с</p>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>Специальные цены на облачное видеонаблюдение</p>
                            </div>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>До 5-ти телевизоров за одну абонентскую плату</p>
                            </div>
                        </div>
                        <div class="tarif-carousel-price">
                            <p><span>1999</span>₽/месяц</p>
                            <a onclick="openModal('.callback-modal-21')">Подключить</a>
                        </div>
                    </div>
                    <div class="tarif-carousel-item">
                        <div class="tarif-inside-background">
                            <img src="img/icon/20.png" alt="" />
                            <p>Юридические лица 20</p>
                        </div>
                        <div class="tarif-carousel-top"></div>
                        <div class="tarif-carousel-content">
                            <p class="tarif-content-title">Безлимитный</p>
                            <p class="tarif-content-megabit">20 Мбит/с</p>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>Специальные цены на облачное видеонаблюдение</p>
                            </div>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>До 5-ти телевизоров за одну абонентскую плату</p>
                            </div>
                        </div>
                        <div class="tarif-carousel-price">
                            <p><span>2999</span>₽/месяц</p>
                            <a onclick="openModal('.callback-modal-22')">Подключить</a>
                        </div>
                    </div>
                    <div class="tarif-carousel-item">
                        <div class="tarif-inside-background">
                            <img src="img/icon/30.png" alt="" />
                            <p>Юридические лица 30</p>
                        </div>
                        <div class="tarif-carousel-top"></div>
                        <div class="tarif-carousel-content">
                            <p class="tarif-content-title">Безлимитный</p>
                            <p class="tarif-content-megabit">30 Мбит/с</p>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>Телевидение в подарок</p>
                            </div>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>Камера облачного видеонаблюдения в подарок</p>
                            </div>
                        </div>
                        <div class="tarif-carousel-price">
                            <p><span>3999</span>₽/месяц</p>
                            <a onclick="openModal('.callback-modal-23')">Подключить</a>
                        </div>
                    </div>
                    <div class="tarif-carousel-item">
                        <div class="tarif-inside-background">
                            <img src="img/icon/50.png" alt="" />
                            <p>Юридические лица 50</p>
                        </div>
                        <div class="tarif-carousel-top"></div>
                        <div class="tarif-carousel-content">
                            <p class="tarif-content-title">Безлимитный</p>
                            <p class="tarif-content-megabit">50 Мбит/с</p>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>WI-FI роутер входит в тариф</p>
                            </div>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>Телевидение в подарок</p>
                            </div>
                            <div class="tarif-content-box">
                                <img src="img/icon/box.png" alt="Иконка коробки" />
                                <p>Камера облачного видеонаблюдения в подарок</p>
                            </div>
                        </div>
                        <div class="tarif-carousel-price">
                            <p><span>6499</span>₽/месяц</p>
                            <a onclick="openModal('.callback-modal-24')">Подключить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Дополнительные опции-->
        <div class="main__title" data-aos="fade-up">
            <h3>
                Дополнительные опции
            </h3>
        </div>
        <div class="container">
            <div class="main__option">
                <div class="main__option_left" data-aos="fade-right">
                    <img src="img/icon/cloud.png" alt="" />
                </div>
                <div class="main__option_right" data-aos="fade-up">
                    <ul>
                        <li>Подключение и резервирование</li>
                        <li>Корпоративная сеть (VLAN)</li>
                        <li>Блоки выделенных IP адресов</li>
                        <li>Публичные WiFi-сети</li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<!--Как мы подключаем интернет-->
<div class="main__title" data-aos="fade-up">
    <h3>
        Как мы подключаем интернет
    </h3>
</div>
<div class="container">
    <div class="main__steps">
        <h3 data-aos="fade-up">Вы сможете пользоваться высокоскоростным интернетом уже завтра</h3>
        <div class="main__steps_list">
            <div class="main__steps_item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="main__steps_number-block">
                    <p class="steps_item-number">1</p>
                    <img src="img/icon/arrow.png" alt="Иконка стрелок" />
                </div>
                <p class="steps_item-title">Выберите тариф</p>
                <div class="steps_item-arrow">
                    <img src="img/icon/arrow.png" alt="Иконка стрелок" />
                </div>
                <p class="steps_item-text">
                    Ознакомьтесь с нашими тарифами и выберите подходящий. Если Вам нужна помощь, наши операторы Вам
                    помогут.
                </p>
            </div>
            <div class="main__steps_item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="main__steps_number-block">
                    <p class="steps_item-number">2</p>
                    <img src="img/icon/arrow.png" alt="Иконка стрелок" />
                </div>
                <p class="steps_item-title">Оставьте заявку</p>
                <div class="steps_item-arrow">
                    <img src="img/icon/arrow.png" alt="Иконка стрелок" />
                </div>
                <p class="steps_item-text">
                    Оставьте заявку удобным для Вас способом: на сайте, по телефону или в нашем офисе.
                </p>
            </div>
            <div class="main__steps_item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="main__steps_number-block">
                    <p class="steps_item-number">3</p>
                    <img src="img/icon/arrow.png" alt="Иконка стрелок" />
                </div>
                <p class="steps_item-title">Выезд мастера</p>
                <div class="steps_item-arrow">
                    <img src="img/icon/arrow.png" alt="Иконка стрелок" />
                </div>
                <p class="steps_item-text">
                    Специалист приедет в удобное для Вас время и проведет интернет.
                </p>
            </div>
            <div class="main__steps_item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="main__steps_number-block">
                    <p class="steps_item-number">4</p>
                    <!-- <img src="img/icon/arrow-end.png" alt="Иконка стрелок" /> -->
                </div>
                <p class="steps_item-title">Пользуйтесь</p>
                <div class="steps_item-arrow">

                </div>
                <p class="steps_item-text">
                    В течение 10 дней мы предоставляем интернет бесплатно!
                </p>
            </div>
            <div class="main__steps_list-mobile">
                <div class="main__steps_item-mobile" data-aos="fade-up">
                    <div class="steps_item-mobile-number">1</div>
                    <div class="steps_item-mobile-text">
                        <h4>Выберите тариф</h4>
                        <p>Ознакомьтесь с нашими тарифами и выберите подходящий. Если Вам нужна помощь, наши операторы
                            Вам помогут</p>
                    </div>
                </div>
                <div class="main__steps_item-mobile" data-aos="fade-up">
                    <div class="steps_item-mobile-number">2</div>
                    <div class="steps_item-mobile-text">
                        <h4>Оставьте заявку</h4>
                        <p>Оставьте заявку удобным для Вас способом: на сайте, по телефону или в нашем офисе.</p>
                    </div>
                </div>
                <div class="main__steps_item-mobile" data-aos="fade-up">
                    <div class="steps_item-mobile-number">3</div>
                    <div class="steps_item-mobile-text">
                        <h4>Выезд мастера</h4>
                        <p>Специалист приедет в удобное для Вас времяи проведет интернет в день приема заявки.</p>
                    </div>
                </div>
                <div class="main__steps_item-mobile" data-aos="fade-up">
                    <div class="steps_item-mobile-number">4</div>
                    <div class="steps_item-mobile-text">
                        <h4>Пользуйтесь</h4>
                        <p>В течение 10 дней мы предоставляем интернет бесплатно!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Слайдер "Более 10 00 абонентов выбрали нас"-->
<div class="main__title" data-aos="fade-up">
    <h3>
        Более 10 000 абонентов уже выбрали нас
    </h3>
</div>
<div class="container">
    <div class="main__advantages" data-aos="fade-up">
        <div class="owl-carousel owl-theme advantages-carousel">
            <div class="advantages-carousel-item">
                <div class="advantages-carousel-img">
                    <img src="img/icon/startup.png" alt="Иконка">
                </div>
                <p class="advantages-carousel-title">Высокоскоростной интернет</p>
                <p class="advantages-carousel-text">Наш интернет работает быстро и без перебоев на терртории Магаданской
                    области</p>
            </div>
            <div class="advantages-carousel-item">
                <div class="advantages-carousel-img">
                    <img src="img/icon/free-wifi.png" alt="Иконка" style="height: 84px;">
                </div>
                <p class="advantages-carousel-title">Подключим Вас бесплатно</p>
                <p class="advantages-carousel-text">Мы подключим Вас к нашей сети абсолютно бесплатно</p>
            </div>
            <div class="advantages-carousel-item">
                <div class="advantages-carousel-img">
                    <img src="img/icon/router.png" alt="Иконка">
                </div>
                <p class="advantages-carousel-title">Мы сделаем интернет по Wi-Fi</p>
                <p class="advantages-carousel-text">У нас мощные двухдиапазонные Wi-Fi роутеры с покрытием до 150 кв.м.
                </p>
            </div>
            <div class="advantages-carousel-item">
                <div class="advantages-carousel-img">
                    <img src="img/icon/procent.png" alt="Иконка" style="height: 61px;">
                </div>
                <p class="advantages-carousel-title">Скидки и акции</p>
                <p class="advantages-carousel-text">Регулряно запускаем акции для новых и постоянных клиентов. С нами
                    выгодно!</p>
            </div>
            <div class="advantages-carousel-item">
                <div class="advantages-carousel-img">
                    <img src="img/icon/group.png" alt="Иконка" style="height: 94px;">
                </div>
                <p class="advantages-carousel-title">Опыт работы</p>
                <p class="advantages-carousel-text">Наша компания была основана в 2001 году. За время работы мы
                    оптимизировали все процессы, чтобы Вы оставались на связи 24/7</p>
            </div>
            <div class="advantages-carousel-item">
                <div class="advantages-carousel-img">
                    <img src="img/icon/job-search.png" alt="Иконка">
                </div>
                <p class="advantages-carousel-title">Специалисты</p>
                <p class="advantages-carousel-text">Большинство сотрудников имеют опыт более 7 лет в сфере
                    телекоммуникаций</p>
            </div>
        </div>
    </div>
</div>
<!--Оставление заявки перед футером-->
<div class="main__form_back" data-aos="fade-up">
    <div class="main__title-white" data-aos="fade-up">
        <h3>
            Оставьте заявку и получите до 50 000 рублей
        </h3>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="main__form_title">
            Оставьте заявку и получите до 50 000 рублей на продвижение вашего бизнеса в интернете, а также 10 дней на
            все услуги в подарок. Наш менеджер перезвонит Вам и подберет наиболее выгодный тариф
        </div>
        <div class="form__block" data-form-title="Оставь заявку и получи на счет 799 рублей">
            <form class="main__form main__form_flex">
                <label class="name input__group input__group--short">
                    <input required="" name="name" type="text" placeholder="Имя">
                </label>
                <label class="phone input__group input__group--short">
                    <input class="main__form_phone" required="" name="phone" type="tel" placeholder="Телефон">
                </label>
                <button type="button" class="button button--large button--shadow main__form_button">Отправить</button>
            </form>
        </div>
    </div>
</div>
<!--Текст перед футером услуги провайдера-->
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
        <p>Для удобства клиентов группы компаний работают три пункта обслуживания абонентов в различных районах города.
            При возникновении аварийных и неотложных проблем всегда оперативно готова помочь аварийно-сервисная служба.
        </p>
        <p>Бесплатный выезд эксперта для расчета окончательной стоимости подключения Интернета, Цифрового телевидения и
            облачного видеонаблюдения.</p>
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
<!---модальное окно-->
<div class="form__block modal__block modal__block--small callback-modal-21" data-modal-close=""
    data-form-title="Юридические лица 10">
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
<!---модальное окно-->
<div class="form__block modal__block modal__block--small callback-modal-22" data-modal-close=""
    data-form-title="Юридические лица 20">
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
<!---модальное окно-->
<div class="form__block modal__block modal__block--small callback-modal-23" data-modal-close=""
    data-form-title="Юридические лица 30">
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
<!---модальное окно-->
<div class="form__block modal__block modal__block--small callback-modal-24" data-modal-close=""
    data-form-title="Юридические лица 50">
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