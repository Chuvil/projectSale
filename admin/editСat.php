<?php
require_once ("header.php");
if(isset($_GET['id'])){
    $query="SELECT name FROM category WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса извлечения данных");
    $next=mysqli_fetch_array($result);
    $smarty_edit=new Smarty();
    $smarty_edit->assign("name", $next['name']);
    $smarty_edit->assign("id", $_GET['id']);
    $content=$smarty_edit->fetch("editСat.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['id'])){
    $query="UPDATE category SET name='".$_POST['name']."' WHERE id='".$_POST['id']."'";
    mysqli_query($dbc, $query) or die("Ошибка запроса");
    $content="Данные обновлены";
}else{
    $content="Недостаточно данных для обновления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");