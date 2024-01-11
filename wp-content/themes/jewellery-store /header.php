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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Marcellus&display=swap"
          rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body class="body">
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="<?= get_home_url() ?>" class="header__home-link">
                <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/logo.svg" alt="Logo">
            </a>
            <ul class="header__nav-menu">
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">HOME</a>
                    <img class="header__menu-item-chevron"
                         src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">SHOP</a>
                    <img class="header__menu-item-chevron"
                         src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">BLOG</a>
                    <img class="header__menu-item-chevron"
                         src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">PAGES</a>
                    <img class="header__menu-item-chevron"
                         src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">ELEMENTS</a>
                    <img class="header__menu-item-chevron"
                         src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
                <li class="header__nav-menu-item">
                    <a href="" class="header__menu-item-link">BUY</a>
                    <img class="header__menu-item-chevron"
                         src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron.svg" alt="chevron">
                </li>
            </ul>
            <div class="header__login-and-register">
                <a href="<?= get_home_url() ?>" class="header__login">LOGIN</a>
                /
                <a href="<?= get_home_url() ?>" class="header__register">REGISTER</a>
            </div>
            <div class="header__search">
                <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/search.svg" alt="search"
                     class="header__search-img">
            </div>
            <div class="header__cart">
                <svg class="header__cart-img"  width="24"  height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                    <path id="#search" fill=""  d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z" />
                </svg>
                <?php  $cart = WC()->cart;
                $total = $cart->get_total();

                ?>
                <p class="header__cart-subtotal"><?= $total ?></p>
            </div>
        </div>


    </div>
</header>

<div class="shopping_cart_closed">
    <div class="shopping-cart__inner">
        <span class="shopping-cart-title">Shopping cart</span>
        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt="close-cart" class="close-cart-img">
    </div>
    <div class="shopping-cart-inner-2">
        <ul class="shopping-cart-list">
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
            <li class="shopping-cart-item">
                <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/product-2.png" alt=""
                     class="shopping-cart-item-img">
                <div class="shopping-cart-content">
                    <div class="shopping-cart-name-and-remove">
                        <span class="shopping-cart-item-name">
                        Accumsan tincidunt
                    </span>
                        <img src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                             class="remove-product">
                    </div>
                    <div class="shopping-cart-quantity-block">
                        <span class="shopping-cart-minus-btn">-</span>
                        <span class="quantity">1</span>
                        <span class="shopping-cart-plus-btn">+</span>
                    </div>
                    <div class="shopping-cart-item-price">
                        <span class="shopping-cart-item-quantity">1</span>
                        <span class="shopping-cart-item-x">x</span>
                        <span class="shopping-cart-item-price-1">$199.0</span>
                    </div>

                </div>
            </li>
        </ul>
        <div class="shopping-cart-subtotal-container">
            <div class="shopping-cart-subtotal">
                <span class="shopping-cart-subtotal-text">Subtotal:</span>
                <span class="shopping-cart-subtotal-price">$398.00</span>
            </div>
            <div class="shopping-cart-free-shipping">
                <p class="shopping-cart-free-shipping-text">
                    Add <span class="shopping-cart-free-shipping-text-yellow">$1,102.00</span>
                    to cart and get <span class="shopping-cart-free-shipping-text-black">free shipping!</span>
                </p>
                <svg class="line-free-shipping" xmlns="http://www.w3.org/2000/svg" width="101" height="5" viewBox="0 0 101 5" fill="none">
                    <mask id="mask0_58_554" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="101" height="5">
                        <rect width="101" height="5" fill="#C3935B"/>
                    </mask>
                    <g mask="url(#mask0_58_554)">
                        <rect x="4.59424" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 4.59424 -12.5317)" fill="#BB874B"/>
                        <rect x="10.604" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 10.604 -12.5317)" fill="#BB874B"/>
                        <rect x="16.6138" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 16.6138 -12.5317)" fill="#BB874B"/>
                        <rect x="22.6235" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 22.6235 -12.5317)" fill="#BB874B"/>
                        <rect x="28.6333" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 28.6333 -12.5317)" fill="#BB874B"/>
                        <rect x="34.6436" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 34.6436 -12.5317)" fill="#BB874B"/>
                        <rect x="40.6533" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 40.6533 -12.5317)" fill="#BB874B"/>
                        <rect x="46.6631" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 46.6631 -12.5317)" fill="#BB874B"/>
                        <rect x="52.6729" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 52.6729 -12.5317)" fill="#BB874B"/>
                        <rect x="58.6826" y="-12.5317" width="3.43418" height="32.6248" transform="rotate(15 58.6826 -12.5317)" fill="#BB874B"/>
            </div>
            <a href="" class="shopping-cart-view-cart-link">VIEW CART</a>
            <a href="" class="shopping-cart-checkout-link">CHECKOUT</a>

        </div>

    </div>
</div>