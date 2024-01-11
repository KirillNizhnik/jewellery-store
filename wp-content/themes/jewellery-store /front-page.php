<?php
get_header(); ?>

    <section class="hero">
        <div class="container">
			<?php
			$hero_title          = get_field( 'hero_title' );
			$hero_subtitle       = get_field( 'hero_subtitle' );
			$hero_text           = get_field( 'hero_text' );
			$hero_shop_now_link  = get_field( 'hero_shop_now_link' );
			$hero_view_more_link = get_field( 'hero_view_more_link' )
			?>
            <div class="hero__content">
                <h2 class="hero__subtitle-text">
					<?= $hero_subtitle ?>
                </h2>
                <h1 class="hero__title title">
					<?= $hero_title ?>
                </h1>
                <p class="hero__text">
					<?= $hero_text ?>
                </p>
                <div class="hero__link">
                    <a href="<?= $hero_shop_now_link ?>" class="hero__shop_now-link  hero__any-link link">SHOP NOW</a>
                    <a href="<?= $hero_view_more_link ?>" class="hero__view-more-link hero__any-link link">VIEW MORE</a>
                </div>
            </div>
        </div>
    </section>
<?php
$is_it_included = get_field( 'detail_section' );
if ( $is_it_included ):
	?>
    <section id="view-more" class="jewellery-store-detail">
		<?php
		$detail_subtitle       = get_field( 'detail-subtitle' );
		$detail_title_part_1   = get_field( 'detail_title_part_1' );
		$detail_title_part_2   = get_field( 'detail_title_part_2' );
		$detail_text           = get_field( 'detail_text' );
		$detail_image          = get_field( 'detail-store-img' );
		$detail_shop_now_link  = get_field( 'detail_shop_now_link' );
		$detail_view_more_link = get_field( 'detail_view_more_link' );

		?>
        <div class="container">
            <div class="jewellery-store-detail__inner">
                <img src="<?= $detail_image['url'] ?>" alt="<?= $detail_image['alt'] ?>"
                     class="jewellery-store-detail__inner-img">
                <div class="jewellery-store-detail__inner-info">
                    <h2 class="detail__subtitle"><?= $detail_subtitle ?></h2>
                    <h2 class="detail__title-part-1"><?= $detail_title_part_1 ?></h2>
                    <h2 class="detail__title-part-2"><?= $detail_title_part_2 ?></h2>
                    <p class="detail__text"><?= $detail_text ?></p>
                    <div class="detail__link">
                        <a href="<?= $detail_shop_now_link ?>" class="detail__link-shop-now link">SHOP NOW</a>
                        <a href="<?= $detail_view_more_link ?>" class="detail__link-view-more link">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <section id="featured-products" class="featured-products">
        <div class="container">
            <div class="featured-products__inner">
                <h2 class="featured-products_subtitle">
                    <?= get_field('featured_products_title') ?>


                </h2>
                <h2 class="featured-products_title">
                    <?= get_field('featured_products_title_1') ?>
                    </h2>
                <p class="featured-products_text">
                    <?= get_field('featured_products_text') ?>
                </p>
                <ul class="featured_products-categories">
                    <li class="featured_product-category">
                        <div class="category_img-and-text">
                            <?php
                             $featured_products_cat_img_1 = get_field('featured_products_cat_img_1');
                             $featured_products_category_1 = get_field('featured_products_category_1');
                             $featured_products_select_color_text_1 = get_field('featured_products_select_color_text_1');
                             $featured_products_cat_title_1 = get_field('featured_products_cat_title_1');

                            ?>
                            <a href="<?= get_category_link($featured_products_category_1) ?>" class="category_img-and-text-link">
                                <img src="<?= $featured_products_cat_img_1['url']  ?>" alt="<?= $featured_products_cat_img_1['alt'] ?>"
                                     class="category-img ">
                                <p class="featured_product-category-text" style="color: <?= $featured_products_select_color_text_1 ?>" ><?= get_field('featured_products_cat_title_1') ?></p>
                                <p class="featured_product-category-text-1" <?php if($featured_products_select_color_text_1 !== 'black'): ?>
                                   style="color: <?= $featured_products_select_color_text_1 ?>"
                                   <?php endif; ?>>
                                    <?= get_field('featured_products_cat_text_1') ?></p>
                                <p class="featured_product-category-text-2" style="color: <?= $featured_products_select_color_text_1 ?>">SHOP NOW</p>
                            </a>
                        </div>
                        <div class="featured_product__category-products">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-left.svg" alt="left-btn"
                                 class="category-left-btn left-btn-1">
                            <div class="category-container slider-feature-product-1 swiper">
                                <ul class="category-products-list swiper-wrapper">
                                    <?php
                                    $featured_products_category_1 = get_field('featured_products_category_1');
                                    $featured_products_category_int_1 = get_field('featured_products_category_int_1');
                                    $category = get_term_by('id', $featured_products_category_1, 'product_cat');

                                    $args = array(
	                                    'post_type' => 'product',
	                                    'posts_per_page' => $featured_products_category_int_1,
	                                    'tax_query' => array(
		                                    array(
			                                    'taxonomy' => 'product_cat',
			                                    'field' => 'term_id',
			                                    'terms' => $featured_products_category_1,
			                                    'operator' => 'IN',
		                                    ),
	                                    ),
	                                    'orderby' => 'date',
	                                    'order' => 'DESC',
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) :
	                                    while ($query->have_posts()) : $query->the_post();
		                                    $product           = wc_get_product();
		                                    $price             = $product->get_price();
		                                    $currency_symbol   = get_woocommerce_currency_symbol();
		                                    $product_image_id  = get_post_thumbnail_id();
		                                    $product_image_url = wp_get_attachment_image_src( $product_image_id, 'full' )[0];
		                                    $product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
		                                    ?>
                                            <li class="category-products-item swiper-slide">
                                                <div class="product-item-img-block">
                                                    <img src="<?= $product_image_url ?>" alt="<?= $product_image_alt ?>"
                                                         class="product-item-img">
                                                    <div class="product-item-img-buy-product">
                                                        <svg data-product="<?= $product->get_id()?>" class="product-item-img-add-to-cart add-to-cart" width="24" height="24" viewBox="0 0 16 16" fill="" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="" d="M15.0869 8.61436L15.9905 3.65906C16.0062 3.57396 16.0024 3.48638 15.9793 3.40296C15.9562 3.31955 15.9144 3.24248 15.8571 3.17761C15.8024 3.11063 15.7335 3.05663 15.6554 3.01949C15.5772 2.98234 15.4919 2.96298 15.4054 2.96281H3.4588L3.09588 0.970319C3.04575 0.698292 2.90206 0.452371 2.68969 0.275159C2.47732 0.0979457 2.20966 0.000605077 1.93308 0H0.592514C0.435369 0 0.284661 0.0624303 0.173543 0.173557C0.0624253 0.284684 0 0.435404 0 0.592561C0 0.749718 0.0624253 0.900438 0.173543 1.01157C0.284661 1.12269 0.435369 1.18512 0.592514 1.18512H1.93308L3.96243 12.3697C3.6731 12.6246 3.46054 12.9551 3.34863 13.3241C3.23672 13.6931 3.22989 14.086 3.32891 14.4587C3.42794 14.8313 3.62889 15.169 3.90919 15.4338C4.1895 15.6986 4.53807 15.8799 4.91576 15.9576C5.29344 16.0352 5.68528 16.0059 6.04727 15.8732C6.40926 15.7404 6.72707 15.5093 6.96501 15.2059C7.20294 14.9024 7.35158 14.5387 7.39423 14.1554C7.43688 13.7722 7.37185 13.3847 7.20645 13.0363H11.1615C10.9689 13.4424 10.9134 13.9 11.0033 14.3403C11.0933 14.7805 11.3237 15.1797 11.6601 15.4777C11.9965 15.7757 12.4205 15.9563 12.8684 15.9924C13.3163 16.0286 13.7638 15.9182 14.1436 15.678C14.5234 15.4378 14.8149 15.0808 14.9742 14.6606C15.1335 14.2404 15.1521 13.7798 15.0271 13.3482C14.9021 12.9166 14.6403 12.5372 14.281 12.2672C13.9218 11.9972 13.4846 11.8512 13.0353 11.8512H5.0734L4.74751 10.0735H13.339C13.755 10.0733 14.1578 9.92719 14.4772 9.66056C14.7966 9.39393 15.0123 9.0237 15.0869 8.61436ZM6.22139 13.9252C6.22139 14.101 6.16927 14.2728 6.07161 14.419C5.97395 14.5652 5.83514 14.6791 5.67274 14.7464C5.51034 14.8136 5.33164 14.8312 5.15923 14.7969C4.98683 14.7627 4.82846 14.678 4.70417 14.5537C4.57987 14.4294 4.49522 14.271 4.46093 14.0986C4.42664 13.9262 4.44424 13.7475 4.5115 13.585C4.57877 13.4226 4.69269 13.2838 4.83885 13.1861C4.985 13.0885 5.15684 13.0363 5.33262 13.0363C5.56834 13.0363 5.7944 13.13 5.96108 13.2967C6.12775 13.4634 6.22139 13.6894 6.22139 13.9252ZM13.9241 13.9252C13.9241 14.101 13.8719 14.2728 13.7743 14.419C13.6766 14.5652 13.5378 14.6791 13.3754 14.7464C13.213 14.8136 13.0343 14.8312 12.8619 14.7969C12.6895 14.7627 12.5311 14.678 12.4068 14.5537C12.2825 14.4294 12.1979 14.271 12.1636 14.0986C12.1293 13.9262 12.1469 13.7475 12.2142 13.585C12.2814 13.4226 12.3954 13.2838 12.5415 13.1861C12.6877 13.0885 12.8595 13.0363 13.0353 13.0363C13.271 13.0363 13.4971 13.13 13.6638 13.2967C13.8304 13.4634 13.9241 13.6894 13.9241 13.9252ZM3.67358 4.14793H14.6943L13.9241 8.39955C13.8997 8.53687 13.8276 8.66118 13.7206 8.7506C13.6136 8.84002 13.4784 8.88882 13.339 8.88842H4.53273L3.67358 4.14793Z" />
                                                        </svg>
                                                        <a href="<?= get_permalink($product->get_id()) ?>" class="product-item-img-open-cart-link">
                                                            <svg class="product-item-img-open-cart-link-img"  width="24"  height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                                <path id="#search" fill=""  d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-item-title"><?= $product->get_title() ?></span>
                                                <span class="product-item-category"><?= $category->name ?></span>
                                                <span class="product-item-price"><?= $currency_symbol . $price ?></span>
                                            </li>
                                        <?php
	                                    endwhile;
	                                    wp_reset_postdata();
                                    else :
                                    endif;
                                    ?>
                                </ul>
                            </div>
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-right.svg"
                                 alt="right-btn" class="category-right-btn right-btn-1">
                        </div>
                    </li>
                    <li class="featured_product-category">
                        <div class="category_img-and-text">
		                    <?php
		                    $featured_products_cat_img_2 = get_field('featured_products_cat_img_2');
		                    $featured_products_category_2 = get_field('featured_products_category_2');
		                    $featured_products_select_color_text_2 = get_field('featured_products_select_color_text_2');
		                    $featured_products_cat_title_2 = get_field('featured_products_cat_title_2');

		                    ?>
                            <a href="<?= get_category_link($featured_products_category_2) ?>" class="category_img-and-text-link">
                                <img src="<?= $featured_products_cat_img_2['url']  ?>" alt="<?= $featured_products_cat_img_2['alt'] ?>"
                                     class="category-img ">
                                <p class="featured_product-category-text" style="color: <?= $featured_products_select_color_text_2 ?>" ><?= get_field('featured_products_cat_title_2') ?></p>
                                <p class="featured_product-category-text-1" <?php if($featured_products_select_color_text_2 !== 'black'): ?>
                                    style="color: <?= $featured_products_select_color_text_2 ?>"
			                    <?php endif; ?>>
				                    <?= get_field('featured_products_cat_text_1') ?></p>
                                <p class="featured_product-category-text-2" style="color: <?= $featured_products_select_color_text_2 ?>">SHOP NOW</p>
                            </a>
                        </div>
                        <div class="featured_product__category-products">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-left.svg" alt="left-btn"
                                 class="category-left-btn left-btn-2">

                            <div class="category-container slider-feature-product-2 swiper">
                                <ul class="category-products-list swiper-wrapper">
	                                <?php
	                                $featured_products_category_2 = get_field('featured_products_category_2');
	                                $featured_products_category_int_2 = get_field('featured_products_category_int_2');
	                                $category = get_term_by('id', $featured_products_category_2, 'product_cat');
	                                $args = array(
		                                'post_type' => 'product',
		                                'posts_per_page' => $featured_products_category_int_2,
		                                'tax_query' => array(
			                                array(
				                                'taxonomy' => 'product_cat',
				                                'field' => 'term_id',
				                                'terms' => $featured_products_category_2,
				                                'operator' => 'IN',
			                                ),
		                                ),
		                                'orderby' => 'date',
		                                'order' => 'DESC',
	                                );
	                                $query = new WP_Query($args);
	                                if ($query->have_posts()) :
		                                while ($query->have_posts()) : $query->the_post();
			                                $product           = wc_get_product();
			                                $price             = $product->get_price();
			                                $currency_symbol   = get_woocommerce_currency_symbol();
			                                $product_image_id  = get_post_thumbnail_id();
			                                $product_image_url = wp_get_attachment_image_src( $product_image_id, 'full' )[0];
			                                $product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
			                                ?>
                                            <li class="category-products-item swiper-slide">
                                                <div class="product-item-img-block">
                                                    <img src="<?= $product_image_url ?>" alt="<?= $product_image_alt ?>"
                                                         class="product-item-img">
                                                    <div class="product-item-img-buy-product">
                                                        <svg  data-product="<?= $product->get_id()?>" class="product-item-img-add-to-cart add-to-cart" width="24" height="24" viewBox="0 0 16 16" fill="" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="" d="M15.0869 8.61436L15.9905 3.65906C16.0062 3.57396 16.0024 3.48638 15.9793 3.40296C15.9562 3.31955 15.9144 3.24248 15.8571 3.17761C15.8024 3.11063 15.7335 3.05663 15.6554 3.01949C15.5772 2.98234 15.4919 2.96298 15.4054 2.96281H3.4588L3.09588 0.970319C3.04575 0.698292 2.90206 0.452371 2.68969 0.275159C2.47732 0.0979457 2.20966 0.000605077 1.93308 0H0.592514C0.435369 0 0.284661 0.0624303 0.173543 0.173557C0.0624253 0.284684 0 0.435404 0 0.592561C0 0.749718 0.0624253 0.900438 0.173543 1.01157C0.284661 1.12269 0.435369 1.18512 0.592514 1.18512H1.93308L3.96243 12.3697C3.6731 12.6246 3.46054 12.9551 3.34863 13.3241C3.23672 13.6931 3.22989 14.086 3.32891 14.4587C3.42794 14.8313 3.62889 15.169 3.90919 15.4338C4.1895 15.6986 4.53807 15.8799 4.91576 15.9576C5.29344 16.0352 5.68528 16.0059 6.04727 15.8732C6.40926 15.7404 6.72707 15.5093 6.96501 15.2059C7.20294 14.9024 7.35158 14.5387 7.39423 14.1554C7.43688 13.7722 7.37185 13.3847 7.20645 13.0363H11.1615C10.9689 13.4424 10.9134 13.9 11.0033 14.3403C11.0933 14.7805 11.3237 15.1797 11.6601 15.4777C11.9965 15.7757 12.4205 15.9563 12.8684 15.9924C13.3163 16.0286 13.7638 15.9182 14.1436 15.678C14.5234 15.4378 14.8149 15.0808 14.9742 14.6606C15.1335 14.2404 15.1521 13.7798 15.0271 13.3482C14.9021 12.9166 14.6403 12.5372 14.281 12.2672C13.9218 11.9972 13.4846 11.8512 13.0353 11.8512H5.0734L4.74751 10.0735H13.339C13.755 10.0733 14.1578 9.92719 14.4772 9.66056C14.7966 9.39393 15.0123 9.0237 15.0869 8.61436ZM6.22139 13.9252C6.22139 14.101 6.16927 14.2728 6.07161 14.419C5.97395 14.5652 5.83514 14.6791 5.67274 14.7464C5.51034 14.8136 5.33164 14.8312 5.15923 14.7969C4.98683 14.7627 4.82846 14.678 4.70417 14.5537C4.57987 14.4294 4.49522 14.271 4.46093 14.0986C4.42664 13.9262 4.44424 13.7475 4.5115 13.585C4.57877 13.4226 4.69269 13.2838 4.83885 13.1861C4.985 13.0885 5.15684 13.0363 5.33262 13.0363C5.56834 13.0363 5.7944 13.13 5.96108 13.2967C6.12775 13.4634 6.22139 13.6894 6.22139 13.9252ZM13.9241 13.9252C13.9241 14.101 13.8719 14.2728 13.7743 14.419C13.6766 14.5652 13.5378 14.6791 13.3754 14.7464C13.213 14.8136 13.0343 14.8312 12.8619 14.7969C12.6895 14.7627 12.5311 14.678 12.4068 14.5537C12.2825 14.4294 12.1979 14.271 12.1636 14.0986C12.1293 13.9262 12.1469 13.7475 12.2142 13.585C12.2814 13.4226 12.3954 13.2838 12.5415 13.1861C12.6877 13.0885 12.8595 13.0363 13.0353 13.0363C13.271 13.0363 13.4971 13.13 13.6638 13.2967C13.8304 13.4634 13.9241 13.6894 13.9241 13.9252ZM3.67358 4.14793H14.6943L13.9241 8.39955C13.8997 8.53687 13.8276 8.66118 13.7206 8.7506C13.6136 8.84002 13.4784 8.88882 13.339 8.88842H4.53273L3.67358 4.14793Z" />
                                                        </svg>
                                                        <a href="<?= get_permalink($product->get_id()) ?>" class="product-item-img-open-cart-link">
                                                            <svg class="product-item-img-open-cart-link-img"  width="24"  height="24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                                <path id="#search" fill=""  d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-item-title"><?= $product->get_title() ?></span>
                                                <span class="product-item-category"><?= $category->name ?></span>
                                                <span class="product-item-price"><?= $currency_symbol . $price ?></span>
                                            </li>
		                                <?php
		                                endwhile;
		                                wp_reset_postdata();
	                                else :
	                                endif;
	                                ?>
                                </ul>
                            </div>
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-right.svg"
                                 alt="right-btn" class="category-right-btn right-btn-2">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php $special_offer_onoff = get_field( 'special_offer_onoff' );
