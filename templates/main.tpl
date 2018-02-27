<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{$meta_keywords}">
    <meta name="description" content="{$meta_desc}">
    <meta name="author" content="">
    <title>{$meta_title}</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
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
                            {if !isset($sesId)}<li><a href="login.php"><i class="fa fa-lock"></i> Логин</a></li>{/if}
                            {if isset($sesId)}<li><a href="exit.php"><i class="fa fa-trophy"></i> Выход</a></li>{/if}
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
                            {section loop=$menu name=i}
                            <li><a href="{$menu[i].page}.php" {if $page==$menu[i].page}class="active"{/if}>{$menu[i].name}</a></li>
                            {/section}
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
{$slider}
<!--/slider-->

<section>
    <div class="container">
        <div class="row">
            {$sideList}
            {$content}
            {$featuredItems}
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



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="ajax/addBasket.js"></script>
<script src="formCheck.js"></script>
<!--<script src="js/jquery-3.2.1.js"></script>-->
<script src="js/main.js"></script>
</body>
</html>