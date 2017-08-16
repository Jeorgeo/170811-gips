<?
// ----------------------------конфигурация-------------------------- //

header("Content-Type: text/html; charset=utf-8");

$adminemail="jeorgeo@list.ru";  // e-mail админа


$date=date("d.m.y"); // число.месяц.год

$time=date("H:i"); // часы:минуты:секунды

$backurl="https://energoart.ru";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //



// Принимаем данные с формы

$name="info@energoart.ru";

$email="info@energoart.ru";





// Проверяем валидность e-mail




$msg="


<p>Имя:

<p>E-mail:

<p>сообщение:


";



 // Отправляем письмо админу

mail("$adminemail", "$date $time Сообщение от $name", "$msg");



// Сохраняем в базу данных

$f = fopen("message.txt", "a+");

fwrite($f," \n $date $time Сообщение от $name");

fwrite($f,"\n $msg ");

fwrite($f,"\n ---------------");

fclose($f);



// Выводим сообщение пользователю

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 600);
//--></script>

$msg

<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
exit;



?>
