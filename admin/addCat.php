<?php
require_once ("header.php");
if(!isset($_POST['send'])){
    $smarty_add=new Smarty();
    $content=$smarty_add->fetch("addCat.tpl");
}elseif (isset($_POST['send'])&&!empty($_POST['name'])){
    $query="INSERT INTO category(name) VALUES ('".$_POST['name']."')";
    mysqli_query($dbc, $query) or die("Ошибка запроса");
    $content= "Категория товаров добавлена. <a href='addCat.php'>Добавить ещё</a> ";
}else{
    $content="Недостаточно данных для добавления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);