<?php
/* Smarty version 3.1.30, created on 2018-02-25 23:06:25
  from "D:\openserver\OpenServer\domains\projectSale\templates\catalog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a93174162f4c8_23747538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '125d7b0c932907b8388453073e14685ac4deb5b7' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\templates\\catalog.tpl',
      1 => 1519587915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a93174162f4c8_23747538 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Каталог</h2>
        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="product.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><img src="image/items/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="300px" height="300px" alt="" /></a>
                        <h2><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</h2>
                        <p><a href="product.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['prodName'];?>
 <?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</a></p>
                        <a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Купить</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
    </div>
<div>
    <table>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 1) {?>
                <th class="pagination2 active">«</th>
            <?php } else { ?>
                <th class="pagination2"><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value-1;?>
">«</a></th>
            <?php }?>
            <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pagesArray']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['activePage']->value == $_smarty_tpl->tpl_vars['pagesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p']) {?>
                    <th class="pagination2 active"><?php echo $_smarty_tpl->tpl_vars['pagesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
</th>
                <?php } else { ?>
                    <th class="pagination2"><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['pagesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagesArray']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p'];?>
</a></th>
                <?php }?>
            <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
            <?php if ($_smarty_tpl->tpl_vars['activePage']->value == $_smarty_tpl->tpl_vars['countPages']->value) {?>
                <th class="pagination2 active">&raquo;</th>
            <?php } else { ?>
                <th class="pagination2"><a href="catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value+1;?>
">&raquo;</a></th>
            <?php }?>
        </tr>
    </table>
    </div>
</div><?php }
}
