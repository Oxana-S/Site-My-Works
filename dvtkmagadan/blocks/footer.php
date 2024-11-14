<!-- footer.php -->
<footer>
	<!--Мобильный Контент, Меню в подвале-->
	<div class="mobile-menu-footer">
		<input type="checkbox" class="openSidebarMenu-footer" id="openSidebarMenu-footer">
		<label for="openSidebarMenu-footer" class="sidebarIconToggle-footer">
			<div class="mobile__menu_button-footer"><img src="img/icon/burger.png" alt="" /></div>
		</label>
		<div class="back-menu"></div>
		<div id="sidebarMenu-footer">
			<input type="checkbox" class="openSidebarMenu-footer" id="openSidebarMenu-footer">
			<label for="openSidebarMenu-footer" class="sidebarIconToggle-footer">
				<div class="openSidebarMenu-footer" id="openSidebarMenu-footer">
					<div class="close__button-footer">
						<i class="icon-close"></i>
					</div>
				</div>
			</label>
			<div class="mobile__menu" id="menu-mobile">
				<div class="mobile__menu_content-footer">
					<div class="footer__list_item">
						<h3>Услуги:</h3>
						<ul>
							<li><a class="footer__active" href="index.php">Интернет</a></li>
							<li><a href="tv.php">Телевидение</a></li>
							<li><a href="index-internet-tv.php">Интернет + ТВ</a></li>
							<li><a href="video.php">Видеонаблюдение</a></li>
						</ul>
					</div>
					<div class="footer__list_item">
						<h3>Адреса офисов оплаты:</h3>
						<p>ул. Берзина д.17 </p>
						<p>ул. Пролетарская 66 ТЦ «ИДЕЯ» <br />(1 этаж)</p>
					</div>
					<div class="footer__list_item">
						<h3>Контакты:</h3>
						<a href="mailto:info@telemagadan.ru">info@telemagadan.ru</a>
						<p>ул. Берзина д.17 </p>
						<p>Юридический адрес: ул. Транспортная д.19</p>
						<ul>
							<li><a href="certificate.php">Лицензии</a></li>
							<li><a href="news.php">Новости</a></li>
						</ul>
					</div>
					<div class="footer__list_item">
						<h3>Справочник абонента</h3>
						<a href="http://wiki.telemagadan.ru/">Перейти</a><br />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Десктоп Контент, Меню в подвале-->
	<div class="container">
		<div class="footer__list" data-aos="fade-up">
			<div class="footer__list_item moblie-logo">
				<a href="index.php"><img src="img/logo-footer.png" alt="Логотип" /></a>
			</div>
			<div class="footer__list_item">
				<h3>Подключение</h3>
				<a href="tel:+74132300100">+7 (4132) 300-100</a>
				<p>11:00-19:00 пн-пт</p>
				<p>11:00-16:00 сб</p>
			</div>
			<div class="footer__list_item">
				<h3>Служба поддержки</h3>
				<a href="tel:+74132300100">+7 (4132) 300-100</a>
				<!--666-355-->
				<p>11:00-19:00 пн-пт</p>
				<p>11:00-16:00 сб</p>
			</div>
			<div class="footer__list_item">
				<h3>Аварийная служба</h3>
				<a href="tel:+74132666355">+7(4132)666 355</a><br>
				<a href="tel:+79025086355">+7(902) 508-63-55</a><br>
				<p>(Звонки, WhatsApp)</p>
				<p>09:00-22:00 пн-вс</p>
			</div>
			<div class="footer__list_item footer-mobile-none">
				<ul class="footer__social">
					<li><a href="https://api.whatsapp.com/send/?phone=79025086355&text&app_absent=0"
							target="_blank"><img src="img/icon/whatssapp.png" alt="Иконка" style="height: 32px;"></a>
					</li>
					<li><a href="https://www.instagram.com/mirantenn49/" target="_blank"><img
								src="img/icon/instagram.png" alt="Иконка" /></a></li>
					<li><a href="#"><img src="img/icon/vk.png" alt="Иконка" /></a></li>
					<li><a href="#"><img src="img/icon/telegram.png" alt="Иконка" /></a></li>
					<li><a href="tel:+74132300100"><img src="img/icon/phone.png" alt="Иконка" /></a></li>
				</ul>
			</div>
		</div>
		<div class="footer__list_bottom" data-aos="fade-up">
			<div class="footer__list_item">
				<h3>Услуги:</h3>
				<ul>
					<li><a <?php if ($pageName == 'index') {
								echo 'class="footer__active"';
							} ?> href="index.php">Интернет</a></li>
					<li><a <?php if ($pageName == 'tv') {
								echo 'class="footer__active"';
							} ?>href="tv.php">Телевидение</a></li>
					<li><a <?php if ($pageName == 'index-internet') {
								echo 'class="footer__active"';
							} ?>href="index-internet-tv.php">Интернет + ТВ</a></li>
					<li><a <?php if ($pageName == 'video') {
								echo 'class="footer__active"';
							} ?>href="video.php">Видеонаблюдение</a></li>
				</ul>
			</div>
			<div class="footer__list_item">
				<h3>Адреса офисов оплаты:</h3>
				<p>ул. Берзина д.17 </p>
				<p>ул. Пролетарская 66 ТЦ «ИДЕЯ» <br />(1 этаж)</p>
			</div>
			<div class="footer__list_item">
				<h3>Контакты:</h3>
				<a href="mailto:info@telemagadan.ru">info@telemagadan.ru</a>
				<!-- <p>ул. Берзина д.17 </p> -->
				<p>Юридический адрес: ул. Транспортная д.19</p>
				<ul>
					<!-- <li><a href="certificate.php">Лицензии</a></li> -->
					<!-- <li><a href="news.php">Новости</a></li> -->
				</ul>
			</div>
			<div class="footer__list_item">
				<!-- 
              <h3>Справочник абонента</h3>
                    <a href="http://wiki.telemagadan.ru/">Перейти</a><br />
              -->
				<!-- <h3>Регламент</h3> -->
				<!-- <a href="img/reglament.pdf" target="_blank">Посмотреть</a><br /> -->
				<a href="img/reglament.pdf" target="_blank" style="
                background: none;
                text-align: center;
                border: 1px solid #fff;
                padding: 5px 8px;
                color: #fff;
                outline: none;
                ">Регламент</a><br />
			</div>
		</div>
		<div class="footer__list_bottom margin-bottom" data-aos="fade-up">
			<div class="footer__list_item">
				<ul class="footer__social">
					<li><a href="https://api.whatsapp.com/send/?phone=79025086355&text&app_absent=0"
							target="_blank"><img src="img/icon/whatssapp.png" alt="Иконка" style="height: 32px;"></a>
					</li>
					<li><a href="https://www.instagram.com/mirantenn49/" target="_blank"><img
								src="img/icon/instagram.png" alt="Иконка" /></a></li>
					<li><a href="#"><img src="img/icon/vk.png" alt="Иконка" /></a></li>
					<li><a href="#"><img src="img/icon/telegram.png" alt="Иконка" /></a></li>
					<li><a href="tel:+74132300100"><img src="img/icon/phone.png" alt="Иконка" /></a></li>
				</ul>
			</div>

		</div>
		<div class="footer__uvd <?php if ($pageName == 'uvd') {
									echo 'uvd__display--none';
								}	?>">
			<a href="uvd.php" style="color: red;">УМВД России по Магаданской области предупреждает.</a>
		</div>
		<div class="footer__text">
			<p>Подробности у менеджеров абонентского отдела.</p>
			<p>Экспресс подключение платное, подробности у менеджеров абонентского отдела.</p>
			<p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и монтажу
				спутниковых систем связи.</p>
			<p>© 2011—<?php echo date('Y'); ?>, Группа компаний «Мир антенн».</p>
		</div>
	</div>
