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
 ����� - $send_tovar
 ���������� - $send_kolvo
 ������� - $send_secondname
 ��� - $send_firstname
 �������� - $send_middlename
 ������ - $send_address1
 �������������� ����� - $send_address2
 ����� - $send_city
 ����/������� - $send_state
 �������� ������ - $send_zipcode
 ������� - $send_phone
 ����������� �������� ���� - $send_mail " ;

mail("$e_mail", "$send_mail_subject", "$send_mail_text");

echo '<input type=text name=bp value="��� ����� ��������� ��������">';
?>