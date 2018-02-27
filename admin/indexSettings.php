<?php
require_once ("header.php");
$smarty_settings=new Smarty();
$query="SELECT id, title FROM settings";
$result=mysqli_query($dbc, $query) or die("Ошибка запроса");
$settings=array();
while ($next=mysqli_fetch_array($result)){
    $settings[]=array("id"=>$next['id'], "title"=>$next['title']);
}
$smarty_settings->assign("settings", $settings);
$smarty_settings->assign("number", 1);
$content=$smarty_settings->fetch("indexSettings.tpl");
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);