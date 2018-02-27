<?php
/* Smarty version 3.1.30, created on 2018-02-26 16:54:05
  from "D:\openserver\OpenServer\domains\projectSale\templates\contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a94117d4d4b79_95692930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1446e11d72d5862710770c3599ebfa765cb5f7f0' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\templates\\contacts.tpl',
      1 => 1519653234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a94117d4d4b79_95692930 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <?php if (!isset($_smarty_tpl->tpl_vars['form']->value)) {?>
                    <h2 class="title text-center">Свяжитесь с нами</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Имя" <?php if (isset($_smarty_tpl->tpl_vars['cookFio']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['cookFio']->value;?>
" <?php }?>>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email" <?php if (isset($_smarty_tpl->tpl_vars['cookEmail']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['cookEmail']->value;?>
" <?php }?>>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Тема">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="send" class="btn btn-primary pull-right" value="Отправить">
                        </div>
                    </form>
                    <?php } else { ?>
                    <h2 class="title text-center"><?php echo $_smarty_tpl->tpl_vars['form']->value;?>
</h2>
                    <?php }?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Контакты</h2>
                    <address>
                        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                        <p>E-Shopper Inc.</p>
                        <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                        <p>Newyork USA</p>
                        <p>Mobile: +2346 17 38 93</p>
                        <p>Fax: 1-714-252-0026</p>
                        <p>Email: info@e-shopper.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
