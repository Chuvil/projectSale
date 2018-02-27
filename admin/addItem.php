<?php
require_once ("header.php");
if(!isset($_POST['send'])){
    $smarty_add=new Smarty();
    $queryProducer="SELECT id, name FROM producer";
    $resultProducer=mysqli_query($dbc, $queryProducer) or die("Ошибка запроса производителя");
    $producer=array();
    while ($nextProducer=mysqli_fetch_array($resultProducer)){
        $producer[]=array("id"=>$nextProducer['id'], "name"=>$nextProducer['name']);
    }
    $smarty_add->assign("producer", $producer);
    $queryCategory="SELECT id, name FROM category";
    $resultCategory=mysqli_query($dbc, $queryCategory) or die("Ошибка запроса категории");
    $category=array();
    while ($nextCategory=mysqli_fetch_array($resultCategory)){
        $category[]=array("id"=>$nextCategory['id'], "name"=>$nextCategory['name']);
    }
    $smarty_add->assign("category", $category);
    $content=$smarty_add->fetch("addItem.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['model'])&&!empty($_POST['price'])&&!empty($_POST['count'])){
    if($_FILES['photo']['error']==0){
        $filenameTMP=$_FILES['photo']['tmp_name'];
        $filename=time().$_FILES['photo']['name'];
        move_uploaded_file($filenameTMP, "../image/items/$filename");
        $query="INSERT INTO items(idProd, idCat, model, price, count, photo, info, meta_title, meta_desc, meta_keywords) VALUES('".$_POST['idProd']."', '".$_POST['idCat']."', '".$_POST['model']."', '".$_POST['price']."', '".$_POST['count']."', '$filename', '".$_POST['info']."', '".$_POST['meta_title']."', '".$_POST['meta_desc']."', '".$_POST['meta_keywords']."')";
    }else{
        $query="INSERT INTO items(idProd, idCat, model, price, count, info, meta_title, meta_desc, meta_keywords) VALUES('".$_POST['idProd']."', '".$_POST['idCat']."', '".$_POST['model']."', '".$_POST['price']."', '".$_POST['count']."', '".$_POST['info']."', '".$_POST['meta_title']."', '".$_POST['meta_desc']."', '".$_POST['meta_keywords']."')";
    }
    echo $query;
    mysqli_query($dbc, $query) or die("Ошибка добавления");
    $content= "Товар добавлен. <a href='addItem.php'>Добавить ещё.</a>";
}else{
    $content="Недостаточно данных для добавления товара";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);