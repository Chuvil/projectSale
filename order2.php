<?php
require_once ("header.php");
$page="order";
if(isset($_SESSION['items'])&&count($_SESSION['items'])>0){
    $items=array();
    $totalSumm=0;
    foreach ($_SESSION['items'] as $tmp){
        $summ=$tmp['price']*$tmp['count'];
        $totalSumm+=$summ;
        if(empty($tmp['photo'])){
            $photo='nopic.jpg';
        }else{
            $photo=$tmp['photo'];
        }
        $items[]=array("id"=>$tmp['id'], "model"=>$tmp['model'], "price"=>$tmp['price'], "photo"=>$photo, "count"=>$tmp['count'], "summ"=>$summ);
    }
    $smarty_order=new Smarty();
    $smarty_order->assign("items", $items);
    $smarty_order->assign("number", 1);
    $smarty_order->assign("totalSumm", $totalSumm);
    $content=$smarty_order->fetch("order2.tpl");
    if(isset($_POST['send'])){
        $idClient=$_SESSION['id'];
        for($i=0; $i<count($_SESSION['items']); $i++){
            $idItems=$_SESSION['items'][$i]['id'];
            $count=$_SESSION['items'][$i]['count'];
            $querySend="INSERT INTO relation(idClient, idItems, count, orderDate) VALUES('$idClient', '$idItems', '$count', now())";
            mysqli_query($dbc, $querySend) or die("Ошибка запроса корзины");
        }
        unset($_SESSION['items']);
        $_SESSION['items']=array();
        $content="Ваш заказа добавлен";
    }
}
require_once ("main.php");