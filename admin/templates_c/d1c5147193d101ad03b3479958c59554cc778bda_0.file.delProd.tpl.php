<?php
/* Smarty version 3.1.30, created on 2017-12-18 19:21:29
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\delProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37eb09c8aa36_28896451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c5147193d101ad03b3479958c59554cc778bda' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\delProd.tpl',
      1 => 1513613744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37eb09c8aa36_28896451 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Удаление производителя <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
<form action="delProd.php" method="post">
    Удалить <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="submit" name="send" value="Подтвердить"><br>
</form><?php }
}
