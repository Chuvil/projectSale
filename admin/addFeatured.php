<?php
require_once ("header.php");
$smarty_feat=new Smarty();
if(!isset($_POST['send'])&&!empty($_GET['id'])){
    $query="SELECT model, price, photo FROM items WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    if(empty($next['photo'])){
        $photo='nopic.jpg';
    }else {
        $photo = $next['photo'];
    }
    $smarty_feat->assign("model", $next['model']);
    $smarty_feat->assign("price", $next['price']);
    $smarty_feat->assign("photo", $photo);
    $smarty_feat->assign("id", $_GET['id']);
    $content=$smarty_feat->fetch("addFeatured.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['number'])&&!empty($_POST['idItems'])){
    $query="INSERT INTO featured (number, idItems) VALUES ('".$_POST['number']."', '".$_POST['idItems']."')";
    mysqli_query($dbc, $query) or die("Ошибка запроса добавления");
    $content="Товар добавлен в избранное";
}else{
    $content="Недостаточно данных для добавления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);