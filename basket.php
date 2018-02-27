<?php
require_once ("header.php");
if(!empty($_GET['id'])&&isset($_GET['mode'])&&$_GET['mode']=="add"&&!empty($_GET['count'])){
    $exist=false;
    if(!isset($_SESSION['items'])){
        $_SESSION['items']=array();
    }
    for($i=0; $i<count($_SESSION['items']); $i++){
        if($_GET['id']==$_SESSION['items'][$i]['id']) {
            $_SESSION['items'][$i]['count']+=$_GET['count'];
            $exist=true;
            break;
        }
    }
    if(!$exist){
        $query="SELECT model, price, photo FROM items WHERE id='".$_GET['id']."'";
        $result=mysqli_query($dbc, $query) or die("Ошибка запроса добавления товара");
        $next=mysqli_fetch_array($result);
        $_SESSION['items'][]=array("id"=>$_GET['id'], "model"=>$next['model'], "price"=>$next['price'], "photo"=>$next['photo'], "count"=>$_GET['count']);
    }
    header("location:catalog.php");
}
if(isset($_GET['mode'])&&$_GET['mode']=="clear"){
    unset($_SESSION['items']);
    $_SESSION['items']=array();
}
if(!empty($_GET['id'])&&isset($_GET['mode'])&&$_GET['mode']=="del"){
    for($i=0; $i<count($_SESSION['items']); $i++){
        if($_GET['id']==$_SESSION['items'][$i]['id']){
            unset($_SESSION['items'][$i]);
            break;
        }
    }
    $items=array();
    foreach ($_SESSION['items'] as $tmp){
        if(!empty($tmp)){
            $items[]=$tmp;
        }
    }
    unset($_SESSION['items']);
    $_SESSION['items']=array();
    $_SESSION['items']=$items;
    unset($items);
    header("location:order.php");
}
