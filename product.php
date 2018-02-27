<?php
require_once ("header.php");
$page="product";
if(!empty($_GET['id'])) {
    $smarty_product = new Smarty();
    $queryItems = "SELECT idProd, idCat, model, price, photo, info, count FROM items WHERE id='".$_GET['id']."'";
    $resultItems=mysqli_query($dbc, $queryItems) or die("Ошибка запроса 1");
    $nextItems=mysqli_fetch_array($resultItems);
    $queryProd="SELECT name FROM producer WHERE id='".$nextItems['idProd']."'";
    $resultProd=mysqli_query($dbc, $queryProd) or die("Ошибка запроса 2");
    $nextProd=mysqli_fetch_array($resultProd);
    $queryCat="SELECT name FROM category WHERE id='".$nextItems['idCat']."'";
    $resultCat=mysqli_query($dbc, $queryCat) or die("Ошибка запроса 3");
    $nextCat=mysqli_fetch_array($resultCat);
    $smarty_product->assign("id", $_GET['id']);
    $smarty_product->assign("idProd", $nextItems['idProd']);
    $smarty_product->assign("idCat", $nextItems['idCat']);
    $smarty_product->assign("model", $nextItems['model']);
    $smarty_product->assign("price", $nextItems['price']);
    $smarty_product->assign("count", $nextItems['count']);
    if(empty($nextItems['photo'])){
        $photo='nopic.jpg';
    }else{
        $photo=$nextItems['photo'];
    }
    $smarty_product->assign("photo", $photo);
    $smarty_product->assign("info", $nextItems['info']);
    $smarty_product->assign("nameProd", $nextProd['name']);
    $smarty_product->assign("nameCat", $nextCat['name']);
    $content = $smarty_product->fetch("product.tpl");
}else{
    $content="Ошибка идентефикатора";
}
require_once ("main.php");