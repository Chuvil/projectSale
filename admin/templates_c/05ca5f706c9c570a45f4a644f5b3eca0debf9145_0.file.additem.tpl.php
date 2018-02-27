<?php
/* Smarty version 3.1.30, created on 2017-12-14 22:09:14
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\additem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32cc5a022e79_97351839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05ca5f706c9c570a45f4a644f5b3eca0debf9145' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\additem.tpl',
      1 => 1513278552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a32cc5a022e79_97351839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addItem.php" method="post" enctype="multipart/form-data">
    Производитель<br>
    <select name="idProd">
        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['producer']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
    </select><br>
    Категория товара<br>
    <select name="idCat">
        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
    </select><br>
    Название модели<br>
    <input type="text" name="model"><br>
    Цена<br>
    <input type="number" name="price"><br>
    Количество<br>
    <input type="number" name="count"><br>
    Фото<br>
    <input type="file" name="photo" value="Загрузить"><br>
    Описание<br>
    <textarea name="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea><br>
    Meta title<br>
    <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea><br>
    Meta description<br>
    <textarea name="meta_desc"><?php echo $_smarty_tpl->tpl_vars['meta_desc']->value;?>
</textarea><br>
    Meta keywords<br>
    <textarea name="meta_keywords"><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
</textarea><br>
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
