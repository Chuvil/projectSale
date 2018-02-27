<?php
/* Smarty version 3.1.30, created on 2017-12-20 00:31:26
  from "D:\openserver\OpenServer\domains\projectSale\admin\templates\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a39852e7ad209_67579133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ffa7e1c57a5ee8bb12df8e108e99755cfc28d02' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\admin\\templates\\registration.tpl',
      1 => 1513719084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39852e7ad209_67579133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Регистрация сотрудников</h2>
<form action="registration.php" method="post" enctype="multipart/form-data">
    Имя<br>
    <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    Логин<br>
    <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"><br>
    e-mail<br>
    <input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><br>
    Пароль<br>
    <input type="password" name="password" id="password"><br>
    Повторите пароль<br>
    <input type="password" name="password1" id="password1"><br>
    Уровень прав<br>
    <select name="status">
        <option <?php if (isset($_smarty_tpl->tpl_vars['status']->value) && 'status' == 1) {?>selected<?php }?> value="1">Администратор</option>
        <option <?php if (isset($_smarty_tpl->tpl_vars['status']->value) && 'status' == 2) {?>selected<?php }?> value="2">Модератор</option>
    </select><br>
    Информация<br>
    <textarea name="info" id="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea><br>
    Телефон<br>
    <input type="text" name="phone" id="phone"><br>
    Фото<br>
    <input type="file" name="photo" id="photo" value="Загрузить фото"><br>
    <input type="submit" name="send" id="send" value="Отправить"><br>
</form><?php }
}
