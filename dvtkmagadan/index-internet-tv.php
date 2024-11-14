<!-- index-internet.php  -->
<?php
$pageName = 'index-internet';
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
                    <li><img src="img/icon/wifi-tv.png" alt="Иконка Вай Фай и ТВ"> <a class="bottom__menu-active"
                            href="index-internet-tv.php"> Интернет + ТВ</a></li>
                    <li><img src="img/icon/tv.png" alt="Иконка ТВ"> <a href="tv.php">ТВ</a></li>
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
    <!--Текст на баннере сверху-->
    <div class="main__header_overflow">
        <div class="main__header" style="background-image:url(img/background/back-one.png">
            <div class="container">
                <div class="main__header_title animate__animated animate__bounceInLeft">
                    Подключим к нашей сети:<br />
                    <span>Бесплатно</span>
                </div>
                <div class="main__header_text animate__animated animate__bounceInLeft">
                    Быстрый интернет, облачное видеонаблюдение, цифровое ТВ
                </div>
                <div class="main__header_text-mobile animate__animated animate__bounceInUp">
                    <ul>
                        <li>Быстрый интернет</li>
                        <li>облачное видеонаблюдение</li>
                        <li>цифровое ТВ</li>
                    </ul>
                </div>
                <div class="main__header_link animate__animated animate__bounceInUp">
                    <a onclick="openModal('.callback-modal')">Подключить</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Ссылка на якорь #yakor2 блока -->
    <div id="yakor2"></div>
    <!-- / Ссылка на блок -->


    <!--Выбор тарифов и слайдер тарифов-->
    <div class="main__title" data-aos="fade-up">
        <h3>
            Выбери свой тариф
        </h3>
    </div>
    <div class="container">
        <div class="main__tarif" data-aos="fade-up">
            <div id="usual1" class="usual">
                <ul>
                    <!-- Подключение Скрипта перехода по ссылкам к якорю (yakor1) на страницу /index.php#yakor1-->
                    <li><a onclick="javascript:addURL(this, '#yakor1');" href="index.php"
                            class="main__tarif--sel">Интернет</a></li>
                    <li><a href="index-internet-tv.php" class="selected">Интернет + ТВ</a></li>
                </ul>
                <div id="tab1">
                    <div class="owl-carousel owl-theme tarif-carousel">
                        <div class="tarif-carousel-item">
                            <div class="tarif-carousel-top">
                                <p>Планета</p>
                                <img src="img/icon/planet.png" alt="Иконка планеты">
                            </div>
                            <div class="tarif-carousel-content">
                                <p class="tarif-content-title">Безлимитный</p>
                                <p class="tarif-content-megabit">10 Мбит/с</p>

                                <!-- <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки">
                                    <p>Мощный Wi-Fi роутер в рассрочку</p>
                                </div>
                                <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки">
                                    <p>10 дней в подарок при подключении</p>
                                </div> -->

                            </div>
                            <div class="tarif-carousel-price">
                                <p><span>1250</span>₽/месяц</p>
                                <a onclick="openModal('.callback-modal-6')">Подключить</a>
                            </div>
                        </div>
                        <div class="tarif-carousel-item">
                            <div class="tarif-carousel-heat">
                                Хит
                            </div>
                            <div class="tarif-carousel-top">
                                <p>Звезда</p>
                                <img src="img/icon/star.png" alt="Иконка планеты">
                            </div>
                            <div class="tarif-carousel-content">
                                <p class="tarif-content-title">Безлимитный</p>
                                <p class="tarif-content-megabit">20 Мбит/с</p>

                                <!-- <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>WI-FI роутер входит в тариф</p>
                                </div>
                                <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки">
                                    <p>10 дней в подарок при подключении</p>
                                </div> -->

                            </div>
                            <div class="tarif-carousel-price">
                                <p><span>1450</span>₽/месяц</p>
                                <a onclick="openModal('.callback-modal-7')">Подключить</a>
                            </div>
                        </div>
                        <div class="tarif-carousel-item">
                            <div class="tarif-carousel-top">
                                <p>Галактика</p>
                                <img src="img/icon/galactic.png" alt="Иконка планеты">
                            </div>
                            <div class="tarif-carousel-content">
                                <p class="tarif-content-title">Безлимитный</p>
                                <p class="tarif-content-megabit">30 Мбит/с</p>

                                <!-- <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>Мощный Wi-Fi роутер в рассрочку</p>
                                </div>
                                <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>10 дней в подарок при подключении</p>
                                </div> -->

                            </div>
                            <div class="tarif-carousel-price">
                                <p><span>1750</span>₽/месяц</p>
                                <a onclick="openModal('.callback-modal-8')">Подключить</a>
                            </div>
                        </div>
                        <div class="tarif-carousel-item">
                            <div class="tarif-carousel-top">
                                <p>Вселенная</p>
                                <img src="img/icon/galactic.png" alt="Иконка планеты">
                            </div>
                            <div class="tarif-carousel-content">
                                <p class="tarif-content-title">Безлимитный</p>
                                <p class="tarif-content-megabit">50 Мбит/с</p>

                                <!-- <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>Мощный Wi-Fi роутер в рассрочку</p>
                                </div>
                                <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>10 дней в подарок при подключении</p>
                                </div> -->

                            </div>
                            <div class="tarif-carousel-price">
                                <p><span>2000</span>₽/месяц</p>
                                <a onclick="openModal('.callback-modal-9')">Подключить</a>
                            </div>
                        </div>
                        <div class="tarif-carousel-item">
                            <div class="tarif-carousel-top">
                                <p>Вселенная +</p>
                                <img src="img/icon/vselennaya2.png" alt="Иконка планеты">
                            </div>
                            <div class="tarif-carousel-content">
                                <p class="tarif-content-title">Безлимитный</p>
                                <p class="tarif-content-megabit">100 Мбит/с</p>

                                <!-- <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>WI-FI роутер входит в тариф</p>
                                </div>
                                <div class="tarif-content-box">
                                    <img src="img/icon/box.png" alt="Иконка коробки" />
                                    <p>10 дней в подарок при подключении</p>
                                </div> -->

                            </div>
                            <div class="tarif-carousel-price">
                                <p><span>2400</span>₽/месяц</p>
                                <a onclick="openModal('.callback-modal-10')">Подключить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div id="tab2">
                <div class="owl-carousel owl-theme tarif-carousel">
                  <div class="tarif-carousel-item">
                    <div class="tarif-carousel-top">
                      <p>Планета</p>
                      <img src="img/icon/planet.png" alt="Иконка планеты">
                    </div>
                    <div class="tarif-carousel-content">
                      <p class="tarif-content-title">Безлимитный</p>
                      <p class="tarif-content-megabit">10 Мбит/с</p>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки">
                        <p>Мощный Wi-Fi  роутер в рассрочку</p>
                      </div>
                    </div>
                    <div class="tarif-carousel-price">
                      <p><span>900</span>₽/месяц</p>
                      <a onclick="openModal('.callback-modal-1')">Подключить</a>
                    </div>
                  </div>
                  <div class="tarif-carousel-item">
                    <div class="tarif-carousel-heat">
                      Хит
                    </div>
                    <div class="tarif-carousel-top">
                      <p>Звезда</p>
                      <img src="img/icon/star.png" alt="Иконка планеты">
                    </div>
                    <div class="tarif-carousel-content">
                      <p class="tarif-content-title">Безлимитный</p>
                      <p class="tarif-content-megabit">20 Мбит/с</p>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки" />
                        <p>Мощный Wi-Fi  роутер в рассрочку</p>
                      </div>
                    </div>
                    <div class="tarif-carousel-price">
                      <p><span>1200</span>₽/месяц</p>
                      <a onclick="openModal('.callback-modal-2')">Подключить</a>
                    </div>
                  </div>
                  <div class="tarif-carousel-item">
                    <div class="tarif-carousel-top">
                      <p>Галактика</p>
                      <img src="img/icon/galactic.png" alt="Иконка планеты">
                    </div>
                    <div class="tarif-carousel-content">
                      <p class="tarif-content-title">Безлимитный</p>
                      <p class="tarif-content-megabit">30 Мбит/с</p>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки" />
                        <p>Мощный Wi-Fi  роутер в рассрочку</p>
                      </div>
                    </div>
                    <div class="tarif-carousel-price">
                      <p><span>1600</span>₽/месяц</p>
                      <a onclick="openModal('.callback-modal-3')">Подключить</a>
                    </div>
                  </div>
                  <div class="tarif-carousel-item">
                    <div class="tarif-carousel-top">
                      <p>Вселенная</p>
                      <img src="img/icon/vselennaya1.png" alt="Иконка планеты">
                    </div>
                    <div class="tarif-carousel-content">
                      <p class="tarif-content-title">Безлимитный</p>
                      <p class="tarif-content-megabit">40 Мбит/с</p>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки" />
                        <p>Мощный Wi-Fi  роутер в рассрочку</p>
                      </div>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки" />
                        <p>10 дней в подарок при подключении</p>
                      </div>
                    </div>
                    <div class="tarif-carousel-price">
                      <p><span>2000</span>₽/месяц</p>
                      <a onclick="openModal('.callback-modal-4')">Подключить</a>
                    </div>
                  </div>
                  <div class="tarif-carousel-item">
                    <div class="tarif-carousel-top">
                      <p>Вселенная +</p>
                      <img src="img/icon/vselennaya2.png" alt="Иконка планеты">
                    </div>
                    <div class="tarif-carousel-content">
                      <p class="tarif-content-title">Безлимитный</p>
                      <p class="tarif-content-megabit">50 Мбит/с</p>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки" />
                        <p>Мощный Wi-Fi роутер в рассрочку</p>
                      </div>
                      <div class="tarif-content-box">
                        <img src="img/icon/box.png" alt="Иконка коробки" />
                        <p>10 дней в подарок при подключении</p>
                      </div>
                    </div>
                    <div class="tarif-carousel-price">
                      <p><span>2400</span>₽/месяц</p>
                      <a onclick="openModal('.callback-modal-5')">Подключить</a>
                    </div>
                  </div>
                </div>
              </div> -->
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
                            <p>Ознакомьтесь с нашими тарифами и выберите подходящий. Если Вам нужна помощь, наши
                                операторы Вам помогут</p>
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
    <!--Слайдер с преимуществами более 10 00 абонентов выбрали нас-->
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
                    <p class="advantages-carousel-text">Наш интернет работает быстро и без перебоев на территории
                        Магаданской области</p>
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
                    <p class="advantages-carousel-text">У нас мощные двухдиапазонные Wi-Fi роутеры с покрытием до 150
                        кв.м.</p>
                </div>
                <div class="advantages-carousel-item">
                    <div class="advantages-carousel-img">
                        <img src="img/icon/procent.png" alt="Иконка" style="height: 61px;">
                    </div>
                    <p class="advantages-carousel-title">Скидки и акции</p>
                    <p class="advantages-carousel-text">Регулряно запускаем акции для новых и постоянных клиентов. С
                        нами выгодно!</p>
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
    <div class="main__form_back">
        <div class="main__title-white" data-aos="fade-up">
            <h3>
                Оставьте заявку и получите 10 дней в подарок на все услуги
            </h3>
        </div>
        <div class="container" data-aos="zoom-up">
            <div class="main__form_title">
                Наш менеджер перезвонит Вам с номера 8(4132)300-100.
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
            <p>Для удобства клиентов группы компаний работают два пункта обслуживания абонентов в различных районах
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-1" data-modal-close=""
    data-form-title="Трафик интернет - Планета 1300">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-2" data-modal-close=""
    data-form-title="Трафик интернет - звезда 1400">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-3" data-modal-close=""
    data-form-title="Трафик интернет - галактика 1700">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-4" data-modal-close=""
    data-form-title="Трафик интернет - вселенная 2000">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-5" data-modal-close=""
    data-form-title="Трафик интернет - вселенная 2500">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-6" data-modal-close=""
    data-form-title="Трафик интернет + тв - планета 900">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-7" data-modal-close=""
    data-form-title="Трафик интернет + тв - звезда 1200">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-8" data-modal-close=""
    data-form-title="Трафик интернет + тв - галактика 1600">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-9" data-modal-close=""
    data-form-title="Трафик интернет + тв - вселенная 2000">
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
<!--Модальное окно со связью-->
<div class="form__block modal__block modal__block--small callback-modal-10" data-modal-close=""
    data-form-title="Трафик интернет + тв - вселенная 2500">
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