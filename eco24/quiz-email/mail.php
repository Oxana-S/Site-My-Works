<?php
# Обработчик для Quiz-Email

$post = (!empty($_POST)) ? true : false;


if($post) {
	// $email = htmlspecialchars(trim($_POST['email']));
	$name = htmlspecialchars(trim($_POST['name']));
	// $sub = htmlspecialchars(trim($_POST["sub"]));
	$tel = htmlspecialchars(trim($_POST["tel"]));
  
	// question передает значения чекбоксов, их может быть много и значит это может быть массив
	// и здесь я проверяю это, и плюс перевожу полученные значения из массива question в строку
	// для вывода в виде строк в письме.
	$question = $_POST['question'];
	if (is_array($question)) {
		$question = implode( ",<br>&#10004; ", $question );
	}

	$category = htmlspecialchars(trim($_POST["category_b"]));
	$water = htmlspecialchars(trim($_POST["water_source"]));
	$production = htmlspecialchars(trim($_POST["production"]));
	$fall = htmlspecialchars(trim($_POST["fall_bead"]));
	$pasport = htmlspecialchars(trim($_POST["pasport"]));

	$bussines = htmlspecialchars(trim($_POST["bussines"]));
	$sanitar = htmlspecialchars(trim($_POST["sanitar"]));
	

	// $count_people = $_POST['count_people'];	
	// foreach ($count_people as $key=>$value);


	$error = '';

	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите тему обращения. ';}
	if(!$question) {$error .= 'Укажите что-нибудь. ';}
	if(!$category) {$error .= 'Укажите что-нибудь. ';}
	if(!$water) {$error .= 'Укажите что-нибудь. ';}
	if(!$production) {$error .= 'Укажите что-нибудь. ';}
	if(!$fall) {$error .= 'Укажите что-нибудь. ';}
	if(!$pasport) {$error .= 'Укажите что-нибудь. ';}

	if(!$bussines) {$error .= 'Укажите что-нибудь. ';}
	if(!$sanitar) {$error .= 'Укажите что-нибудь. ';}


	if(!$error) {
		$email = "info@goodecology.ru";
		$address = "channel.my.honey@gmail.com, oksana.shleyfman@yandex.ru, goodecology@yandex.ru, 88002506774@mail.ru";
		// $address = "channel.my.honey@gmail.com";
		$subject = "=?utf-8?B?".base64_encode("Поступила новая заявка с квиза \"Хорошая - Экология\"!")."?=";
		$headers = "From: $email\r\n\Reply-to: $email\r\nContent-type: text/html; charset=utf8\r\n";

		$mes = "
		<div style='color: #fff; background: #b0b0b0; padding: 10px; max-width: 600px; width: 100%; border: 1px solid #b0b0b0;'>
				<p>Телефон: $tel</p>
				<p>Имя: $name</p>
		</div>	
		<br>
		<br>
		<div style='background: #eeeeee; padding: 10px; max-width: 600px; width: 100%; border: 1px solid #0e0e0e;'> 
				<div style='font-size:larger; font-weight: bolder;'>
					<p>1.По какому вопросу требуется консультация:<br>&#10004;
					<span style='font-weight: normal;'> $question </span></p>
				</div>
				<div style='font-size:larger; font-weight: bolder;'>
					<p>2.Категория объекта негативного воздействия на окружающую среду?<br>&#10004;
					<span style='font-weight: normal;'> $category </span></p>
				</div>
				<div style='font-size:larger; font-weight: bolder;'>
					<p>3.Проведена ли инвентаризация стационарных источников и выбросов вредных веществ в атмосферный воздух?<br>&#10004;<span style='font-weight: normal;'>$water</span></p>
				</div>
				<div style='font-size:larger; font-weight: bolder;'>
					<p>4.Проведена ли инвентаризация отходов производства и потребления и мест их накопления?<br>&#10004;<span style='font-weight: normal;'>$production</span></p>
				</div>
				<div style='font-size:larger; font-weight: bolder;'>
					<p>5.Осуществляется ли сброс загрязняющих веществ в водные объекты?<br>&#10004;<span style='font-weight: normal;'>$fall</span></p>
				</div>
				<div style='font-size:larger; font-weight: bolder;'>
					<p>6.Наличие паспортов отходов I-IV классов опасности?<br>&#10004;<span style='font-weight: normal;'>$pasport</span></p>
				</div>

				<div style='font-size:larger; font-weight: bolder;'>
					<p>7.Наличие Программы Производственного экологического контроля (ПЭК)?<br>&#10004;<span style='font-weight: normal;'>$bussines</span></p>
				</div>
				<div style='font-size:larger; font-weight: bolder;'>
					<p>8.Наличие установленной Санитарно-защитной зоны (СЗЗ)?<br>&#10004;<span style='font-weight: normal;'>$sanitar</span></p>
				</div>
		</div> 
					";

		$send = mail ($address, $subject, $mes, $headers );
	
		if($send) {
			// sleep(1);
			echo('OK');
		}
		else {
			echo('Что то Не Так');
		}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}

?>
