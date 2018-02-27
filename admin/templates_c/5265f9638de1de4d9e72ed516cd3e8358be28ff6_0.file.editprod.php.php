<?php
/* Smarty version 3.1.30, created on 2017-12-10 19:58:13
  from "D:\openserver\OpenServer\domains\projectSale\admin\editProd.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d67a5749949_95671206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5265f9638de1de4d9e72ed516cd3e8358be28ff6' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\editProd.php',
      1 => 1512919935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d67a5749949_95671206 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>require_once ("header.php");
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
    $content=$smarty_edit->fetch("editprod.php");
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
$smarty_main->display("main.tpl");<?php }
}
