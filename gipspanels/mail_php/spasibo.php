<?php

$form_subject = "Гибкий камень";
$admin_email  = "kamengibkiy@gmail.com";
$user_email  = trim($_POST["email"]);
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);

$msg = "
  <p>Тема письма: Гибкий камень заявка с сайта</p>
  <p>Имя заказчика: $name </p>
  <p>Телефон заказчика: $phone </p>
  <p>Емайл заказчика: $user_email </p>
";

mail($admin_email, $form_subject, $msg );

require 'amocrm/handler.php';

?>
