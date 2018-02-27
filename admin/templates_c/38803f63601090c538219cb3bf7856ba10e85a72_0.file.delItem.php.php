<?php
/* Smarty version 3.1.30, created on 2017-12-14 22:12:55
  from "D:\openserver\OpenServer\domains\projectSale\admin\delItem.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32cd372a8060_36522747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38803f63601090c538219cb3bf7856ba10e85a72' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\delItem.php',
      1 => 1513266117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a32cd372a8060_36522747 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>require_once ("header.php");
if(isset($_GET['id'])&&isset($_GET['model'])){
    $smarty_del=new Smarty();
    $smarty_del->assign("id", $_GET['id']);
    $smarty_del->assign("model", $_GET['model']);
    $queryPhoto="SELECT photo FROM items WHERE id='".$_GET['id']."'";
    $resultPhoto=mysqli_query($dbc, $queryPhoto) or die("Ошибка запроса фото");
    $next=mysqli_fetch_array($resultPhoto);
    $photo=$next['photo'];
    if(!empty($photo)&&$photo!='nopic.jpg'){
        @unlink("../image/items/$photo");
    }
    $queryDel="DELETE FROM items WHERE id='".$_GET['id']."' AND model='".$_GET['model']."'";
    mysqli_query($dbc, $queryDel) or die("Ошибка запроса удаления");
    $content=$smarty_del->fetch("delItem.php");
}
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
mysqli_close($dbc);<?php }
}
