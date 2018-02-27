<?php
/* Smarty version 3.1.30, created on 2017-12-18 21:04:16
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\editItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a380320321e16_46985791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92eed16c90fb81ffa6362ddbf235687cdceaadf8' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\editItem.tpl',
      1 => 1513620255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a380320321e16_46985791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="editItem.php" method="post" enctype="multipart/form-data">
    Измените производителя<br>
    <select name="idProd">
        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['producer']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['idProd']->value == $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
                <option selected value="<?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
            <?php }?>
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
    Измените категорию товара<br>
    <select name="idCat">
        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['idCat']->value == $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
                <option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
            <?php }?>
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
    Измените название модели<br>
    <input type="text" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"><br>
    Измените цену<br>
    <input type="number" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"><br>
    Измените количество<br>
    <input type="number" name="count" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
"><br>
    Загрузите новое фото<br>
    <img src="../image/items/<?php echo $_smarty_tpl->tpl_vars['oldPhoto']->value;?>
" WIDTH="200px"><br>
    <input type="file" name="newPhoto" value="Загрузить"><br>
    Измените описание<br>
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
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item_id']->value;?>
">
    <input type="hidden" name="oldPhoto" value="<?php echo $_smarty_tpl->tpl_vars['oldPhoto']->value;?>
">
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
