<?php
require_once ("header.php");
$query="SELECT id, name FROM category";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$category=array();
while ($next=mysqli_fetch_array($result)){
    $category[]=array("id"=>$next['id'], "name"=>$next['name']);
}
$smarty_cat=new Smarty();
$smarty_cat->assign("category", $category);
$smarty_cat->assign("number", 1);
$content=$smarty_cat->fetch("indexCat.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);