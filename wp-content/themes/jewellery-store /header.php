<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= the_title() ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Marcellus&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body class="body">
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="<?= get_home_url() ?>" class="header__home-link">
                <img src="<?=  bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Logo">
            </a>
            <ul class="header__nav-menu">
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">HOME</a>
                    <img class="header__menu-item-chevron" src="<?=  bloginfo('template_url'); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">SHOP</a>
                    <img class="header__menu-item-chevron" src="<?=  bloginfo('template_url'); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">BLOG</a>
                    <img class="header__menu-item-chevron" src="<?=  bloginfo('template_url'); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">PAGES</a>
                    <img class="header__menu-item-chevron" src="<?=  bloginfo('template_url'); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">ELEMENTS</a>
                    <img class="header__menu-item-chevron" src="<?=  bloginfo('template_url'); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">BUY</a>
                    <img class="header__menu-item-chevron" src="<?=  bloginfo('template_url'); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
            </ul>
            <div class="header__login-and-register">
                <a href="<?= get_home_url() ?>" class="header__login">LOGIN</a>
                /
                <a href="<?= get_home_url() ?>" class="header__register">REGISTER</a>
            </div>
            <div class="header__search">
                <img src="<?=  bloginfo('template_url'); ?>/assets/images/search.svg" alt="search" class="header__search-img">
            </div>
            <div class="header__cart">
                <img src="<?=  bloginfo('template_url'); ?>/assets/images/cart.svg" alt="cart" class="header__cart-img">
                <p class="header__cart-subtotal">$0.00</p>
            </div>
        </div>



        
    </div>
</header>

<div class="shopping_cart">
    <div class="shopping-cart__inner">
        <span class="shopping-cart-title">Shopping cart</span>

    </div>
</div>