<?php


$project_name = trim($_POST["project_name"]);
$admin_email  = trim($_POST["admin_email"]);
$user_email  = trim($_POST["email"]);
$form_subject = trim($_POST["position"]);
$form_width = trim($_POST["width"]);
$form_height = trim($_POST["height"]);
$form_area = trim($_POST["area"]);
$form_price = trim($_POST["price"]);

$msg = "
  <p>Тема письма: $form_subject </p>
  <p>Адрес отправителя: $project_name </p>
  <p>Высота стены: $form_height </p>
  <p>Длина стены: $form_width </p>
  <p>Количество: $form_area </p>
  <p>Стоимость рублей: $form_price </p>
  <p>Емайл заказчика: $user_email </p>
";

mail($admin_email, $form_subject, $msg );
exit;

?>
