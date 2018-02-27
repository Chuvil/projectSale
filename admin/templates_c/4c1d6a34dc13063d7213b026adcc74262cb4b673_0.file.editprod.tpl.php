<?php
/* Smarty version 3.1.30, created on 2017-12-10 20:02:46
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\editProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d68b61a5145_52041657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1d6a34dc13063d7213b026adcc74262cb4b673' => 
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
function content_5a2d68b61a5145_52041657 (Smarty_Internal_Template $_smarty_tpl) {
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
