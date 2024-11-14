<?php
# cost-email/mail.php
# Обработчик для формы в Cost-Email (Запрос-Цены)
# Форма в Блоке "Стоимость"

$post = (!empty($_POST)) ? true : false;

if($post) {
	$name = htmlspecialchars(trim($_POST["your-name"]));
	$mail = htmlspecialchars(trim($_POST["your-email"]));
	$tel = htmlspecialchars(trim($_POST["your-phone"]));

	$error = "";

	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$mail) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите что-нибудь. ';}



	if(!$error) {
		$email = "info@goodecology.ru";
		$address = "channel.my.honey@gmail.com, oksana.shleyfman@yandex.ru, goodecology@yandex.ru,88002506774@mail.ru";
		$subject = "=?utf-8?B?".base64_encode("Хорошая Экология \"Запрос Цены на Услуги\" или \" Остались Вопросы\" ")."?=";
		$headers = "From: $email\r\n\Reply-to: $mail\r\nContent-type: text/html; charset=utf8\r\n";

		$mes = " 
    <p>Имя: $name</p>
    <p>E-mail: $male</p>
    <p>Телефон: $tel</p>

    	";

		$send = mail ($address, $subject, $mes, $headers );
	
		if($send) {
			sleep(1);
			echo('OK');
		}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}

