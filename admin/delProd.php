<?php
require_once ("header.php");
if(isset($_GET['id'])&&isset($_GET['name'])){
    $smarty_del=new Smarty();
    $smarty_del->assign("id", $_GET['id']);
    $smarty_del->assign("name", $_GET['name']);
    $content=$smarty_del->fetch("delProd.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['del'])&&$_POST['del']=="yes"&&!empty($_POST['id'])&&!empty($_POST['name'])){
    $queryLogo="SELECT logo FROM producer WHERE id='".$_POST['id']."'";
    $resultLogo=mysqli_query($dbc, $queryLogo) or die("Ошибка запроса фото");
    $next=mysqli_fetch_array($resultLogo);
    $logo=$next['logo'];
    if(!empty($logo)&&$logo!='nopic.jpg'){
        @unlink("../image/producer/$logo");
    }
    $queryDel="DELETE FROM producer WHERE id='".$_POST['id']."' AND name='".$_POST['name']."'";
    echo $queryDel;
    mysqli_query($dbc, $queryDel) or die("Ошибка запроса удаления");
    $content="Производитель удалён";
}else{
    $content="Недостаточно данных для удаления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);