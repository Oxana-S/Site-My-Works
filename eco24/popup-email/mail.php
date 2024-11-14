<?php
# popup-email/mail.php
# Обработчик для Popup-Email
# Форма обратной связи

$post = (!empty($_POST)) ? true : false;

if($post) {
	// $email = htmlspecialchars(trim($_POST['email']));
	$name = htmlspecialchars(trim($_POST["your-name"]));
	$mail = htmlspecialchars(trim($_POST["your-email"]));
	$tel = htmlspecialchars(trim($_POST["your-phone"]));

	$error = "";

	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$mail) {$error .= 'Укажите тему обращения. ';}
	if(!$tel) {$error .= 'Укажите что-нибудь. ';}



	if(!$error) {
		$email = "info@goodecology.ru";
		$address = "channel.my.honey@gmail.com, oksana.shleyfman@yandex.ru, goodecology@yandex.ru,88002506774@mail.ru";
		$subject = "=?utf-8?B?".base64_encode("Поступила новая заявка с сайта \"Хорошая - Экология\"!")."?=";
		$headers = "From: $email\r\n\Reply-to: $email\r\nContent-type: text/html; charset=utf8\r\n";

		$mes = " 
    <p>Имя: $name</p>
    <p>Телефон: $tel</p>
    <p>E-mail: $mail</p>

    	";

		$send = mail ($address, $subject, $mes, $headers );
	
		if($send) {
			sleep(1);
			echo('OK');
		}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}

