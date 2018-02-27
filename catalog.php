<?php
require_once ("header.php");
$page="catalog";
$smarty_catalog=new Smarty();
$queryItems="SELECT items.id AS itemsId, idProd, idCat, producer.name AS prodName, model, price, count, photo FROM producer INNER JOIN items ON producer.id=items.idProd";
if(isset($_GET['idProd'])&&!isset($_GET['idCat'])){
    $queryItems.=" WHERE idProd='".$_GET['idProd']."'";
}
if(isset($_GET['idCat'])&&!isset($_GET['idProd'])){
    $queryItems.=" WHERE idCat='".$_GET['idCat']."'";
}
if(isset($_GET['idCat'])&&isset($_GET['idProd'])){
    $queryItems.=" WHERE idProd='".$_GET['idProd']."' AND idCat='".$_GET['idCat']."'";
}
$record=2;
$queryR=$queryItems;
$resultR=mysqli_query($dbc, $queryR) or die("Ошибка запроса 14");
$countRows=mysqli_num_rows($resultR);
$countPages=ceil($countRows/$record);
if(isset($_GET['page'])){
    $activePage=$_GET['page'];
}else{
    $activePage=1;
}
$skip=($activePage-1)*$record;
$pagesArray=array();
for($i=1; $i<=$countPages; $i++){
    $pagesArray[]=array("p"=>$i);
}
$queryItems.=" LIMIT $skip, $record";
echo $queryItems;
$resultItems=mysqli_query($dbc, $queryItems) or die("Ошибка запроса товаров");
$items=array();
while ($nextItems=mysqli_fetch_array($resultItems)){
    if(empty($nextItems['photo'])){
        $photo='nopic.jpg';
    }else{
        $photo=$nextItems['photo'];
    }
    $items[]=array("id"=>$nextItems['itemsId'], "idProd"=>$nextItems['idProd'], "idCat"=>$nextItems['idCat'], "prodName"=>$nextItems['prodName'], "model"=>$nextItems['model'], "price"=>$nextItems['price'], "count"=>$nextItems['count'], "photo"=>$photo);
}
$smarty_catalog->assign("pagesArray", $pagesArray);
$smarty_catalog->assign("activePage", $activePage);
$smarty_catalog->assign("countPages", $countPages);
$smarty_catalog->assign("items", $items);
$content=$smarty_catalog->fetch("catalog.tpl");
require_once ("main.php");