</footer>
<!--Прелоадер-->
<div class="preloader"></div>

<!--Блок для работы модальных окон-->
<div class="modal__block site-modal" data-modal-close="">
	<div class="modal__content">
		<div class="modal__close" data-modal-close=""></div>
		<iframe width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
	</div>
</div>

<!--Подключение js-->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.idTabs.min.js"></script>
<script src="owl/owl.carousel.min.js"></script>
<script src="js/home.js"></script>
<!-- Видео, кнопка play и воспроизведение видео по ней -->
<script>
$(function() {
	var $videoContainer = $('#video'),
		$videoControls = $('.video-control'),
		$video = $('#myVideo')[0];

	$videoControls.click(function() {
		if ($video.paused) {
			$video.play();
			$videoContainer.addClass('video-is-playing');
		} else {
			$video.pause();
			$videoContainer.removeClass('video-is-playing');
			//	возвращаем постер
			$video.load();
		}
	});
});

$(function() {
	var $videoContainer = $('#video-2'),
		$videoControls = $('.video-control-2'),
		$video = $('#myVideo-2')[0];

	$videoControls.click(function() {
		if ($video.paused) {
			$video.play();
			$videoContainer.addClass('video-is-playing-2');
		} else {
			$video.pause();
			$videoContainer.removeClass('video-is-playing-2');
			//	возвращаем постер
			$video.load();
		}
	});
});
</script>
<script>
AOS.init();
</script>

<!-- Скрипт добавления по клику якоря (#yakor1 илил #yakor2) к href ссылке на другую страницу-->
<!-- Вынужден был пойти этим путем, поскольку стандартный подход через
 html якоря не сработал из-за конфликта с скриптом "/js/home.js" -->
<script>
// Функция добавления якоря к ссылке
function addURL(element, anchor) {
	$(element).attr('href', function() {
		return this.href + anchor;
	});
}
</script>

<!-- Плавный скролл к якорю на другой странице -->
<script>
var myHash = location.hash; //получаем значение хеша
location.hash = ''; //очищаем хеш
if (myHash[1] != undefined) { //проверяем, есть ли в хеше какое-то значение
	$('html, body').animate({
		scrollTop: $(myHash).offset().top
	}, 500); //скроллим за полсекунды
};
</script>

<!-- js из файла старого certificate.php.
     Нужны для корректной работы popup's сертификатов в файле about.php -->
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

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
</html> -->