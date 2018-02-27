<?php
require_once ("header.php");
$smarty_ii=new Smarty();
$queryCategory="SELECT id, name FROM category";
$resultCategory=mysqli_query($dbc, $queryCategory) or die("Ошибка запроса категории");
$category=array();
while ($nextCategory=mysqli_fetch_array($resultCategory)){
    $category[]=array("id"=>$nextCategory['id'], "name"=>$nextCategory['name']);
}
$smarty_ii->assign("category", $category);
$queryProducer="SELECT id, name, logo FROM producer";
$resultProducer=mysqli_query($dbc, $queryProducer) or die("Ошибка запроса производителя");
$producer=array();
while ($nextProducer=mysqli_fetch_array($resultProducer)){
    if(empty($nextProducer['logo'])){
        $logo='nopic.jpg';
    }else{
        $logo=$nextProducer['logo'];
    }
    $producer[]=array("id"=>$nextProducer['id'], "name"=>$nextProducer['name'], "logo"=>$logo);
}
$smarty_ii->assign("producer", $producer);
$queryItems="SELECT id, idProd, idCat, model, price, count, photo FROM items";
if(isset($_GET['idProd'])){
    $queryItems.=" WHERE idProd='".$_GET['idProd']."'";
}
if(isset($_GET['idCat'])&&!isset($_GET['idProd'])){
    $queryItems.=" WHERE idCat='".$_GET['idCat']."'";
}
if(isset($_GET['idCat'])&&isset($_GET['idProd'])){
    $queryItems.=" AND idCat='".$_GET['idCat']."'";
}
$resultItems=mysqli_query($dbc, $queryItems) or die("Ошибка запроса товаров");
$items=array();
while ($nextItems=mysqli_fetch_array($resultItems)){
    if(empty($nextItems['photo'])){
        $photo='nopic.jpg';
    }else{
        $photo=$nextItems['photo'];
    }
    $items[]=array("id"=>$nextItems['id'], "idProd"=>$nextItems['idProd'], "idCat"=>$nextItems['idCat'], "model"=>$nextItems['model'], "price"=>$nextItems['price'], "count"=>$nextItems['count'], "photo"=>$photo);
}
$smarty_ii->assign("items", $items);
$smarty_ii->assign("number", 1);
$content=$smarty_ii->fetch("indexItem.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);