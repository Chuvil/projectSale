<?php
/* Smarty version 3.1.30, created on 2017-12-10 18:26:36
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\addProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d522ce4b298_70800445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cd1b3b438f937fbcb374fdb6093e8c29b8a5c35' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\addProd.tpl',
      1 => 1512919595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d522ce4b298_70800445 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addprod.php" method="post" enctype="multipart/form-data">
    Введите название производителя<br>
    <input type="text" name="name"><br>
    Загрузите логотип производителя<br>
    <input type="file" name="logo"><br>
    <input type="submit" name="send" value="Отправить"><br>
</form><?php }
}
