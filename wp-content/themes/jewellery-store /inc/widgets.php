<?php



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
	) );
}

add_action( 'widgets_init', 'jewellery_store_widgets_init_column_1' );



function register_contact_info_widget(): void {
	register_widget( 'Contact_Info_Widget' );
}

add_action( 'widgets_init', 'register_contact_info_widget' );

class Contact_Info_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'contact_info_widget',
			'Contact Info',
			array( 'description' => 'Виджет для отображения контактной информации' )
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		echo '<div class="footer__column-1">';
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo_url       = wp_get_attachment_image_url( $custom_logo_id, 'full' );
		echo '<img src="' . $logo_url . '" alt="logo" class="footer__logo">';
		echo '<p class="footer__column-1-text">' . esc_html( $instance['description'] ) . '</p>';
		echo '<div class="footer__column-1-contact">';
		echo '<div class="footer-address-block footer-contact-block">';
		echo '<img src="' . get_template_directory_uri() . '/assets/images/gps.svg" alt="" class="footer-address-img">';
		echo '<span class="footer-address footer-contact">' . esc_html( $instance['address'] ) . '</span>';
		echo '</div>';
		echo '<a href="tel:' . esc_attr( $instance['phone'] ) . '" class="footer-phone-link footer-contact-block">';
		echo '<img src="' . get_template_directory_uri() . '/assets/images/phone.svg" alt="" class="footer-phone-img">';
		echo '<span class="footer-phone footer-contact">Phone: ' . esc_html( $instance['phone'] ) . '</span>';
		echo '</a>';
		echo '<div class="footer-fax-block footer-contact-block">';
		echo '<img src="' . get_template_directory_uri() . '/assets/images/envelop.svg" alt="" class="footer-fax-img">';
		echo '<span class="footer-fax footer-contact">Fax: ' . esc_html( $instance['fax'] ) . '</span>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$description = ! empty( $instance['description'] ) ? $instance['description'] : '';
		$address = ! empty( $instance['address'] ) ? $instance['address'] : '';
		$phone = ! empty( $instance['phone'] ) ? $instance['phone'] : '';
		$fax = ! empty( $instance['fax'] ) ? $instance['fax'] : '';
		?>
        <p>
            <label for="<?php echo $this->get_field_id( 'description' ); ?>">Description:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_html( $description ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'address' ); ?>">Address:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_html( $address ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone' ); ?>">Phone:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_html( $phone ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'fax' ); ?>">Fax:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'fax' ); ?>" name="<?php echo $this->get_field_name( 'fax' ); ?>" type="text" value="<?php echo esc_html( $fax ); ?>">
        </p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
		$instance['fax'] = ( ! empty( $new_instance['fax'] ) ) ? strip_tags( $new_instance['fax'] ) : '';

		return $instance;
	}
}

