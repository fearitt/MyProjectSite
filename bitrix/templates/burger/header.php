<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<!doctype html>
<html class="no-js" lang="ru">
<style>
/* Исправление белого текста в шапке */
.header-area, .main-header-area, .main-menu, 
#navigation, #navigation li, #navigation a,
#navigation .submenu, #navigation .submenu li, #navigation .submenu a {
    color: #333 !important;
}

/* Логотип и телефон */
.logo-img, .book_room, .socail_links, .book_btn a {
    color: #333 !important;
}

/* Иконки соцсетей в шапке */
.socail_links a i {
    color: #333 !important;
}

/* Активная ссылка в меню */
#navigation li a.active {
    color: #ff6b00 !important;
    font-weight: bold;
}

/* Подменю */
.submenu {
    background-color: #fff !important;
    border: 1px solid #ddd !important;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.submenu li a:hover {
    background-color: #f9f9f9 !important;
    color: #ff6b00 !important;
}

/* Серый фон для всех страниц */
body {
    background-color: #f5f5f5 !important;
}

/* Темный текст для всего тела */
body, p, h1, h2, h3, h4, h5, h6, div, span, li {
    color: #333 !important;
}
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Подключаем CSS напрямую -->
    <link rel="stylesheet" href="/bitrix/templates/burger/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/magnific-popup.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/themify-icons.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/nice-select.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/flaticon.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/animate.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/slicknav.css">
    <link rel="stylesheet" href="/bitrix/templates/burger/css/style.css">
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/index.php">home</a></li>
                                        <li><a href="/menu.php">Menu</a></li>
                                        <li><a href="/about.php">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/blog.php">blog</a></li>
                                                <li><a href="/single-blog.php">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/elements.php">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="/index.php">
                                    <img src="/bitrix/templates/burger/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a href="tel:+103674537382">+10 367 453 7382</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>