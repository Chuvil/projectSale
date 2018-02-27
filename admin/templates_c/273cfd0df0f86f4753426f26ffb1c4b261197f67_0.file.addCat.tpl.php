<?php
/* Smarty version 3.1.30, created on 2017-12-14 21:48:22
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\addCat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32c776343309_15496096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '273cfd0df0f86f4753426f26ffb1c4b261197f67' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\addCat.tpl',
      1 => 1513020865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a32c776343309_15496096 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addcat.php" method="post">
    Введите название категории<br>
    <input type="text" name="name"><br>
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
