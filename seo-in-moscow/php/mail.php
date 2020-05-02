<?php
if (isset($_POST['jsonData'])) {
$json_decode_data = json_decode( $_POST['jsonData'], true );

 if (isset($json_decode_data['phone'])) {$phone = $json_decode_data['phone'];}
 if (isset($json_decode_data['name'])) {$name = $json_decode_data['name'];}
 if (isset($json_decode_data['email'])) {$email = $json_decode_data['email'];}
 if (isset($json_decode_data['tovar'])) {$tovar = $json_decode_data['tovar'];}

 //if (isset($_POST['email'])) {
 /* Здесь проверяется существование переменных */
 // if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 //if (isset($_POST['name'])) {$name = $_POST['name'];}
 // if (isset($_POST['email'])) {$email = $_POST['email'];}
 // if (isset($_POST['tovar'])) {$tovar = $_POST['tovar'];}
$jsonData = $_POST['jsonData']; 
 $address = "info@sportgoroda.ru";
 
/* текст сообщения */
 $mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name\nE-mail: $email\nТовар: $tovar";
 
/* Отправка */
$sub='Заказ';
$email='Магазин Спортивные Города <sportgoroda.ru>'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
};
//};
?>