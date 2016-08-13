<?
// ----------------------------конфигурация-------------------------- //

$adminemail="vitalikmelnik20000@gmail.com";  // e-mail админа


$date=date("d.m.y"); // число.месяц.год

$time=date("H:i"); // часы:минуты:секунды

$backurl="http://site.ru/index.html";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //



// Принимаем данные с формы

$contactName=$_POST['name'];

$contactEmail=$_POST['email'];

$contactSubject=$_POST['Subject'];

$contactMessage=$_POST['message'];



// Проверяем валидность e-mail

if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is",
strtolower($email)))

 {

  echo
"<center>Вернитесь <a
href='javascript:history.back(1)'><B>назад</B></a>. Вы
указали неверные данные!";

  }

 else

 {


$msg="


<p>Имя: $name</p>


<p>E-mail: $email</p>


<p>Сообщение: $msg</p>


";



 // Отправляем письмо админу

mail("$adminemail", "$contactName $contactEmail $contactSubject
", "$contactMessage");









 }

?>