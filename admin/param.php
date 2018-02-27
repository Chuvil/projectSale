<?php
$dbc=@mysqli_connect("localhost", "root", "", "projectSale") or die("Ошибка подключения");
function myprotect($link, $data){
    return mysqli_real_escape_string($link, trim($data));
}