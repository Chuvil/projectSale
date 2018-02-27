<?php
require_once ("header.php");
if(isset($_GET['id'])&&isset($_GET['name'])){
    $smarty_del=new Smarty();
    $smarty_del->assign("id", $_GET['id']);
    $smarty_del->assign("name", $_GET['name']);
    $content=$smarty_del->fetch("delCat.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['del'])&&$_POST['del']=="yes"&&!empty($_POST['id'])&&!empty($_POST['name'])){
    $queryDel="DELETE FROM category WHERE id='".$_POST['id']."' AND name='".$_POST['name']."'";
    mysqli_query($dbc, $queryDel) or die("Ошибка запроса удаления");
    $content="Категория удалена";
}else{
    $content="Недостаточно данных для удаления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);