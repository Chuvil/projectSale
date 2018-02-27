<?php
/* Smarty version 3.1.30, created on 2017-12-11 22:34:25
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\addCat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2eddc1f0be25_22500712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15beceb4ad9c8c2f98a6aac2dfea2d327a301725' => 
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
function content_5a2eddc1f0be25_22500712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addcat.php" method="post">
    Введите название категории<br>
    <input type="text" name="name"><br>
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
