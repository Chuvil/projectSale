<?php
if(isset($_POST['login'])&&!empty($_POST['login'])) {
    $dbc = @mysqli_connect("localhost", "root", "", "projectSale") or die("Ошибка подключения");
    $query="SELECT id FROM clients WHERE login='".$_POST['login']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $num=mysqli_num_rows($result);
    if($num>0){
        echo 1;
    }else{
        echo 2;
    }
}