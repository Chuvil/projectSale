<?php
require_once ("header.php");
if(isset($_GET['id'])&&isset($_GET['model'])){
    $smarty_del=new Smarty();
    $smarty_del->assign("id", $_GET['id']);
    $smarty_del->assign("model", $_GET['model']);
    $content=$smarty_del->fetch("delItem.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['del'])&&$_POST['del']=="yes"&&!empty($_POST['id'])&&!empty($_POST['model'])){
    $queryPhoto="SELECT photo FROM items WHERE id='".$_POST['id']."'";
    $resultPhoto=mysqli_query($dbc, $queryPhoto) or die("Ошибка запроса фото");
    $next=mysqli_fetch_array($resultPhoto);
    $photo=$next['photo'];
    if(!empty($photo)&&$photo!='nopic.jpg'){
        @unlink("../image/items/$photo");
    }
    $queryDel="DELETE FROM items WHERE id='".$_POST['id']."' AND model='".$_POST['model']."'";
    mysqli_query($dbc, $queryDel) or die("Ошибка запроса удаления");
    $content="Модель удалена";
}else{
    $content="Недостаточно данных для удаления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);