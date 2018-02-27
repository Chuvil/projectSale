<?php
require_once ("header.php");
$page="order";
if(isset($_POST['send'])){
    for($i=0; $i<count($_SESSION['items']); $i++){
        $nameElement="count".$_SESSION['items'][$i]['id'];
        $_SESSION['items'][$i]['count']=$_POST[$nameElement];
    }
}
if(isset($_SESSION['items'])&&count($_SESSION['items'])>0){
    $items=array();
    $totalSumm=0;
    foreach ($_SESSION['items'] as $tmp){
        $query="SELECT count FROM items WHERE id='".$tmp['id']."'";
        $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
        $next=mysqli_fetch_array($result);
        $count=$next['count'];
        $summ=$tmp['price']*$tmp['count'];
        $totalSumm+=$summ;
        if(empty($tmp['photo'])){
            $photo='nopic.jpg';
        }else{
            $photo=$tmp['photo'];
        }
        $items[]=array("id"=>$tmp['id'], "maxCount"=>$count, "model"=>$tmp['model'], "price"=>$tmp['price'], "count"=>$tmp['count'], "summ"=>$summ, "photo"=>$photo);
    }
    $smarty_order=new Smarty();
    $smarty_order->assign("totalSumm", $totalSumm);
    $smarty_order->assign("number", 1);
    $smarty_order->assign("items", $items);
    if(isset($_SESSION['id'])){
        $smarty_order->assign("sesId", $_SESSION['id']);
    }
    $content=$smarty_order->fetch("order.tpl");
}
require_once ("main.php");