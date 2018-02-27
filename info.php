<?php
require_once ("header.php");
$page="info";
$smarty_about=new Smarty();
if(isset($_GET['id'])) {
    $query = "SELECT idProd, idCat, model, price, photo, info FROM items WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    $smarty_about->assign("idProd", $next['idProd']);
    $smarty_about->assign("idCat", $next['idCat']);
    $smarty_about->assign("model", $next['model']);
    $smarty_about->assign("price", $next['price']);
    $smarty_about->assign("photo", $next['photo']);
    $smarty_about->assign("info", $next['info']);
    $smarty_about->assign("id", $_GET['id']);
    $queryProd="SELECT name FROM producer WHERE id='".$next['idProd']."'";
    $resultProd=mysqli_query($dbc, $queryProd) or die("Ошибка запроса производителя");
    $nextProd=mysqli_fetch_array($resultProd);
    $smarty_about->assign("nameProd", $nextProd['name']);
    $queryCat="SELECT name FROM category WHERE id='".$next['idCat']."'";
    $resultCat=mysqli_query($dbc, $queryCat) or die("Ошибка запроса категории");
    $nextCat=mysqli_fetch_array($resultCat);
    $smarty_about->assign("nameCat", $nextCat['name']);
    $content=$smarty_about->fetch("info.tpl");
}else{
    $content="Ошибка запроса";
}
require_once ("main.php");