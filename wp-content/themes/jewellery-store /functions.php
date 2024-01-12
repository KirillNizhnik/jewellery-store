<?php


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


add_action( 'wp_enqueue_scripts', 'jewellery_store_scripts' );

function jewellery_store_scripts(): void {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'jewellery_store_style', get_template_directory_uri() . "/style.css", array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'jewellery_store_main_style', get_template_directory_uri() . "/assets/css/main.css", array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );
	wp_enqueue_script( 'shopping-cart', get_template_directory_uri() . "/assets/js/shopping-cart.js", array( 'jquery' ), _S_VERSION, true );
	wp_localize_script('shopping-cart', 'ajax_object', array(
		'ajax_url' => admin_url('admin-ajax.php'), 'template_url' => get_template_directory_uri(),
	));
	if ( is_front_page() ) {
		wp_enqueue_style( 'jewellery_store_home_style', get_template_directory_uri() . "/assets/css/home.css", array(), _S_VERSION );
		wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . "/assets/js/smooth-scrolling.js", array( 'jquery' ), _S_VERSION );
		wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), _S_VERSION, true );
		wp_enqueue_script( 'swiper-featured-categories', get_template_directory_uri() . "/assets/js/swiper-featured-categories.js", array( 'jquery' ), _S_VERSION, true );
		wp_enqueue_script( 'special-offer-video', get_template_directory_uri() . "/assets/js/special-offer-video.js", array( 'jquery' ), _S_VERSION, true );
		wp_enqueue_script( 'swiper-blog-posts', get_template_directory_uri() . "/assets/js/swiper-blog-posts.js", array( 'jquery' ), _S_VERSION, true );
	}


}

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/blog-post-type.php';


require get_template_directory() . '/inc/ajax/ajax-cart.php';


if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function dd( $data ): void {
	echo '<pre>';
	var_dump( $data );
	echo '</pre>';
}



