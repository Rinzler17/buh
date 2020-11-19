<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php if(!$_POST) exit;
//$email		= $_POST['phone'];
$name 		= $_POST['name'];
$phone 		= $_POST['phone'];
//$comment 	= $_POST['comment'];
$tosteelie="
	<html>
	<head>
	</head>
	<body>
	<p>Сайт Ambity.ru</p>
	<p>Заказ звонка от ".$name."!</p>
	<p>Номер телефона: ".$phone."</p>
	</body>
	</html>";
$to  = 'antonturilov@gmail.com';
// тема письма
$subject = 'Сайт akbuzatcafe.ru. Заказ звонка от '.$name.'';
// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
// Дополнительные заголовки
$headers .= 'To: <'.$to.'>' . "\r\n";

// Отправляем

if(@mail($to, $subject, $tosteelie, $headers)) {
    echo "<h3 class='success'>Сообщение отправлено</h3>";
    echo "<p class='success'>Спасибо за заказ звонка! <strong>$name</strong>, ваше сообщение отправлено, в скором времени Вам позвонит наш менеджер.</p>";
}else{
    echo "<h2 class='failure'>Извините, попробуйте чуть-чуть позже.</h2>";
}?>
