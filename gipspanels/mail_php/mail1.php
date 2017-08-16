<?php


$form_subject = trim($_POST["form_subject"]);
$project_name = trim($_POST["project_name"]);
$admin_email  = trim($_POST["admin_email"]);
$name_product  = trim($_POST["name_product"]);
$price = trim($_POST["price"]);
$indicator_quantity = trim($_POST["indicator_quantity"]);
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = trim($_POST["message"]);

$msg = "
  <p>Тема письма: $form_subject </p>
  <p>Адрес отправителя: $project_name </p>
  <p>Название продукта: $form_height </p>
  <p>Стоимость: $price </p>
  <p>Количество: $indicator_quantity </p>
  <p>Имя заказчика: $name </p>
  <p>Телефон заказчика: $phone </p>
  <p>Сообщение: $message </p>
";


mail($admin_email, $form_subject, $msg );
exit;


?>
