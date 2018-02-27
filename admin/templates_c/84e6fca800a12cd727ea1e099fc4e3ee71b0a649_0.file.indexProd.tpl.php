<?php
/* Smarty version 3.1.30, created on 2017-12-18 19:14:04
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\indexProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37e94c673f54_59420041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84e6fca800a12cd727ea1e099fc4e3ee71b0a649' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\indexProd.tpl',
      1 => 1513538296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37e94c673f54_59420041 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="addProd.php">Добавить производителя</a><br>
<table border="1">
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Логотип</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['producer']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><img src="../image/producer/<?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['logo'];?>
" width="200px"></td>
            <td><a href="editProd.php?id=<?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактировать</a></td>
            <td><a href="delProd.php?id=<?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['producer']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Удалить</a></td>
    </tr>
    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
</table><?php }
}
