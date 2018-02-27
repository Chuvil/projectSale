<?php
/* Smarty version 3.1.30, created on 2018-02-25 22:35:31
  from "D:\openserver\OpenServer\domains\projectSale\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a931003e7ef90_71047404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c11926eb59f4ff0ce1b63ca6e4297c602a5858e' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\templates\\login.tpl',
      1 => 1519587330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a931003e7ef90_71047404 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-form"><!--login form-->
    <h2>Войдите в ваш аккаунт</h2>
    <form action="login.php" method="post">
        <input type="text" name="login" placeholder="Ваш логин" />
        <input type="password" name="password" placeholder="Пароль" />
        <span>
								<input type="checkbox" class="checkbox">
								Запомнить
							</span>
        <input type="submit" name="send" class="btn btn-default" value="Войти">
    </form>
</div><?php }
}
