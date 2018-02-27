<?php
if(isset($_POST['email'])&&!empty($_POST['email'])) {
    $dbc = @mysqli_connect("localhost", "root", "", "projectSale") or die("Ошибка подключения");
    $query="SELECT id FROM clients WHERE email='".$_POST['email']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $num=mysqli_num_rows($result);
    if($num>0){
        echo 1;
    }else{
        echo 2;
    }
}