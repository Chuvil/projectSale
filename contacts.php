<?php
require_once ("header.php");
$page="contacts";
$smarty_contacts=new Smarty();
if(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['subject'])&&!empty($_POST['message'])){
    $query="INSERT INTO messages(name, subject, email, message, time) VALUES ('".$_POST['name']."', '".$_POST['subject']."', '".$_POST['email']."', '".$_POST['message']."', now())";
    mysqli_query($dbc, $query) or die("Ошибка сообщения");
    $form="Ваше сообщение успешно отправлено";
    $smarty_contacts->assign("form", $form);
}
$content=$smarty_contacts->fetch("contacts.tpl");
require_once ("main.php");