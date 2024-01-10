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
                    Adipisicing elit
                </h2>
                <h2 class="featured-products_title">
                    FEATURED PRODUCTS
                </h2>
                <p class="featured-products_text">
                    There are many variations of passages of lorem ipsum available.
                </p>
                <ul class="featured_products-categories">
                    <li class="featured_product-category">
                        <div class="category_img-and-text">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/category-img-1.png" alt="photo"
                                 class="category-img ">
                        </div>
                        <div class="featured_product__category-products">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-left.svg" alt="left-btn"
                                 class="category-left-btn left-btn-1">
                            <div class="category-container slider-feature-product-1 swiper">
                                <ul class="category-products-list swiper-wrapper">
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet1</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-2.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet2</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet3</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                </ul>
                            </div>
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-right.svg"
                                 alt="right-btn" class="category-right-btn right-btn-1">
                        </div>
                    </li>
                    <li class="featured_product-category">
                        <div class="category_img-and-text">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/category-img-1.png" alt="photo"
                                 class="category-img">
                        </div>
                        <div class="featured_product__category-products">
                            <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/chevron-left.svg" alt="left-btn"
                                 class="category-left-btn left-btn-2">
                            <div class="category-container slider-feature-product-2 swiper">
                                <ul class="category-products-list swiper-wrapper">
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet1</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet2</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
                                    <li class="category-products-item swiper-slide">
                                        <img src="<?= bloginfo( 'template_url' ); ?>/assets/images/product-1.png" alt=""
                                             class="product-item-img">
                                        <span class="product-item-title">Curabitur sitamet3</span>
                                        <span class="product-item-category">Jewelry</span>
                                        <span class="product-item-price">$169.00</span>
                                    </li>
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
                        <a href="" class="discount-text-link-go-to-shop link grey-link">
                            GO TO SHOP
                        </a>
                        <a href="" class="discount-text-link-view-more link">
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
				$term_id                      = $categories_for_special->term_id ?>
                <div style="background-image: url('<?php bloginfo( 'template_url' ); ?>/assets/images/jewelry-banner-img.png');"
                     class="jewellery-store-any-product__special-offer">
                    <div class="jewellery-store-any-product-special-offer-text">
                        <h2 class="jewellery-store-any-product-subtitle">Special offer</h2>
                        <h2 class="jewellery-store-any-product-title">Mauris Rhoncus</h2>
                        <p class="jewellery-store-any-product-info">Curabitur non nullat amet.</p>
                        <a href="" class="jewellery-store-any-product-link link grey-link">VIEW MORE</a>
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
<!--                        <li class="jewellery-store-any-products-item">-->
<!--                            <a href="" class="jewellery-store-any-products-item-link">-->
<!--                                <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/product-1.png" alt=""-->
<!--                                     class="jewellery-store-any-products-item-img">-->
<!--                                <div class="jewellery-store-any-products-item__inner">-->
<!--                                    <h3 class="jewellery-store-any-products-item-title">Curabitur sitamet</h3>-->
<!--                                    <span class="jewellery-store-any-products-item-price">$169.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="jewellery-store-any-products-item">-->
<!--                            <a href="" class="jewellery-store-any-products-item-link">-->
<!--                                <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/product-1.png" alt=""-->
<!--                                     class="jewellery-store-any-products-item-img">-->
<!--                                <div class="jewellery-store-any-products-item__inner">-->
<!--                                    <h3 class="jewellery-store-any-products-item-title">Curabitur sitamet</h3>-->
<!--                                    <span class="jewellery-store-any-products-item-price">$169.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="jewellery-store-any-products-item">-->
<!--                            <a href="" class="jewellery-store-any-products-item-link">-->
<!--                                <img src="--><?php //= bloginfo( 'template_url' ); ?><!--/assets/images/product-1.png" alt=""-->
<!--                                     class="jewellery-store-any-products-item-img">-->
<!--                                <div class="jewellery-store-any-products-item__inner">-->
<!--                                    <h3 class="jewellery-store-any-products-item-title">Curabitur sitamet</h3>-->
<!--                                    <span class="jewellery-store-any-products-item-price">$169.00</span>-->
<!---->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </li>-->
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


                            <!--                            <li class="design-blog-item swiper-slide">-->
                            <!--                                <a href="" class="design-blog-item-link">-->
                            <!--                                    <div class="design-blog-item-block-img">-->
                            <!--                                        <img src="-->
							<?php //= bloginfo( 'template_url' );
							?><!--/assets/images/post-1.png" alt="" class="design-blog-img">-->
                            <!--                                        <div class="design-blog-post-date-and-num">-->
                            <!--                                            <span class="design-blog-post-date">23</span>-->
                            <!--                                            <span class="design-blog-post-month">JUL</span>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="design-blog-post-categories">Wooden accessories</div>-->
                            <!--                                    </div>-->
                            <!--                                    <h3 class="design-blog-post-title">-->
                            <!--                                        A flat-picked chair made of a seat and sticks-->
                            <!--                                    </h3>-->
                            <!--                                    <div class="design-blog-posted-by">-->
                            <!--                                    <span class="design-blog-posted-by-text">-->
                            <!--                                        Posted by-->
                            <!--                                    </span>-->
                            <!--                                        <img src="-->
							<?php //= bloginfo( 'template_url' );
							?><!--/assets/images/avatar.svg" alt="" class="design-blog-posted-by-img">-->
                            <!--                                        <span class="design-blog-posted-by-name">-->
                            <!--                                        S. Rogers-->
                            <!--                                    </span>-->
                            <!--                                    </div>-->
                            <!--                                    <p class="design-blog-post-excerpt">-->
                            <!--                                        Parturient in potenti id rutrum duis torquent parturient sceler isque sit vestibulum a posuere scelerisque viverra urna. Egestas tristique vestib...-->
                            <!--                                    </p>-->
                            <!--                                    <span class="design-blog-continue-reading">Continue reading</span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <!--                            <li class="design-blog-item swiper-slide">-->
                            <!--                                <a href="" class="design-blog-item-link">-->
                            <!--                                    <div class="design-blog-item-block-img">-->
                            <!--                                        <img src="-->
							<?php //= bloginfo( 'template_url' );
							?><!--/assets/images/post-1.png" alt="" class="design-blog-img">-->
                            <!--                                        <div class="design-blog-post-date-and-num">-->
                            <!--                                            <span class="design-blog-post-date">23</span>-->
                            <!--                                            <span class="design-blog-post-month">JUL</span>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="design-blog-post-categories">Wooden accessories</div>-->
                            <!--                                    </div>-->
                            <!--                                    <h3 class="design-blog-post-title">-->
                            <!--                                        A flat-picked chair made of a seat and sticks-->
                            <!--                                    </h3>-->
                            <!--                                    <div class="design-blog-posted-by">-->
                            <!--                                    <span class="design-blog-posted-by-text">-->
                            <!--                                        Posted by-->
                            <!--                                    </span>-->
                            <!--                                        <img src="-->
							<?php //= bloginfo( 'template_url' );
							?><!--/assets/images/avatar.svg" alt="" class="design-blog-posted-by-img">-->
                            <!--                                        <span class="design-blog-posted-by-name">-->
                            <!--                                        S. Rogers-->
                            <!--                                    </span>-->
                            <!--                                    </div>-->
                            <!--                                    <p class="design-blog-post-excerpt">-->
                            <!--                                        Parturient in potenti id rutrum duis torquent parturient sceler isque sit vestibulum a posuere scelerisque viverra urna. Egestas tristique vestib...-->
                            <!--                                    </p>-->
                            <!--                                    <span class="design-blog-continue-reading">Continue reading</span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <!--                            <li class="design-blog-item swiper-slide">-->
                            <!--                                <a href="" class="design-blog-item-link">-->
                            <!--                                    <div class="design-blog-item-block-img">-->
                            <!--                                        <img src="-->
							<?php //= bloginfo( 'template_url' );
							?><!--/assets/images/post-1.png" alt="" class="design-blog-img">-->
                            <!--                                        <div class="design-blog-post-date-and-num">-->
                            <!--                                            <span class="design-blog-post-date">23</span>-->
                            <!--                                            <span class="design-blog-post-month">JUL</span>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="design-blog-post-categories">Wooden accessories</div>-->
                            <!--                                    </div>-->
                            <!--                                    <h3 class="design-blog-post-title">-->
                            <!--                                        A flat-picked chair made of a seat and sticks-->
                            <!--                                    </h3>-->
                            <!--                                    <div class="design-blog-posted-by">-->
                            <!--                                    <span class="design-blog-posted-by-text">-->
                            <!--                                        Posted by-->
                            <!--                                    </span>-->
                            <!--                                        <img src="-->
							<?php //= bloginfo( 'template_url' );
							?><!--/assets/images/avatar.svg" alt="" class="design-blog-posted-by-img">-->
                            <!--                                        <span class="design-blog-posted-by-name">-->
                            <!--                                        S. Rogers-->
                            <!--                                    </span>-->
                            <!--                                    </div>-->
                            <!--                                    <p class="design-blog-post-excerpt">-->
                            <!--                                        Parturient in potenti id rutrum duis torquent parturient sceler isque sit vestibulum a posuere scelerisque viverra urna. Egestas tristique vestib...-->
                            <!--                                    </p>-->
                            <!--                                    <span class="design-blog-continue-reading">Continue reading</span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
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