<?php
$e_mail = "nik872012@yandex.ru";
$send_mail_subject = "syperdietpills";

$send_tovar=$HTTP_POST_VARS['tovar'];
$send_kolvo=$HTTP_POST_VARS['kolvo'];
$send_secondname=$HTTP_POST_VARS['secondname'];
$send_firstname=$HTTP_POST_VARS['firstname'];
$send_middlename=$HTTP_POST_VARS['middlename'];;
$send_address1=$HTTP_POST_VARS['address1'];
$send_address2=$HTTP_POST_VARS['address2'];
$send_city=$HTTP_POST_VARS['city'];
$send_state=$HTTP_POST_VARS['state'];
$send_zipcode=$HTTP_POST_VARS['zipcode'];
$send_phone=$HTTP_POST_VARS['phone'];
$send_mail=$HTTP_POST_VARS['mail'];

$send_mail_text = "
 Товар - $send_tovar
 Количество - $send_kolvo
 Фамилия - $send_secondname
 Имя - $send_firstname
 Отчество - $send_middlename
 Адресс - $send_address1
 Дополнительный адрес - $send_address2
 Город - $send_city
 Край/область - $send_state
 Почтовый индекс - $send_zipcode
 Телефон - $send_phone
 Электронный почтовый ящик - $send_mail " ;

mail("$e_mail", "$send_mail_subject", "$send_mail_text");

echo '<input type=text name=bp value="Ваш заказ отправлен продавцу">';
?>