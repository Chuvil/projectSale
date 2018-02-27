<?php
/* Smarty version 3.1.30, created on 2017-12-17 17:22:32
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\editSettings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a367da85169b6_91632127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0206f30e3ab0f42be47788f6cfc5e3cbf23f371' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\editSettings.tpl',
      1 => 1513454381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a367da85169b6_91632127 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="editSettings.php" method="post">
    Заголовок<br>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
    Контент на странице<br>
    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['settings_content']->value;?>
</textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc"><?php echo $_smarty_tpl->tpl_vars['meta_desc']->value;?>
</textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords"><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
</textarea><br>
    Имя страницы<br>
    <input type="text" name="name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br>
    Приоритет<br>
    <input type="number" name="priority" value="<?php echo $_smarty_tpl->tpl_vars['priority']->value;?>
"><br>
</form><?php }
}
