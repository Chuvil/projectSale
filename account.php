<?php
require_once ("header.php");
$page="account";
$smarty_acc=new Smarty();
$query="SELECT address, info, phone FROM clients WHERE id='".$_SESSION['id']."'";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$account=array();
while ($next=mysqli_fetch_array($result)){
    $account[]=array("fio"=>$_COOKIE['fio'], "login"=>$_COOKIE['login'], "email"=>$_COOKIE['email'], "address"=>$next['address'], "info"=>$next['info'], "phone"=>$next['phone'], "photo"=>$_COOKIE['photo']);
}
$smarty_acc->assign("account", $account);
$content=$smarty_acc->fetch("account.tpl");
require_once ("main.php");