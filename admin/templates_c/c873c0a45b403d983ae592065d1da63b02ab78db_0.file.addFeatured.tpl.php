<?php
/* Smarty version 3.1.30, created on 2018-02-11 18:31:30
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\addFeatured.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8061d2aa65c7_58490961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c873c0a45b403d983ae592065d1da63b02ab78db' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\addFeatured.tpl',
      1 => 1518363053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8061d2aa65c7_58490961 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Добавление в избранное</h2>
    <h4><?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</h4>
    <div>
        <img src="../image/items/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="300px">
    </div>
    <p><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</p>
<form action="addFeatured.php" method="post">
    Введите номер для показа на странице<br>
    <input type="number" name="number"><br>
    <input type="hidden" name="idItems" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Подтвердить">
</form><?php }
}
