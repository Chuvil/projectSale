<?php
/* Smarty version 3.1.30, created on 2018-02-26 21:34:22
  from "D:\openserver\OpenServer\domains\projectSale\templates\registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a94532ee055f4_22205779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c3fe4cd4407b5a7dbedbb7e6492341b4d79bdd' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\templates\\registration.tpl',
      1 => 1519670062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a94532ee055f4_22205779 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-4">
    <p id="sLogin" class="error"></p>
    <div class="contact-form">
        <h2>Регистрация</h2>
        <form action="registration.php" class="contact-form row" method="post" enctype="multipart/form-data">
            ФИО<br>
            <input type="text" name="fio" class="form-control" required="required" id="fio" value="<?php echo $_smarty_tpl->tpl_vars['fio']->value;?>
"><br>
            Логин<br>
            <input type="text" name="login" class="form-control" required="required" id="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"><br>
            e-mail<br>
            <input type="text" name="email" class="form-control" required="required" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><span id="sEmail" class="error"></span><br>
            Пароль<br>
            <input type="password" name="password" class="form-control" required="required" id="password"><br>
            Повторите пароль<br>
            <input type="password" name="password1" class="form-control" required="required" id="password1"><br>
            Адрес<br>
            <input type="text" name="address" class="form-control" required="required" id="address"><br>
            Информация<br>
            <textarea name="info" class="form-control" id="info"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea><br>
            Телефон<br>
            <input type="text" name="phone" class="form-control" id="phone"><br>
            Фото<br>
            <input type="file" name="photo" id="photo" value="Загрузить фото"><br>
            <input type="submit" name="send" class="btn btn-primary pull-right" id="send" value="Отправить"><br>
        </form>
    </div>
</div><?php }
}
