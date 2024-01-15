<?php

//generate widjets for footer


function jewellery_store_widgets_init(): void {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'jewellery-store' ),
        'id'            => 'footer-column-4',
        'description'   => esc_html__( 'Add widgets here.', 'jewellery-store' ),
        'before_widget' => '<div class="footer__column-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="footer__column-name">',
        'after_title'   => '</span>',

    ) );
}
add_action( 'widgets_init', 'jewellery_store_widgets_init' );

function jewellery_store_widgets_init_column_3(): void {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'jewellery-store' ),
		'id'            => 'footer-column-3',
		'description'   => esc_html__( 'Add widgets here.', 'jewellery-store' ),
		'before_widget' => '<div class="footer__column-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer__column-name">',
		'after_title'   => '</span>',
	) );
}

add_action( 'widgets_init', 'jewellery_store_widgets_init_column_3' );


function jewellery_store_widgets_init_column_1(): void {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'jewellery-store' ),
		'id'            => 'footer-column-1',
		'description'   => esc_html__( 'Add widgets here.', 'jewellery-store' ),
		'before_widget' => '<div class="footer__column-1">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="footer__column-name">',
		'after_title'   => '</span>',
		'before_text'   => '<p class="footer__column-1-text">',
		'after_text'    => '</p>',
		'before_contact' => '<div class="footer__column-1-contact">',
		'after_contact' => '</div>',
		'before_address_block' => '<div class="footer-address-block footer-contact-block">',
		'after_address_block' => '</div>',
		'before_address_img' => '<img src="<?= bloginfo(\'template_url\'); ?>/assets/images/gps.svg" alt="" class="footer-address-img">',
		'after_address_img' => '',
		'before_address' => '<span class="footer-address footer-contact">',
		'after_address' => '</span>',
		'before_phone_link' => '<a href="" class="footer-phone-link footer-contact-block">',
		'after_phone_link' => '</a>',
		'before_phone_img' => '<img src="<?= bloginfo(\'template_url\'); ?>/assets/images/phone.svg" alt="" class="footer-phone-img">',
		'after_phone_img' => '',
		'before_phone' => '<span class="footer-phone footer-contact">',
		'after_phone' => '</span>',
		'before_fax_block' => '<div class="footer-fax-block footer-contact-block">',
		'after_fax_block' => '</div>',
		'before_fax_img' => '<img src="<?= bloginfo(\'template_url\'); ?>/assets/images/envelop.svg" alt="" class="footer-fax-img">',
		'after_fax_img' => '',
		'before_fax' => '<span class="footer-fax footer-contact">',
		'after_fax' => '</span>',
	) );
}
add_action('widgets_init', 'jewellery_store_widgets_init_column_1');
