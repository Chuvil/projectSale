<?php
require_once ("../header.php");
$smarty_acc=new Smarty();
if(!isset($_POST['send'])) {
    $query = "SELECT fio, login, email, address, info, phone, photo FROM clients WHERE id='" . $_SESSION['id'] . "'";
    $result = mysqli_query($dbc, $query) or die("Ошибка запроса");
    $account = array();
    while ($next = mysqli_fetch_array($result)) {
        if (empty($next['photo'])) {
            $photo = 'nopic.jpg';
        } else {
            $photo = $next['photo'];
        }
        $account[] = array("fio" => $next['fio'], "login" => $next['login'], "email" => $next['email'], "address" => $next['address'], "info" => $next['info'], "phone" => $next['phone'], "photo" => $photo);
    }
    $smarty_acc->assign("account", $account);
    $content = $smarty_acc->fetch("../changeAcc.tpl");
}elseif (isset($_POST['send'])&&!empty($_POST['fio'])&&!empty($_POST['login'])){

}