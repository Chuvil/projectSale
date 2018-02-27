<?php
/* Smarty version 3.1.30, created on 2018-02-26 20:56:43
  from "D:\openserver\OpenServer\domains\projectSale\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a944a5bd471b2_40475298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4412a481cabd4fa7b30ebae7161fd36233a498ac' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\projectSale\\templates\\main.tpl',
      1 => 1519667802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a944a5bd471b2_40475298 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_desc']->value;?>
">
    <meta name="author" content="">
    <title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>  +7 916 933 17 30</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>  chuvilevpal@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="account.php"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a href="order.php"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                            <?php if (!isset($_smarty_tpl->tpl_vars['sesId']->value)) {?><li><a href="login.php"><i class="fa fa-lock"></i> Логин</a></li><?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sesId']->value)) {?><li><a href="exit.php"><i class="fa fa-trophy"></i> Выход</a></li><?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page'];?>
.php" <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page']) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li>
                            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div>
                        <form action="search.php" method="get">
                        <input type="text" placeholder="Имя модели для поиска" name="search" id="search">
                        <input type="submit" name="send" value="Поиск" class="search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<!--slider-->
<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

<!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <?php echo $_smarty_tpl->tpl_vars['sideList']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['featuredItems']->value;?>

        </div>
    </div>
</section>


<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Сервисы</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="help.php">Онлайн помощь</a></li>
                            <li><a href="contacts.php">Контакты</a></li>
                            <li><a href="#">Статус заказа</a></li>
                            <li><a href="#">Изменить место</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Пользование</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Условия использования</a></li>
                            <li><a href="#">Политика приватности</a></li>
                            <li><a href="#">Возврат товаров</a></li>
                            <li><a href="#">Оплата</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>О магазине</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Информация о компании</a></li>
                            <li><a href="#">Вакансии</a></li>
                            <li><a href="#">Адрес</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>Рассылка</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Ваш email адрес" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Получите наши последние обновления</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018 Чувилёв Александр Сергеевич</p>
                <p class="pull-right">Разработано <span><a target="_blank" href="https://vk.com/chuvilev">Чувилёв А.С.</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.scrollUp.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/price-range.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="ajax/addBasket.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="formCheck.js"><?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="js/jquery-3.2.1.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
