<?php
require_once ("header.php");
$smarty_slider=new Smarty();
if(!isset($_POST['send'])&&!empty($_GET['id'])){
    $queryItems="SELECT idProd, model, price FROM items WHERE id='".$_GET['id']."'";
    $resultItems=mysqli_query($dbc, $queryItems) or die("Ошибка запроса 1");
    $items=array();
    while ($nextItems=mysqli_fetch_array($resultItems)){
        $items[]=array("id"=>$_GET['id'], "idProd"=>$nextItems['idProd'], "model"=>$nextItems['model'], "price"=>$nextItems['price']);
    }
    $queryProd="SELECT id, name FROM producer";
    $resultProd=mysqli_query($dbc, $queryProd) or die("Ошибка запроса 2");
    $prod=array();
    while ($nextProd=mysqli_fetch_array($resultProd)){
        $prod[]=array("id"=>$nextProd['id'], "name"=>$nextProd['name']);
    }
    $smarty_slider->assign("items", $items);
    $smarty_slider->assign("prod", $prod);
    $content=$smarty_slider->fetch("addSlider.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['idItems'])&&!empty($_POST['slogan'])&&!empty($_POST['number'])){
    if($_FILES['photo']['error']==0){
        $filenameTMP=$_FILES['photo']['tmp_name'];
        $filename=time().$_FILES['photo']['name'];
        move_uploaded_file($filenameTMP, "../image/slider/$filename");
        $query="INSERT INTO slider (idItems, photo, slogan, number) VALUES ('".$_POST['idItems']."', '$filename', '".$_POST['slogan']."', '".$_POST['number']."')";
        mysqli_query($dbc, $query) or die("Ошибка добавления слайдера");
    }else{
        $content="Не добавлено фото для слайдера";
    }
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}
mysqli_close($dbc);