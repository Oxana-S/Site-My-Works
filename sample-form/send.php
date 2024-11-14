<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = htmlspecialchars(trim($_POST['name']));
	$name = htmlspecialchars(trim($_POST['address']));
	$sub = htmlspecialchars(trim($_POST["phone"]));
	$message = htmlspecialchars(trim($_POST['message']));
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите адрес подключения. ';}
	if(!$sub) {$error .= 'Укажите телефон. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
	if(!$error) {
		$address = "channel.my.honey@gmail.com";
		$mes = "Почта: ".$email."\n\nИмя: ".$name."\n\nТема: " .$sub."\n\nСообщение: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>