<?php
class Custom_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'custom_widget',
			'Название вашего виджета',
			array('description' => 'Описание вашего виджета')
		);
	}

	public function widget($args, $instance) {
		// Получите данные из ACF полей
		$custom_field_value = get_field('custom_field', 'widget_' . $this->id_base, true);

		// Ваш код для вывода содержимого виджета
	}

	public function form($instance) {
		// Ваш код для настройки виджета в админке
		// Например, вы можете использовать ACF поле как дополнительное поле в настройках виджета
	}

	public function update($new_instance, $old_instance) {
		// Ваш код для сохранения настроек виджета
	}
}

function register_custom_widget(): void {
	register_widget('Custom_Widget');
}

add_action('widgets_init', 'register_custom_widget');
