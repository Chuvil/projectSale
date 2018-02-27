<?php
require_once ("header.php");
if(!isset($_POST['send'])){
    $smarty_add=new Smarty();
    $content=$smarty_add->fetch("addProd.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['name'])){
    if($_FILES['logo']['error']==0){
        $filenameTMP=$_FILES['logo']['tmp_name'];
        $filename=time().$_FILES['logo']['name'];
        move_uploaded_file($filenameTMP, "../image/producer/$filename");
        $query="INSERT INTO producer(name, logo) VALUES('".$_POST['name']."', '$filename')";
    }else{
        $query="INSERT INTO producer(name)VALUES ('".$_POST['name']."')";
    }
    mysqli_query($dbc, $query) or die("Ошибка запроса");
    $content= "Производитель добавлен. <a href='addProd.php'>Добавить ещё</a>";
}else{
    $content="Недостаточно данных для добавления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);