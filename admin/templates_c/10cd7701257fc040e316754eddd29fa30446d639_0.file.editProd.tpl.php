<?php
/* Smarty version 3.1.30, created on 2017-12-17 22:17:44
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\editProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a36c2d8a028d9_85150784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10cd7701257fc040e316754eddd29fa30446d639' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\editProd.tpl',
      1 => 1512925359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a36c2d8a028d9_85150784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="editprod.php" method="post" enctype="multipart/form-data">
    Измените название производителя<br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    Старый логотип<br>
    <img src="../image/producer/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="200px"><br>
    Загрузите новый логотип<br>
    <input type="file" name="newlogo"><br>
    <input type="hidden" name="oldlogo" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
