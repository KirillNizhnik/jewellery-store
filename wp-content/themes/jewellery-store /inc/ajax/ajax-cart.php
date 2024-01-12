<?php
class AjaxBuyProduct{
	public function __construct()
	{
		add_action('wp_ajax_add_to_cart', array($this, 'add_to_cart'));
		add_action('wp_ajax_nopriv_add_to_cart', array($this,'add_to_cart'));
		add_action('wp_ajax_delete_item', array($this, 'delete_item'));
		add_action('wp_ajax_nopriv_delete_item', array($this, 'delete_item'));
		add_action('wp_ajax_update_cart', array($this, 'update_cart'));
		add_action('wp_ajax_nopriv_update_cart', array($this, 'update_cart'));
		add_action('wp_ajax_update_quantity_product', array($this, 'update_quantity_product'));
		add_action('wp_ajax_nopriv_update_quantity_product', array($this, 'update_quantity_product'));

	}


	function update_cart(): void {
		 $products = $this->get_cart_products();
		 $cart = WC()->cart;
		 $total      = $cart->get_total('float');
		 $cart_items_count = WC()->cart->get_cart_contents_count();
		 $currency_symbol   = get_woocommerce_currency_symbol();

		$cart_data = [
			 'shop_url' => wc_get_page_permalink('shop'),
			 'products' => $products,
			 'total' => $currency_symbol . $total,
			 'cart_items_count' => $cart_items_count
		 ];
		 wp_send_json_success($cart_data);
		 wp_die();
	}

	function get_cart_products(): array {
		$products = [];
		$currency_symbol   = get_woocommerce_currency_symbol();
		$cart_items = WC()->cart->get_cart();
		foreach ( $cart_items as $item ){
			$product = wc_get_product( $item['product_id'] );
			$link = $product->get_permalink();
			$product_image_id = get_post_thumbnail_id( $item['product_id'] );
			$product_image_url = wp_get_attachment_image_src( $product_image_id, 'full' )[0];
			$product_image_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );
			$quantity = $item['quantity'];
			$price = $product->get_price();
			$products[] = [
				'id' => $product->get_id(),
				'name' => $product->get_name(),
				'link' => $link,
				'image_url' => $product_image_url,
				'image_alt' => $product_image_alt,
				'quantity' => $quantity,
				'price' => $currency_symbol . $price,
			];

		}
		return $products;
	}



	/**
	 * @throws Exception
	 */
	function update_quantity_product(): void
	{
		$product_id = intval($_POST['productId']);
		$quantity = intval($_POST['currentQuantity']);
		$cart_items = WC()->cart->get_cart();
		foreach ($cart_items as $cart_item_key => $cart_item) {
			if ($cart_item['product_id'] === $product_id) {
				WC()->cart->set_quantity($cart_item_key, $quantity);
			}
		}
		wp_die();
	}

	/**
	 * @throws Exception
	 */
	function add_to_cart(): void
	{
		$product_id = intval($_POST['product_id']);
		WC()->cart->add_to_cart($product_id, 1);

		$woocommerce = WC();
		$cart_items = $woocommerce->cart->get_cart();
		$totalQuantity = 0;
		foreach ($cart_items as $cart_item_key => $cart_item) {
			$totalQuantity += $cart_item['quantity'];
		}
		wp_send_json_success($totalQuantity);
		wp_die();
	}

	public function delete_item():void{
		$product_id = sanitize_text_field($_POST['product_id']);
		$this->remove_product_from_cart($product_id);
		wp_send_json_success($product_id);
		wp_die();
	}

	function remove_product_from_cart($product_id): void
	{
		$cart = WC()->cart;
		$cart_items = $cart->get_cart();
		foreach ($cart_items as $cart_item_key => $cart_item) {
			if ($cart_item['product_id'] == $product_id) {
				$cart->remove_cart_item($cart_item_key);
				break;
			}
		}
	}

}
new AjaxBuyProduct();