<?php
require_once ("header.php");
$smarty_sideList=new Smarty();
/*$query="SELECT idCat, idProd, category.name AS categoryName, producer.name AS producerName, category.id AS categoryId, producer.id AS producerId FROM category INNER JOIN items ON category.id=idCat INNER JOIN producer ON idProd=producer.id ORDER BY idCat ASC";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$list=array();
while ($next=mysqli_fetch_array($result)){
    $list[]=array("idCat"=>$next['idCat'], "idProd"=>$next['idProd'], "categoryId"=>$next['categoryId'], "categoryName"=>$next['categoryName'], "producerId"=>$next['producerId'], "producerName"=>$next['producerName']);
}
$smarty_sideList->assign("list", $list);*/
$queryCat="SELECT id, name FROM category";
$resultCat=mysqli_query($dbc, $queryCat) or die("Ошибка запроса категории");
$category=array();
while ($nextCat=mysqli_fetch_array($resultCat)){
    $category[]=array("id"=>$nextCat['id'], "name"=>$nextCat['name']);
}
$queryProd="SELECT id, name FROM producer";
$resultProd=mysqli_query($dbc, $queryProd) or die("Ошибка запроса производителя");
$producer=array();
while ($nextProd=mysqli_fetch_array($resultProd)){
    $producer[]=array("id"=>$nextProd['id'], "name"=>$nextProd['name']);
}
$smarty_sideList->assign("category", $category);
$smarty_sideList->assign("producer", $producer);
$sideList=$smarty_sideList->fetch("sideList.tpl");
$smarty_main->assign("sideList", $sideList);