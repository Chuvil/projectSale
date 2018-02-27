<?php
/* Smarty version 3.1.30, created on 2018-02-16 19:02:30
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8700965271f7_61435230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddea37e88d5b625f90e040721e28943de7b10577' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\order.tpl',
      1 => 1518796949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8700965271f7_61435230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Невыполненные заказы</h2>
<table border="1">
    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['change'];?>

        <?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idClient'];?>

        <?php if ($_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['change'] != $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idClient']) {?>
            <tr>
                <th>№</th>
                <th>Имя клиента</th>
                <th>e-mail</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Комментарий</th>
                <th>Дата заказа</th>
                <th>Выполнить</th>
                <th>Удалить</th>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fio'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['info'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['orderDate'];?>
</td>
                <td><a href="runOrder.php?idClient=<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idClient'];?>
">Выполнить</a></td>
                <td><a href="delOrder.php?idClient=<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['idClient'];?>
">Удалить</a></td>
            </tr>
            <tr>
                <th>Модель</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
                <th>Фото</th>
            </tr>
        <?php }?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['summ'];?>
</td>
            <td><img src="../image/items/<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" WIDTH="100px"></td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rows'] == $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['countRows']) {?>
            <tr>
                <th colspan="4">ИТОГО</th>
                <th colspan="4"><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalSumm'];?>
</th>
            </tr>
        <?php }?>
    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
</table><?php }
}
