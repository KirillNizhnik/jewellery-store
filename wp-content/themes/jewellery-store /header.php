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
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

                ?>
                <img src="<?php  if($logo_url){
                    echo  $logo_url;} ?>" alt="Logo">

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
                <svg class="header__search-img" width="24" height="24" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z"/>
                </svg>
            </div>
            <div class="header__cart">
                <div class="header__cart-img-block">
                    <svg class="header__cart-img" width="16" height="16" viewBox="0 0 16 16" fill=""
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.0869 8.61436L15.9905 3.65906C16.0062 3.57396 16.0024 3.48638 15.9793 3.40296C15.9562 3.31955 15.9144 3.24248 15.8571 3.17761C15.8024 3.11063 15.7335 3.05663 15.6554 3.01949C15.5772 2.98234 15.4919 2.96298 15.4054 2.96281H3.4588L3.09588 0.970319C3.04575 0.698292 2.90206 0.452371 2.68969 0.275159C2.47732 0.0979457 2.20966 0.000605077 1.93308 0H0.592514C0.435369 0 0.284661 0.0624303 0.173543 0.173557C0.0624253 0.284684 0 0.435404 0 0.592561C0 0.749718 0.0624253 0.900438 0.173543 1.01157C0.284661 1.12269 0.435369 1.18512 0.592514 1.18512H1.93308L3.96243 12.3697C3.6731 12.6246 3.46054 12.9551 3.34863 13.3241C3.23672 13.6931 3.22989 14.086 3.32891 14.4587C3.42794 14.8313 3.62889 15.169 3.90919 15.4338C4.1895 15.6986 4.53807 15.8799 4.91576 15.9576C5.29344 16.0352 5.68528 16.0059 6.04727 15.8732C6.40926 15.7404 6.72707 15.5093 6.96501 15.2059C7.20294 14.9024 7.35158 14.5387 7.39423 14.1554C7.43688 13.7722 7.37185 13.3847 7.20645 13.0363H11.1615C10.9689 13.4424 10.9134 13.9 11.0033 14.3403C11.0933 14.7805 11.3237 15.1797 11.6601 15.4777C11.9965 15.7757 12.4205 15.9563 12.8684 15.9924C13.3163 16.0286 13.7638 15.9182 14.1436 15.678C14.5234 15.4378 14.8149 15.0808 14.9742 14.6606C15.1335 14.2404 15.1521 13.7798 15.0271 13.3482C14.9021 12.9166 14.6403 12.5372 14.281 12.2672C13.9218 11.9972 13.4846 11.8512 13.0353 11.8512H5.0734L4.74751 10.0735H13.339C13.755 10.0733 14.1578 9.92719 14.4772 9.66056C14.7966 9.39393 15.0123 9.0237 15.0869 8.61436ZM6.22139 13.9252C6.22139 14.101 6.16927 14.2728 6.07161 14.419C5.97395 14.5652 5.83514 14.6791 5.67274 14.7464C5.51034 14.8136 5.33164 14.8312 5.15923 14.7969C4.98683 14.7627 4.82846 14.678 4.70417 14.5537C4.57987 14.4294 4.49522 14.271 4.46093 14.0986C4.42664 13.9262 4.44424 13.7475 4.5115 13.585C4.57877 13.4226 4.69269 13.2838 4.83885 13.1861C4.985 13.0885 5.15684 13.0363 5.33262 13.0363C5.56834 13.0363 5.7944 13.13 5.96108 13.2967C6.12775 13.4634 6.22139 13.6894 6.22139 13.9252ZM13.9241 13.9252C13.9241 14.101 13.8719 14.2728 13.7743 14.419C13.6766 14.5652 13.5378 14.6791 13.3754 14.7464C13.213 14.8136 13.0343 14.8312 12.8619 14.7969C12.6895 14.7627 12.5311 14.678 12.4068 14.5537C12.2825 14.4294 12.1979 14.271 12.1636 14.0986C12.1293 13.9262 12.1469 13.7475 12.2142 13.585C12.2814 13.4226 12.3954 13.2838 12.5415 13.1861C12.6877 13.0885 12.8595 13.0363 13.0353 13.0363C13.271 13.0363 13.4971 13.13 13.6638 13.2967C13.8304 13.4634 13.9241 13.6894 13.9241 13.9252ZM3.67358 4.14793H14.6943L13.9241 8.39955C13.8997 8.53687 13.8276 8.66118 13.7206 8.7506C13.6136 8.84002 13.4784 8.88882 13.339 8.88842H4.53273L3.67358 4.14793Z"
                              fill="white"/>
                    </svg>
                    <span class="count-product-in-basket">
                    <?= $cart_items_count = WC()->cart->get_cart_contents_count();?>
                </span>
                </div>

				<?php $cart = WC()->cart;
				$total      = $cart->get_total('float');
				$symbol = get_woocommerce_currency_symbol()
				?>
                <p class="header__cart-subtotal"><?= $symbol . $total ?></p>
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
		<?php $cart_items = WC()->cart->get_cart();?>

            <ul class="shopping-cart-list">
				<?php
				if ( $cart_items ){
				foreach ( $cart_items as $item ):
					$product = wc_get_product($item['product_id']);
					$link = $product->get_permalink();
					$product_image_id  = get_post_thumbnail_id($item['product_id']);
					$product_image_url = wp_get_attachment_image_src( $product_image_id, 'full' )[0];
					$product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
					$quantity = $item['quantity'];
                    $price = $product->get_price();

					?>
                    <li class="shopping-cart-item">
                        <a href="<?= $link ?>" class="shopping-cart-link">
                            <img src="<?= $product_image_url  ?>" alt="<?= $product_image_alt?>"
                                 class="shopping-cart-item-img">
                        </a>
                        <div class="shopping-cart-content">
                            <div class="shopping-cart-name-and-remove">
                                <a href="<?= $link ?>" class="shopping-cart-link">
                        <span class="shopping-cart-item-name">
                        <?= $product->get_title()?>
                        </span>
                                </a>
                                <img data-product_id="<?= $item['product_id'] ?>" src="<?= bloginfo( 'template_url' ) ?>/assets/images/close.svg" alt=""
                                     class="remove-product">
                            </div>
                            <div class="shopping-cart-quantity-block">
                                <span class="shopping-cart-minus-btn">-</span>
                                <span class="quantity"><?= $quantity ?></span>
                                <span class="shopping-cart-plus-btn">+</span>
                            </div>
                            <div class="shopping-cart-item-price">
                                <span class="shopping-cart-item-quantity"><?= $quantity ?></span>
                                <span class="shopping-cart-item-x">x</span>
                                <span class="shopping-cart-item-price-1"><?= $symbol . $price ?></span>
                            </div>
                        </div>

                    </li>
				<?php endforeach; ?>


                <?php } else{ ?>
                        <li class="no-items-in-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                                <path opacity="0.1" d="M65.3515 34.1463L54.9554 23.9024L44.5594 34.1463L37.6287 27.3171L48.0247 17.0732L37.6287 6.82927L44.5594 0L54.9554 10.2439L65.3515 0L72.2822 6.82927L61.8861 17.0732L72.2822 27.3171L65.3515 34.1463ZM30.203 80.4878C35.6485 80.4878 40.104 84.8781 40.104 90.2439C40.104 95.6098 35.6485 100 30.203 100C24.7574 100 20.302 95.6098 20.302 90.2439C20.302 84.8781 24.7574 80.4878 30.203 80.4878ZM79.7079 80.4878C85.1535 80.4878 89.6089 84.8781 89.6089 90.2439C89.6089 95.6098 85.1535 100 79.7079 100C74.2624 100 69.8069 95.6098 69.8069 90.2439C69.8069 84.8781 74.2624 80.4878 79.7079 80.4878ZM31.1931 64.8781C31.1931 65.3659 31.6881 65.8537 32.1832 65.8537H89.6089V75.6098H30.203C24.7574 75.6098 20.302 71.2195 20.302 65.8537C20.302 63.9024 20.797 62.439 21.2921 60.9756L27.7277 49.2683L10.401 12.1951H0.5V2.43902H16.8366L38.1238 46.3415H72.7772L92.0842 12.1951L100.5 17.0732L81.1931 51.2195C79.7079 54.1463 76.2426 56.0976 72.7772 56.0976H35.6485L31.1931 63.9024V64.8781Z" fill="#777777"/>
                            </svg>
                            <p class="no-items-in-cart-text">No products in the cart.</p>
                            <a href="<?= wc_get_page_permalink('shop') ?>" class="no-items-in-cart-link">
                                RETURN TO SHOP
                            </a>
                        </li>

                <?php
                } ?>
            </ul>


        <div class="shopping-cart-subtotal-container <?php if (!$cart_items){
            echo 'cart-empty';} ?>">
            <div class="shopping-cart-subtotal">
                <span class="shopping-cart-subtotal-text">Subtotal:</span>
                <span class="shopping-cart-subtotal-price"><?= $total ?></span>
            </div>
            <div class="shopping-cart-free-shipping">
                <p class="shopping-cart-free-shipping-text">
                    Add <span class="shopping-cart-free-shipping-text-yellow">$1,102.00</span>
                    to cart and get <span class="shopping-cart-free-shipping-text-black">free shipping!</span>
                </p>
                <svg class="line-free-shipping" xmlns="http://www.w3.org/2000/svg" width="101" height="5"
                     viewBox="0 0 101 5" fill="none">
                    <mask id="mask0_58_554" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="101"
                          height="5">
                        <rect width="101" height="5" fill="#C3935B"/>
                    </mask>
                    <g mask="url(#mask0_58_554)">
                        <rect x="4.59424" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 4.59424 -12.5317)" fill="#BB874B"/>
                        <rect x="10.604" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 10.604 -12.5317)" fill="#BB874B"/>
                        <rect x="16.6138" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 16.6138 -12.5317)" fill="#BB874B"/>
                        <rect x="22.6235" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 22.6235 -12.5317)" fill="#BB874B"/>
                        <rect x="28.6333" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 28.6333 -12.5317)" fill="#BB874B"/>
                        <rect x="34.6436" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 34.6436 -12.5317)" fill="#BB874B"/>
                        <rect x="40.6533" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 40.6533 -12.5317)" fill="#BB874B"/>
                        <rect x="46.6631" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 46.6631 -12.5317)" fill="#BB874B"/>
                        <rect x="52.6729" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 52.6729 -12.5317)" fill="#BB874B"/>
                        <rect x="58.6826" y="-12.5317" width="3.43418" height="32.6248"
                              transform="rotate(15 58.6826 -12.5317)" fill="#BB874B"/>
            </div>
            <a href="<?= wc_get_cart_url() ?>" class="shopping-cart-view-cart-link">VIEW CART</a>
            <a href="<?= wc_get_checkout_url() ?>" class="shopping-cart-checkout-link">CHECKOUT</a>

        </div>

    </div>
</div>