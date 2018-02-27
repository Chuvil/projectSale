<?php
require_once ("header.php");
$smarty_fItems=new Smarty();
$queryFeat="SELECT items.id AS itemsId, model, price, photo, producer.name AS prodName FROM producer INNER JOIN items ON producer.id=items.idProd INNER JOIN featured ON items.id=featured.idItems ORDER BY number ASC";
$resultFeat=mysqli_query($dbc, $queryFeat) or die("Ошибка запроса списка");
$items=array();
while ($next=mysqli_fetch_array($resultFeat)){
    if(empty($next['photo'])){
        $photo='nopic.jpg';
    }else{
        $photo=$next['photo'];
    }
    $items[]=array("id"=>$next['itemsId'], "prodName"=>$next['prodName'], "model"=>$next['model'], "price"=>$next['price'], "photo"=>$photo);
}
$smarty_fItems->assign("items", $items);
$featuredItems=$smarty_fItems->fetch("featuredItems.tpl");
$smarty_main->assign("featuredItems", $featuredItems);