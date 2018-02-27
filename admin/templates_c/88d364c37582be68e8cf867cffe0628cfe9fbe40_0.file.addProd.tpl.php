<?php
/* Smarty version 3.1.30, created on 2017-12-14 21:48:33
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\addProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32c7811a5a29_56558749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88d364c37582be68e8cf867cffe0628cfe9fbe40' => 
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
function content_5a32c7811a5a29_56558749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addprod.php" method="post" enctype="multipart/form-data">
    Введите название производителя<br>
    <input type="text" name="name"><br>
    Загрузите логотип производителя<br>
    <input type="file" name="logo"><br>
    <input type="submit" name="send" value="Отправить"><br>
</form><?php }
}
