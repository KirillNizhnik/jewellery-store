<?php


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function jewellery_store_logo() {
	$defaults = array(
		'height'               => 40,
		'width'                => 112,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'jewellery_store_logo' );


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
	wp_enqueue_script( 'header-menu', get_template_directory_uri() . "/assets/js/header-menu.js", array( 'jquery' ), _S_VERSION );
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


function my_nav_menu($args = array()) {
	$defaults = array(
		'container'       => 'div',
		'container_id'    => 'top-navigation-primary',
		'container_class' => 'top-navigation',
		'menu_class'      => 'menu main-menu menu-depth-0 menu-even',
		'echo'            => false,
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 10,
		'walker'          => new My_Walker_Nav_Menu()
	);

	$args = wp_parse_args($args, $defaults);

	return wp_nav_menu($args);
}

function custom_theme_register_menus() {
	register_nav_menus(array(
		'primary-menu' => esc_html__('Primary Menu', 'primary_menu'),
	));
}
add_action('after_setup_theme', 'custom_theme_register_menus');

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
	// ... ваш существующий код ...

	function start_lvl(&$output, $depth = 0, $args = null) {
		// depth dependent classes
		$indent = str_repeat("\t", $depth); // code indent
		$display_depth = $depth + 1; // because it counts the first submenu as 0

		if ($depth === 0) {
			// Top level submenu
			$classes = array(
				'sub-menu',
				'top-level-sub-menu',
				($display_depth % 2 ? 'menu-odd' : 'menu-even'),
				'menu-depth-' . $display_depth
			);
		} elseif ($depth === 1) {
			// Second level submenu
			$classes = array(
				'sub-menu',
				'second-level-sub-menu',
				($display_depth % 2 ? 'menu-odd' : 'menu-even'),
				'menu-depth-' . $display_depth
			);
		} elseif ($depth === 2) {
			// Third level submenu
			$classes = array(
				'sub-menu',
				'third-level-sub-menu',
				($display_depth % 2 ? 'menu-odd' : 'menu-even'),
				'menu-depth-' . $display_depth
			);
		}

		$class_names = implode(' ', $classes);

		// build html
		$output .= "\n$indent<ul class=\"$class_names\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0) {
		$indent = str_repeat("\t", $depth); // code indent

		$depth_classes = array(
			($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
			($depth >= 2 ? 'sub-sub-menu-item' : ''),
			($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
			'menu-item-depth-' . $depth
		);

		if ($depth === 0) {
			$depth_classes[] = 'top-level-menu-item';
		}

		if (in_array('menu-item-has-children', $item->classes) && $depth === 0) {
			$depth_classes[] = 'has-submenu';

			// Дополнительный класс для главного элемента с подменю
			$depth_classes[] = 'main-menu-item-with-submenu';
		}

		$depth_class_names = esc_attr(implode(' ', $depth_classes));

		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

		$output .= "$indent<li id=\"nav-menu-item-$item->ID\" class=\"$depth_class_names $class_names\">";

		$attributes = '';

		$has_children = in_array('menu-item-has-children', $item->classes) && $depth === 0;

		if (!$has_children || $depth > 0) {
			$attributes .= !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
		}

		$link_class = ($depth > 0 ? 'sub-menu-link' : 'main-menu-link');

		if ($depth === 0) {
			$link_class .= ' top-level-link';
		} elseif ($depth === 1) {
			$link_class .= ' second-level-link';
		} elseif ($depth === 2) {
			$link_class .= ' third-level-link';
		}

		$attributes .= ' class="menu-link ' . $link_class . '"';

		if ($depth === 0) {
			$link_class .= ' top-level-link';
		}

		$attributes .= ' class="menu-link ' . $link_class . '"';

		// Дополнительный класс для главного элемента с подменю
		if ($depth === 0 && $has_children) {
			$attributes .= ' class="menu-link main-menu-item-with-submenu"';
		}

		$item_output = sprintf(
			'%s<a%s>%s%s%s</a>%s%s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters('the_title', $item->title, $item->ID),
			$args->link_after,
			($has_children && $depth === 0 ? '<img class="header__menu-item-chevron" src="' . esc_url(get_template_directory_uri()) . '/assets/images/chevron.svg" alt="chevron">' : ''),
			$args->after
		);

		// build html
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

}



function dd( $data ): void {
	echo '<pre>';
	var_dump( $data );
	echo '</pre>';
}



