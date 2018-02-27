<?php
require_once ("header.php");
$page="search";
$smarty_search=new Smarty();
if(!empty($_GET['search'])){
    $smarty_search->assign("search", $_GET['search']);
    $search=str_replace(",", " ", myprotect($dbc, $_GET['search']));
    $word=explode(" ", $search);
}
$finalWord=array();
if(count($word)>0){
    foreach ($word as $tmp) {
        if(!empty($tmp)){
            $finalWord[]=$tmp;
        }
    }
}
$whereList=array();
if(count($finalWord)>0){
    foreach ($finalWord as $tmp){
        $whereList[]=" model LIKE '%".$tmp."%'"; // Что делать с производителями, названия которых записаны в отдельной таблице БД?
    }
}
$resultWhere=implode(' OR ', $whereList);
if(!empty($resultWhere)){
    $query="SELECT id, idProd, model, price, photo FROM items WHERE $resultWhere";
    $result=mysqli_query($dbc, $query) or die("Ошибка поиска");
    $items=array();
    while($next=mysqli_fetch_array($result)){
        if(empty($next['photo'])){
            $photo='nopic.jpg';
        }else{
            $photo=$next['photo'];
        }
        $queryProd="SELECT name FROM producer WHERE id='".$next['idProd']."'";
        $resultProd=mysqli_query($dbc, $queryProd) or die("Ошибка запроса");
        $nextProd=mysqli_fetch_array($resultProd);
        $items[]=array("id"=>$next['id'], "model"=>$next['model'], "nameProd"=>$nextProd['name'], "price"=>$next['price'], "photo"=>$photo);
        $smarty_search->assign("items", $items);
        $content=$smarty_search->fetch("search.tpl");
    }
}else{
    $content="По вашему запросу ничего не найдено";
}
require_once ("main.php");
