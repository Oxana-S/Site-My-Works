<!-- header.php -->

<body>
    <!--Подключение сетки cмарт грид, для того чтобы отобразить сетку на экране раскомментируйте-->
    <!--<div class="degubGrid">
        <div>
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>-->
    <!-- Элементы Вёрстки Шапки сайта -->
    <header>
        <div class="header__top">
            <!-- Шапка для мобильных устройств -->
            <div class="header__mobile">
                <div class="header__mobile_logo">
                    <a href="index.php"><img src="img/logo-mobile.png" alt="" /></a>
                </div>
                <div class="header__mobile_icon">
                    <a href="tel:+74132300100"><img src="img/icon/phone-call.svg" alt="" /></a>
                </div>
            </div>
            <!-- Мобильное меню -->
            <div class="mobile-menu">
                <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                <label for="openSidebarMenu" class="sidebarIconToggle">
                    <div class="mobile__menu_button"><img src="img/icon/burger.png" alt="" /></div>
                </label>
                <div class="back-menu"></div>
                <div id="sidebarMenu">
                    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                    <label for="openSidebarMenu" class="sidebarIconToggle">
                        <div class="openSidebarMenu" id="openSidebarMenu">
                            <div class="close__button">
                                <i class="icon-close"></i>
                            </div>
                        </div>
                    </label>
                    <div class="mobile__menu" id="menu-mobile">
                        <div class="mobile__menu_content">
                            <div class="menu_content-left">
                                <ul>
                                    <li><a href="index.php">Для меня</a></li>
                                    <li><a href="bussines.php">Для бизнеса</a></li>
                                    <li><a href="about.php">О компании</a></li>
                                    <!---<li><a href="news.php">Новости</a></li>-->
                                    <li><a href="contact.php">Контакты</a></li>
                                </ul>
                            </div>
                            <div class="menu_content-right">
                                <ul>
                                    <li><img src="img/icon/wifi-mobile.png" alt="Иконка Вай Фай"> <a
                                            class="bottom__menu-active" href="index.php"> Интернет</a></li>
                                    <li><img src="img/icon/group1-mobile.png" alt="Иконка Вай Фай и ТВ"> <a
                                            href="index-internet-tv.php"> Интернет + ТВ</a></li>
                                    <li><img src="img/icon/group2-mobile.png" alt="Иконка ТВ"> <a href="tv.php">ТВ</a>
                                    </li>
                                    <li><img src="img/icon/vector-mobile.png" alt="Иконка видеокамеры"> <a
                                            href="video.php">Видеонаблюдение</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mobile__menu_content-link">
                            <a class="mobile__link_blue" href="https://lk.telemagadan.ru/index.xhtml"
                                target="_blank">Личный кабинет</a>
                            <a class="mobile__link_yellow" onclick="openModal('.callback-modal')">Подключиться</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Стики для мобильных устройств-->
            <div class="header-nav">
                <div class="header__mobile">
                    <div class="header__mobile_logo">
                        <a href="index.php"><img src="img/logo-mobile.png" alt="" /></a>
                    </div>
                    <div class="header__mobile_icon">
                        <a href="tel:+74132300100"><img src="img/icon/phone-call.svg" alt="" /></a>
                    </div>
                </div>
            </div>
            <!--Основная Верхняя часть шапки-->
            <div class="container container__top_menu-main">
                <div class="header__top_blocks">
                    <div class="header__top_menu">
                        <ul>
                            <li>
                                <a <?php if ($pageName == 'index' || $pageName == 'index-internet' || $pageName == 'tv' || $pageName == 'video') {
                                        echo 'class="top_menu-active"';
                                    } ?> href="index.php">Для меня
                                </a>
                            </li>
                            <li>
                                <a <?php if ($pageName == 'bussines' || $pageName == 'bussines-video') {
                                        echo 'class="top_menu-active"';
                                    } ?> href="bussines.php">Для бизнеса</a>
                            </li>
                            <li>
                                <a <?php if ($pageName == 'about') {
                                        echo 'class="top_menu-active"';
                                    } ?> href="about.php">О компании
                                </a>
                            </li>
                            <!--<li>
                  <a 
                    <?php if ($pageName == 'news' || $pageName == 'news-2' || $pageName == 'news-3') {
                        echo 'class="top_menu-active"';
                    } ?> 
                    href="news.php">Новости
                  </a>
                </li>-->
                            <li>
                                <a href="http://wiki.telemagadan.ru/" target="_blank">Справочник Абонента</a>
                            </li>
                            <li>
                                <a <?php if ($pageName == 'contact') {
                                        echo 'class="top_menu-active"';
                                    } ?> href="contact.php">Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__top_phones">
                        <div class="top_phones_left">
                            <p>Подключение, Служба поддержки</p>
                            <a href="tel:+74132300100">+7 (4132) 300-100</a>
                            <!-- <p>пн-вс: 11:00 - 22:00</p> -->
                            <p>пн-пт: 11:00 - 19:00</p>
                        </div>
                        <div class="top_phones_right">
                            <p>Аварийная служба</p>
                            <!-- <a href="tel:+74132666355">+7 (4132) 666-355</a> -->
                            <a href="tel:+79025086355">+7(902) 508-63-55</a>
                            <!-- <p>пн-вс: 09:00 - 22:00</p> -->
                            <p>пн-вс: 09:00 - 22:00</p>
                        </div>
                    </div>
                    <div class="header__top_city">
                        <img src="img/icon/cursor-one.png" alt="Изображение курсора">
                        <p>Магадан</p>
                    </div>
                </div>
            </div>
            <!--Стики для Верхней части шапки-->
            <div class="header-main">
                <div class="container">
                    <div class="header__top_blocks">
                        <div class="header__top_menu">
                            <ul>
                                <li>
                                    <a <?php if ($pageName == 'index' || $pageName == 'index-internet' || $pageName == 'tv' || $pageName == 'video') {
                                            echo 'class="top_menu-active"';
                                        } ?> href="index.php">Для меня
                                    </a>
                                </li>
                                <li>
                                    <a <?php if ($pageName == 'bussines' || $pageName == 'bussines-video') {
                                            echo 'class="top_menu-active"';
                                        } ?> href="bussines.php">Для бизнеса
                                    </a>
                                </li>
                                <li>
                                    <a <?php if ($pageName == 'about') {
                                            echo 'class="top_menu-active"';
                                        } ?> href="about.php">О компании
                                    </a>
                                </li>

                                <!--<li>
                                        <a 
                                            <?php if ($pageName == 'news' || $pageName == 'news-2' || $pageName == 'news-3') {
                                                echo 'class="top_menu-active"';
                                            } ?> 
                                            href="news.php">Новости
                                        </a>
                                    </li>-->

                                <li>
                                    <a href="http://wiki.telemagadan.ru/" target="_blank">Справочник Абонента</a>
                                </li>
                                <li>
                                    <a <?php if ($pageName == 'contact') {
                                            echo 'class="top_menu-active"';
                                        } ?> href="contact.php">Контакты
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>