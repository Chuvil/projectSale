<?php
require_once ("header.php");
$smarty_slider=new Smarty();
$querySlider="SELECT id, number, idItems FROM slider";
$resultSlider=mysqli_query($dbc, $querySlider) or die("Ошибка запроса");
$slider=array();
while ($nextSlider=mysqli_fetch_array($resultSlider)){
    $slider[]=array("id"=>$nextSlider['id'], "number"=>$nextSlider['number'], "idItems"=>$nextSlider['idItems']);
}
$queryItems="SELECT id, "