<?php
/* Smarty version 3.1.30, created on 2017-12-28 22:45:41
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4549e531fff4_49741802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19793ecd2cc2c91b757c09b71b48204ac2029d38' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\main.tpl',
      1 => 1513719428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4549e531fff4_49741802 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Меню</h2>
<a href="index.php">Главная страница</a><br>
<a href="indexItem.php">Управление товарами</a><br>
<a href="indexProd.php">Управление производителями</a><br>
<a href="indexCat.php">Управление категориями</a><br>
<a href="indexSettings.php">Управление настройками сайта</a><br>
<a href="indexAdmin.php">Управление администрацией</a><br>
<a href="registration.php">Регистрация сотрудников</a><br>
<a href="exit.php">Выход</a><br>
<?php echo $_smarty_tpl->tpl_vars['content']->value;
}
}