if ( $special_offer_onoff ) : ?>
    <section class="special-offer">
		<?php
		$special_offer_title          = get_field( 'special_offer_title' );
		$special_offer_subtitle       = get_field( 'special_offer_subtitle' );
		$special_offer_subtitle_2     = get_field( 'special_offer_subtitle_2' );
		$special_offer_check_now_link = get_field( 'special_offer_check_now_link' );
		$special_offer_preview_video  = get_field( 'special_offer_preview_video' );
		$special_offer_video          = get_field( 'special_offer_video' );
		?>
        <div class="container">
            <div class="special-offer__inner">
                <div class="special-offer-video">
                    <img src="<?= $special_offer_preview_video['url'] ?>"
                         alt="<?= $special_offer_preview_video['alt'] ?>" class="special-offer-video">
                    <img id="openModalBtn" src="<?= bloginfo( 'template_url' ); ?>/assets/images/play.svg"
                         alt="play-btn" class="special-offer-video-play">
                </div>
                <div class="special-offer-text">
                    <h2 class="special-offer-title"><?= $special_offer_title ?></h2>
                    <h2 class="special-offer-name"><?= $special_offer_subtitle ?></h2>
                    <h3 class="special-offer-name-1"><?= $special_offer_subtitle_2 ?></h3>
                    <div class="special-offer-link">
                        <a href="<?= $special_offer_check_now_link ?>"
                           class="special-offer-check-now-link link grey-link">Check Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <video width="100%" height="auto" style="max-width: 100%;" controls>
                <source src="<?= $special_offer_video['url'] ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
