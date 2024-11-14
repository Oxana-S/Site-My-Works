<!-- uvd.php  -->
<?php $pageName = 'uvd';

include("blocks/head.php");
include("blocks/header.php");

?>


</header>
<!-- Верстка Основной части сайта -->
<main>
	<div class="container">
		<!-- Новости -->
		<div class="internal__title" data-aos="fade-right">
			<img src="img/logo-none-text.png" alt="" class=" animate__animated animate__bounceInLeft" />
			<h3 class=" animate__animated animate__bounceInRight">УМВД по Магаданской области предупреждает:</h3>
		</div>
		<div class="news__content">
			<div class="umvd__info">
				<div class="animate__animated animate__fadeInUp">
					<img src="img/uvd/uvd.jpeg" alt="умвд предупреждает" />
				</div>
			</div>
			<div class="news__content_list--umvd">

				<div class="news__content_list-img" data-aos="fade-up">
					<div id="video">
						<div class="video-control" id="video-play"></div>
						<div class="video-control" id="video-over"></div>
						<video id="myVideo" preload="none" poster="img/vp-1.jpg">
							<source id="mp4" src="video/video-1.mp4" type="video/mp4" />
						</video>
					</div>
				</div>
				<div class="news__content_list-img" data-aos="fade-up">
					<div id="video-2">
						<div class="video-control-2" id="video-play-2"></div>
						<div class="video-control-2" id="video-over-2"></div>
						<video id="myVideo-2" preload="none" poster="img/vp-3.jpg">
							<source id="mp4-2" src="video/video-3.mp4" type="video/mp4" />
						</video>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<!--Подвал сайта-->
<?php
include("blocks/footer.php");
?>

</body>

</html>