<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
  $name = $_POST['name'];
  $mytel = $_POST['mytel'];
  $message = $_POST['message'];
  $error = 'Ошибка';
  if(!$name) {$error .= 'Укажите свое имя. ';}
  if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
  if(!$error) {
    $address = "info@woodelement.ru";
    $mes = "Имя: ".$name."\n\nТелефон: ".$mytel."\n\nСообщение: ".$message."\n\n";
    $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    if($send) {echo 'OK';}
  }
  else {echo '<div class="error-form-echo">'.$error.'</div>';}
}
?>