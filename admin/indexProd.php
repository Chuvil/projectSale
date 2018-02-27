<?php
require_once ("header.php");
$smarty_index=new Smarty();
$query="SELECT id, name, logo FROM producer";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$producer=array();
while ($next=mysqli_fetch_array($result)){
    if(empty($next['logo'])){
        $logo='nopic.jpg';
    }else{
        $logo=$next['logo'];
    }
    $producer[]=array("id"=>$next['id'], "name"=>$next['name'], "logo"=>$logo);
}
$smarty_index->assign("producer", $producer);
$smarty_index->assign("number", 1);
$content=$smarty_index->fetch("indexProd.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);