<?php
require_once ("header.php");
if(isset($_GET['id'])){
    $query="SELECT name, logo FROM producer WHERE id='".$_GET['id']."'";
    $result=mysqli_query($dbc, $query) or die("Ошибка запроса");
    $next=mysqli_fetch_array($result);
    $smarty_edit=new Smarty();
    $smarty_edit->assign("name", $next['name']);
    if(empty($next['logo'])){
        $logo='nopic.jpg';
    }else{
        $logo=$next['logo'];
    }
    $smarty_edit->assign("logo", $logo);
    $smarty_edit->assign("id", $_GET['id']);
    $content=$smarty_edit->fetch("editProd.tpl");
}elseif(isset($_POST['send'])&&!empty($_POST['name'])&&!empty($_POST['id'])){
    if($_FILES['newlogo']['error']==0){
        $oldlogo=$_POST['oldlogo'];
        if(!empty($oldlogo)&&$oldlogo!='nopic.jpg'){
            @unlink("../image/producer/$oldlogo");
        }
        $filenameTMP=$_FILES['newlogo']['tmp_name'];
        $filename=time().$_FILES['newlogo']['name'];
        move_uploaded_file($filenameTMP, "../image/producer/$filename");
        $query="UPDATE producer SET name='".$_POST['name']."', logo='$filename' WHERE id='".$_POST['id']."'";
    }else{
        $query="UPDATE producer SET name='".$_POST['name']."' WHERE id='".$_POST['id']."'";
    }
    mysqli_query($dbc, $query) or die("Ошибка запроса обновления");
    $content="Данные производителя обновлены";
}else{
    $content="Недостаточно данных для обновления";
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);