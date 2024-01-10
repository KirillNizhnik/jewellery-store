<?php

class Jewelry_Design_Post_Type {
	public function __construct() {
		add_action('init', array($this, 'register_post_type'));
		add_action('init', array($this, 'register_taxonomy'));

	}

	public function register_post_type(): void {
		$labels = array(
			'name'               => _x('Jewelry Designs', 'Post Type General Name', 'text-domain'),
			'singular_name'      => _x('Jewelry Design', 'Post Type Singular Name', 'text-domain'),
			'menu_name'          => __('Jewelry Design', 'text-domain'),
			'add_new'            => __('Add New', 'text-domain'),
			'add_new_item'       => __('Add New Jewelry Design', 'text-domain'),
			'edit_item'          => __('Edit Jewelry Design', 'text-domain'),
			'new_item'           => __('New Jewelry Design', 'text-domain'),
			'view_item'          => __('View Jewelry Design', 'text-domain'),
			'search_items'       => __('Search Jewelry Designs', 'text-domain'),
			'not_found'          => __('No Jewelry Designs found', 'text-domain'),
			'not_found_in_trash' => __('No Jewelry Designs found in Trash', 'text-domain'),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'has_archive'        => true,
			'menu_icon'          => 'dashicons-admin-customizer',
			'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields','author'),
			'taxonomies'         => array('jewelry-category'),
			'rewrite'            => array('slug' => 'jewelry-design'),
		);

		register_post_type('jewelry_design', $args);
	}

	public function register_taxonomy(): void{
		$labels = array(
			'name'                       => _x('Jewelry Categories', 'taxonomy general name', 'text-domain'),
			'singular_name'              => _x('Jewelry Category', 'taxonomy singular name', 'text-domain'),
			'search_items'               => __('Search Jewelry Categories', 'text-domain'),
			'popular_items'              => __('Popular Jewelry Categories', 'text-domain'),
			'all_items'                  => __('All Jewelry Categories', 'text-domain'),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __('Edit Jewelry Category', 'text-domain'),
			'update_item'                => __('Update Jewelry Category', 'text-domain'),
			'add_new_item'               => __('Add New Jewelry Category', 'text-domain'),
			'new_item_name'              => __('New Jewelry Category Name', 'text-domain'),
			'separate_items_with_commas' => __('Separate Jewelry Categories with commas', 'text-domain'),
			'add_or_remove_items'        => __('Add or remove Jewelry Categories', 'text-domain'),
			'choose_from_most_used'      => __('Choose from the most used Jewelry Categories', 'text-domain'),
			'not_found'                  => __('No Jewelry Categories found', 'text-domain'),
			'menu_name'                  => __('Jewelry Categories', 'text-domain'),
		);

		$args = array(
			'hierarchical'          => true,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'query_var'             => true,
			'rewrite'               => array('slug' => 'jewelry-category'),
		);

		register_taxonomy('jewelry_category', array('jewelry_design'), $args);
	}
}

new Jewelry_Design_Post_Type();
