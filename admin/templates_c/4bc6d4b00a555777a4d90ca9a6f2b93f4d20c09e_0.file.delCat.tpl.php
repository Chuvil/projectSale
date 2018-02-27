<?php
/* Smarty version 3.1.30, created on 2017-12-18 19:14:00
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\delCat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37e948448af2_93196568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bc6d4b00a555777a4d90ca9a6f2b93f4d20c09e' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\delCat.tpl',
      1 => 1513613637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37e948448af2_93196568 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Удаление категории <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
<form action="delCat.php" method="post">
    Удалить <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?<br>
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="submit" name="send" value="Подтвердить"><br>
</form><?php }
}
