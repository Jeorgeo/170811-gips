<?
// ----------------------------конфигурация-------------------------- //

header("Content-Type: text/html; charset=utf-8");

$adminemail="svetolimp1@mail.ru";  // e-mail админа

$date=date("d.m.y"); // число.месяц.год

$time=date("H:i"); // часы:минуты:секунды

$backurl="https://svetolimp.ru/";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //


// Принимаем данные с формы

$name=$_POST['name'];

$phone=$_POST['phone'];


$msg="

Имя: $name

Телефон : $phone

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
function reload() {location = \"$backurl\"}; setTimeout('reload()', 1500);
//--></script>

<p>Ваше сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";

exit;

?>