<?php endif; ?>

<?php $discount_onoff_section = get_field( 'discount_onoff_section' );
if ( $discount_onoff_section ) :?>
    <section class="discount">
		<?php
		$discount_pre_title       = get_field( 'discount-pre-title' );
		$discount_amount          = get_field( 'discount_amount' );
		$discount_subtitle        = get_field( 'discount_subtitle' );
		$discount_text            = get_field( 'discount text' );
		$discount_diamond_text_1  = get_field( 'discount_diamond_text_1' );
		$discount_diamond_text_2  = get_field( 'discount_diamond_text_2' );
		$discount_diamond_text_3  = get_field( 'discount_diamond_text_3' );
		$discount_diamond_text_4  = get_field( 'discount_diamond_text_4' );
		$discount_image           = get_field( 'discount_image' );
		$discount_go_to_shop_link = get_field( 'discount_go_to_shop_link' );
		$discount_view_more_link  = get_field( 'discount_view_more_link' );
		?>
        <div class="container">
            <div class="discount__inner">
                <div class="discount-column-1">
                    <h2 class="discount-title-part-1"><?= $discount_pre_title ?><span
                                class="discount-title-num"> <?= $discount_amount ?></span></h2>
                    <h2 class="discount-title-part-2"><?= $discount_subtitle ?></h2>
                    <p class="discount-text"><?= $discount_text ?>
                    </p>
                    <ul class="discount-text-list">
                        <li class="discount-text-item">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/diamonds.svg" alt=""
                                 class="discount-icon">
                            <p class="discount-text"><?= $discount_diamond_text_1 ?></p>
                        </li>
                        <li class="discount-text-item">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/diamonds.svg" alt=""
                                 class="discount-icon">
                            <p class="discount-text"><?= $discount_diamond_text_2 ?></p>
                        </li>
                        <li class="discount-text-item">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/diamonds.svg" alt=""
                                 class="discount-icon">
                            <p class="discount-text"><?= $discount_diamond_text_3 ?></p>
                        </li>
                        <li class="discount-text-item">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/diamonds.svg" alt=""
                                 class="discount-icon">
                            <p class="discount-text"><?= $discount_diamond_text_4 ?></p>
                        </li>
                    </ul>
                    <div class="discount-any-link">
                        <a href="<?= $discount_go_to_shop_link ?>" class="discount-text-link-go-to-shop link grey-link">
                            GO TO SHOP
                        </a>
                        <a href="<?= $discount_view_more_link ?>" class="discount-text-link-view-more link">
                            VIEW MORE
                        </a>
                    </div>
                </div>
                <div class="discount-column-2">
                    <img src="<?= $discount_image['url'] ?>" alt="<?= $discount_image['alt'] ?>" class="discount-img">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <section class="jewellery-store-any-product">
        <div class="container">
            <div class="jewellery-store-any-product__inner">
				<?php $categories_for_special = get_field( 'categories_for_special' );
				$term_id                      = $categories_for_special->term_id;
                $specaial_offer_left_background_image = get_field('specaial_offer_left_background_image');
                $specaial_offer_text_title = get_field('specaial_offer_text_title');
                $specaial_offer_descr_text = get_field('specaial_offer_descr_text');
                $specaial_offer_link = get_field('specaial_offer_link');

                ?>
                <div style="background-image: url('<?= $specaial_offer_left_background_image['url'] ?>');"
                     class="jewellery-store-any-product__special-offer">
                    <div class="jewellery-store-any-product-special-offer-text">
                        <h2 class="jewellery-store-any-product-subtitle">Special offer</h2>
                        <h2 class="jewellery-store-any-product-title"><?= $specaial_offer_text_title?></h2>
                        <p class="jewellery-store-any-product-info"><?= $specaial_offer_descr_text ?></p>
                        <a href="<?= $specaial_offer_link ?>" class="jewellery-store-any-product-link link grey-link">VIEW MORE</a>
                    </div>
                </div>
                <div class="jewellery-store-any-product-featured-products jewellery-store-any-products ">
                    <h3 class="jewellery-store-any-products-title">FEATURED PRODUCTS</h3>

                    <ul class="jewellery-store-any-products-list">
						<?php
						$args = array(
							'posts_per_page' => -1,
							'post_type'      => 'product',
							'post_status'    => 'publish',
							'tax_query'      => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'product_visibility',
									'field'    => 'name',
									'terms'    => 'featured',
									'operator' => 'IN',
								),
								array(
									'taxonomy' => 'product_cat',
									'field'    => 'id',
									'terms'    => $term_id,
									'operator' => 'IN',
								),
							),
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post();

								$product           = wc_get_product();
								$price             = $product->get_price();
								$currency_symbol   = get_woocommerce_currency_symbol();
								$product_image_id  = get_post_thumbnail_id();
								$product_image_url = wp_get_attachment_image_src( $product_image_id, 'full' )[0];
								$product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
                                ?>
                                <li class="jewellery-store-any-products-item">
                                    <a href="<?php the_permalink(); ?>" class="jewellery-store-any-products-item-link">
                                        <img src="<?= $product_image_url ?>" alt="<?= $product_image_alt ?>"
                                             class="jewellery-store-any-products-item-img">
                                        <div class="jewellery-store-any-products-item__inner">
                                            <h3 class="jewellery-store-any-products-item-title"><?php the_title() ?></h3>
                                            <span class="jewellery-store-any-products-item-price"><?= $currency_symbol . $price ?></span>
                                        </div>
                                    </a>
                                </li>
							<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>

                    </ul>
                </div>
                <div class="jewellery-store-any-product-new-products jewellery-store-any-products">
                    <h3 class="jewellery-store-any-products-title">NEW PRODUCTS</h3>
                    <ul class="jewellery-store-any-products-list">
						<?php $args = array(
							'post_type'      => 'product',
							'posts_per_page' => 3,
							'orderby'        => 'date',
							'order'          => 'DESC',
							'tax_query'      => array(
								array(
									'taxonomy' => 'product_cat',
									'field'    => 'term_id',
									'terms'    => $term_id,
								),
							),
						);
						$query      = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post();
								$product           = wc_get_product();
								$price             = $product->get_price();
								$currency_symbol   = get_woocommerce_currency_symbol();
								$product_image_id  = get_post_thumbnail_id();
								$product_image_url = wp_get_attachment_image_src( $product_image_id, 'full' )[0];
								$product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
								?>
                                <li class="jewellery-store-any-products-item">
                                    <a href="<?php the_permalink(); ?>" class="jewellery-store-any-products-item-link">
                                        <img src="<?= $product_image_url ?>" alt="<?= $product_image_alt ?>"
                                             class="jewellery-store-any-products-item-img">
                                        <div class="jewellery-store-any-products-item__inner">
                                            <h3 class="jewellery-store-any-products-item-title"><?php the_title() ?></h3>
                                            <span class="jewellery-store-any-products-item-price"><?= $currency_symbol . $price ?></span>
                                        </div>
                                    </a>
                                </li>
							<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php $design_blog_onoff = get_field( 'design_blog_onoff' );
