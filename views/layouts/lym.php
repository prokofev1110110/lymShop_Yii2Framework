<?php

use app\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
<!--    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>-->

    <?php $this->head() ?>
</head>
<body class="animsition">
<?php $this->beginBody() ?>


<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Бегущая строка???
                </div>

                <div class="right-top-bar flex-w h-full">

                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="<?= \yii\helpers\Url::home()?>" class="logo">
                    <h1 style="color: #0b0b0b">LYM</h1>
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="<?='home'?>">Главная</a>  <!--на сколько это уёбищно?-->
                        </li>

                        <li>
                            <a href="<?='shop'?>">Магазин</a>
                        </li>

                        <li>
                            <a href="<?='about'?>">О нас</a>
                        </li>

                        <li>
                            <a href="<?='contact'?>">Контакты</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">

                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="index.html">Главная</a>

                <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
            </li>

            <li>
                <a href="product.html">Магазин</a>
            </li>

            <li>
                <a href="about.html">О нас</a>
            </li>

            <li>
                <a href="contact.html">Контакты</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>


<?= $content ?>

<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
<!--            <div class="col-sm-6 col-lg-3 p-b-50">-->
<!--                <h4 class="stext-301 cl0 p-b-30">-->
<!--                    Categories-->
<!--                </h4>-->
<!---->
<!--                <ul>-->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Women-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Men-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Shoes-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Watches-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="col-sm-6 col-lg-3 p-b-50">-->
<!--                <h4 class="stext-301 cl0 p-b-30">-->
<!--                    Help-->
<!--                </h4>-->
<!---->
<!--                <ul>-->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Track Order-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Returns-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            Shipping-->
<!--                        </a>-->
<!--                    </li>-->
<!---->
<!--                    <li class="p-b-10">-->
<!--                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">-->
<!--                            FAQs-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->

            <div class="col-sm-6 col-lg-3 p-b-50">
<!--                <h4 class="stext-301 cl0 p-b-30">-->
<!--                    Соцсети-->
<!--                </h4>-->

<!--                <p class="stext-107 cl7 size-201">-->
<!--                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879-->
<!--                </p>-->

                <div class="p-t-27">
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </div>
            </div>

<!--            <div class="col-sm-6 col-lg-3 p-b-50">-->
<!--                <h4 class="stext-301 cl0 p-b-30">-->
<!--                    Newsletter-->
<!--                </h4>-->
<!---->
<!--                <form>-->
<!--                    <div class="wrap-input1 w-full p-b-4">-->
<!--                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">-->
<!--                        <div class="focus-input1 trans-04"></div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="p-t-18">-->
<!--                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">-->
<!--                            Subscribe-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
        </div>

        <div class="p-t-40">
<!--            <div class="flex-c-m flex-w p-b-18">-->
<!--                <a href="#" class="m-all-1">-->
<!--                    <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">-->
<!--                </a>-->
<!---->
<!--                <a href="#" class="m-all-1">-->
<!--                    <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">-->
<!--                </a>-->
<!---->
<!--                <a href="#" class="m-all-1">-->
<!--                    <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">-->
<!--                </a>-->
<!---->
<!--                <a href="#" class="m-all-1">-->
<!--                    <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">-->
<!--                </a>-->
<!---->
<!--                <a href="#" class="m-all-1">-->
<!--                    <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">-->
<!--                </a>-->
<!--            </div>-->

            <p class="stext-107 cl6 txt-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
        </div>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>