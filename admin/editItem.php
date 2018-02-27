<?php
require_once ("header.php");
if(isset($_GET['id'])){
    $smarty_edit=new Smarty();
    $queryItem="SELECT idProd, idCat, model, price, count, photo, info, meta_title, meta_desc, meta_keywords FROM items WHERE id='".$_GET['id']."'";
    $resultItem=mysqli_query($dbc, $queryItem) or die("Ошибка запроса товара");
    $nextItem=mysqli_fetch_array($resultItem);
    $smarty_edit->assign("idProd", $nextItem['idProd']);
    $smarty_edit->assign("idCat", $nextItem['idCat']);
    $smarty_edit->assign("model", $nextItem['model']);
    $smarty_edit->assign("price", $nextItem['price']);
    $smarty_edit->assign("count", $nextItem['count']);
    if(empty($nextItem['photo'])){
        $oldPhoto='nopic.jpg';
    }else{
        $oldPhoto=$nextItem['photo'];
    }
    $smarty_edit->assign("oldPhoto", $oldPhoto);
    $smarty_edit->assign("info", $nextItem['info']);
    $smarty_edit->assign("meta_title", $nextItem['meta_title']);
    $smarty_edit->assign("meta_desc", $nextItem['meta_desc']);
    $smarty_edit->assign("meta_keywords", $nextItem['meta_keywords']);
    $smarty_edit->assign("item_id", $_GET['id']);
    $queryProducer="SELECT id, name, logo FROM producer";
    $resultProducer=mysqli_query($dbc, $queryProducer) or die("Ошибка запроса производителя");
    $producer=array();
    if(empty($nextProducer['logo'])){
        $logo='nopic.jpg';
    }else{
        $logo=$nextProducer['logo'];
    }
    while ($nextProducer=mysqli_fetch_array($resultProducer)){
        $producer[]=array("id"=>$nextProducer['id'], "name"=>$nextProducer['name'], "logo"=>$logo);
    }
    $smarty_edit->assign("producer", $producer);
    $queryCategory="SELECT id, name FROM category";
    $resultCategory=mysqli_query($dbc, $queryCategory) or die("Ошибка запроса категории");
    $category=array();
    while ($nextCategory=mysqli_fetch_array($resultCategory)){
        $category[]=array("id"=>$nextCategory['id'], "name"=>$nextCategory['name']);
    }
    $smarty_edit->assign("category", $category);
    $content=$smarty_edit->fetch("editItem.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['model'])&&!empty($_POST['price'])&&!empty($_POST['count'])){
    if($_FILES['newPhoto']['error']==0){
        $oldPhoto=$_POST['oldPhoto'];
        if(isset($oldPhoto)&&$oldPhoto!='nopic.jpg'){
            @unlink("../image/items/$oldPhoto");
        }
        $filenameTMP=$_FILES['newPhoto']['tmp_name'];
        $filename=time().$_FILES['newPhoto']['name'];
        move_uploaded_file($filenameTMP, "../image/items/$filename");
        $query="UPDATE items SET idProd='".$_POST['idProd']."', idCat='".$_POST['idCat']."', model='".$_POST['model']."', price='".$_POST['price']."', count='".$_POST['count']."', photo='$filename', info='".$_POST['info']."', meta_title='".$_POST['meta_title']."', meta_desc='".$_POST['meta_desc']."', meta_keywords='".$_POST['meta_keywords']."' WHERE id='".$_POST['id']."'";
    }else{
        $query="UPDATE items SET idProd='".$_POST['idProd']."', idCat='".$_POST['idCat']."', model='".$_POST['model']."', price='".$_POST['price']."', count='".$_POST['count']."', info='".$_POST['info']."', meta_title='".$_POST['meta_title']."', meta_desc='".$_POST['meta_desc']."', meta_keywords='".$_POST['meta_keywords']."' WHERE id='".$_POST['id']."'";
    }
    mysqli_query($dbc, $query) or die("Ошибка запроса обновления");
    $content="Данные товара успешно обновленны";
}else{
    $content="Недостаточно данных для обновления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);