if ( $design_blog_onoff ):?>
    <section class="design-blog">
		<?php $posts_for_blog_slider = get_field( 'posts_for_blog_slider' );
		$design_blog_subtitle        = get_field( 'design_blog_subtitle' );
		$design_blog_title           = get_field( 'design_blog_title' );
		$design_blog_text            = get_field( 'design_blog_text' );

		?>
        <div class="container">
            <div class="design-blog__inner">
                <div class="design-blog-subtitle">
					<?= $design_blog_subtitle ?>
                </div>
                <div class="design-blog-title">
					<?= $design_blog_title ?>
                </div>
                <div class="design-blog-text">
					<?= $design_blog_text ?>
                </div>
                <div class="design-blog-slider">
                    <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-left.svg" alt=""
                         class="design-blog-left-btn design-blog-btn">
                    <div class="design-blog-container swiper">
                        <ul class="design-blog-list swiper-wrapper">
							<?php
							foreach ( $posts_for_blog_slider as $post ) :
								$post_id = $post->ID;
								$post_title = $post->post_title;
								$post_excerpt = $post->post_excerpt;
								$post_date = get_the_date( 'Y-m-d', $post_id );
								$day = date_i18n( 'd', strtotime( $post_date ) );
								$month = date_i18n( 'M', strtotime( $post_date ) );
								$terms = wp_get_object_terms( $post_id, 'jewelry_category' );
								$author_id = get_post_field( 'post_author', $post_id );
								$author_name = get_the_author_meta( 'display_name', $author_id );
								$author_avatar = get_avatar_url( $author_id, 32 );
								$small_avatar_url = add_query_arg( 's', 30, $author_avatar );
								$image_id = get_post_thumbnail_id( $post_id );
								$image_url = wp_get_attachment_image_src( $image_id, 'full' );
								if ( $image_url ) {
									$image_url = $image_url[0];
								}
								$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

								?>
                                <li class="design-blog-item swiper-slide">
                                    <a href="<?= get_permalink( $post_id ) ?>" class="design-blog-item-link">
                                        <div class="design-blog-item-block-img">
                                            <img src="<?php
											if ( $image_url ) {
												echo $image_url;
											} else {
												echo bloginfo( 'template_url' ) . '/assets/images/blank.png';
											}
											?>" alt="<?php
											if ( $image_alt ) {
												echo $image_alt;
											} else {
												echo 'not-found-alt';
											}
											?>" class="design-blog-img">
                                            <div class="design-blog-post-date-and-num">
                                                <span class="design-blog-post-date"><?= $day ?></span>
                                                <span class="design-blog-post-month"><?= $month ?></span>
                                            </div>
											<?php if ( $terms ) : ?>
                                                <div class="design-blog-post-categories"><?= $terms[0]->name ?></div>
											<?php endif; ?>
                                        </div>
                                        <h3 class="design-blog-post-title">
											<?= $post_title ?>
                                        </h3>
                                        <div class="design-blog-posted-by">
                                    <span class="design-blog-posted-by-text">
                                        Posted by
                                    </span>
                                            <img src="<?= $small_avatar_url ?>" alt=""
                                                 class="design-blog-posted-by-img">
                                            <span class="design-blog-posted-by-name">
                                        <?= $author_name ?>
                                    </span>
                                        </div>
                                        <p class="design-blog-post-excerpt">
											<?= $post_excerpt ?>
                                        </p>
                                        <span class="design-blog-continue-reading">Continue reading</span>
                                    </a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                    <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-right.svg" alt=""
                         class="design-blog-right-btn design-blog-btn">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php
get_footer();