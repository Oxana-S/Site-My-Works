<?php

$forms = array(
    'change-screen1' => 'Оставь заявку и получи на счет 799 рублей',
    'change-screen2' => 'Будь в курсе 24/7',
    'change-screen3' => 'Заказать обратный звонок',
    'online-call' => 'Онлайн звонок',
    'get-com' => 'Коммерческое предложение',
    'show-room' => 'Шоу рум',
    'consultant-business' => 'Консультация (для владельцев зданий, для бизнеса)',
    'consultant-people' => 'Консультация (для организации мероприятий, государственные организации, спортивных сооружений)',
    'calculation' => 'Индивидульное решение',
    'question' => 'Вопрос',
    'video' => 'Видео-презентацию в подарок'
);
$reqArray = array(
    'name' => 'Имя: ',
    'phone' => 'Номер телефона: ',
    'addres' => 'Адрес: ',
    'email' => 'E-mail: ',
    'height' => 'Высота: ',
    'width' => 'Ширина: ',
    'text' => 'Сообщение:
');

$reqStatus = true;
$message = '<table style="border: 1px solid grey; border-collapse: collapse;"><tbody>';

$form = str_replace(array('modal ', ' active'), '', $_POST['form']);

if (isset($_POST['form'])) {
    $message .= '<tr border: 1px solid grey;><td style="border: 1px solid grey;padding: 10px;"><strong>Форма</strong></td><td style="border: 1px solid grey;padding: 10px;">' . $_POST['form'] . '</td></tr>';
}

foreach ($reqArray as $key => $value){
    if (isset($_POST[$key])){
        if (strlen($_POST[$key]) > 1){
            $message .= '<tr border: 1px solid grey;><td style="border: 1px solid grey;padding: 10px;"><strong>' . $value . '</strong></td><td style="border: 1px solid grey;padding: 10px;">' . $_POST[$key] . '</td></tr>';
        } else {
            $reqStatus = false;
        }
    }
}

if (isset($_POST['text'])){
    $message .= '<tr border: 1px solid grey;><td style="border: 1px solid grey;padding: 10px;"><strong>Сообщение</strong></td><td style="border: 1px solid grey;padding: 10px;">' . $_POST['text'] . '</td></tr>';
};
$message .= '</tbody></table>';


if ($reqStatus){
    $headers = "From: vlad-issdergunov@yandex.kz \r\n" .
        "Reply-To: channel.my.honey@gmail.com \r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    if (mail('der9unov.vlad@yandex.kz', 'Заявка с сайта', $message, $headers)){
        echo $reqStatus;
    } else {
        echo false;
    }
} else {
    echo $reqStatus;
}
