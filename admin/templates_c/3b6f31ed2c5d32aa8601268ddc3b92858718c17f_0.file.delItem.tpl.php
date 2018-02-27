<?php
/* Smarty version 3.1.30, created on 2017-12-14 22:23:35
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\delItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32cfb7765815_34006561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b6f31ed2c5d32aa8601268ddc3b92858718c17f' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\delItem.tpl',
      1 => 1513279412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a32cfb7765815_34006561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Удаление товара <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</h2>
<form action="delItem.php" method="post">
    Удалить <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
?
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
">
    <input type="submit" name="send" value="Подтвердить">
</form><?php }
}
