jQuery(document).ready(function ($) {

    $('.header__cart').click(function (e) {
        e.stopPropagation();

        $('.shopping_cart_closed').toggleClass('shopping_cart_open');
        $("body").toggleClass("no-scroll");
    });

    $('.close-cart-img').click(function (e) {
        e.stopPropagation();
        $('.shopping_cart_closed').removeClass('shopping_cart_open');
        $("body").removeClass("no-scroll");
    });

    $('.shopping-cart__inner').click(function (e) {
        e.stopPropagation();
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.shopping_cart_closed').length) {
            $('.shopping_cart_closed').removeClass('shopping_cart_open');
            $("body").removeClass("no-scroll");
        }
    });

    $('.add-to-cart').on('click', function () {
        let productId = $(this).data('product');
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'add_to_cart',
                product_id: productId,
            },
            success: function (response) {
                updateBasket()
            },
        });
    });

    $(document).on('click', '.remove-product', function () {
        let productId = $(this).data('product_id');
        deleteProductInBasket(productId)
    })


    function deleteProductInBasket(id) {
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                product_id: id,
                action: 'delete_item',
            },
            success: function (response) {
                updateBasket()

            },
            error: function () {
                console.log('error')
            },
        });
    }


    $(document).on('click', '.shopping-cart-plus-btn', function () {
        let productId = $(this).closest('.shopping-cart-item').find('.remove-product').data('product_id');
        let quantityElement = $(this).siblings('.quantity');
        let currentQuantity = parseInt(quantityElement.text());
        quantityElement.text(currentQuantity + 1);
        debouncedUpdateQuantity(productId, parseInt(quantityElement.text()));
    });

    $(document).on('click', '.shopping-cart-minus-btn', function () {
        let productId = $(this).closest('.shopping-cart-item').find('.remove-product').data('product_id');
        let quantityElement = $(this).siblings('.quantity');
        let currentQuantity = parseInt(quantityElement.text());
        if (currentQuantity > 1) {
            quantityElement.text(currentQuantity - 1);
        }
        debouncedUpdateQuantity(productId, parseInt(quantityElement.text()));
    });


    function debounce(func, wait) {
        let timeout;

        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };

            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    ``
    const debouncedUpdateQuantity = debounce(function (productId, quantity) {
        updateItemQuantity(quantity, productId);
    }, 500);


    function updateItemQuantity(currentQuantity, productId) {
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                currentQuantity: currentQuantity,
                productId: productId,
                action: 'update_quantity_product',
            },
            success: function (response) {
                updateBasket();
            },
            error: function () {
                console.log('error')
            },
        });
    }


    function updateBasket() {
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'update_cart'
            },
            success: function (response) {
                console.log(response)
                $('.shopping-cart-subtotal-price').empty().html(response.data.total)
                $('.header__cart-subtotal').empty().html(response.data.total);
                $('.count-product-in-basket').empty().html(response.data.cart_items_count);
                let products = setProduct(response.data.products)
                if (products.html() !== '') {
                    $('.shopping-cart-list').empty().html(products);
                    $('.shopping-cart-subtotal-container').removeClass('cart-empty');
                } else {
                    $('.shopping-cart-subtotal-container').addClass('cart-empty');
                    let html = `<li class="no-items-in-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                <path opacity="0.1" d="M65.3515 34.1463L54.9554 23.9024L44.5594 34.1463L37.6287 27.3171L48.0247 17.0732L37.6287 6.82927L44.5594 0L54.9554 10.2439L65.3515 0L72.2822 6.82927L61.8861 17.0732L72.2822 27.3171L65.3515 34.1463ZM30.203 80.4878C35.6485 80.4878 40.104 84.8781 40.104 90.2439C40.104 95.6098 35.6485 100 30.203 100C24.7574 100 20.302 95.6098 20.302 90.2439C20.302 84.8781 24.7574 80.4878 30.203 80.4878ZM79.7079 80.4878C85.1535 80.4878 89.6089 84.8781 89.6089 90.2439C89.6089 95.6098 85.1535 100 79.7079 100C74.2624 100 69.8069 95.6098 69.8069 90.2439C69.8069 84.8781 74.2624 80.4878 79.7079 80.4878ZM31.1931 64.8781C31.1931 65.3659 31.6881 65.8537 32.1832 65.8537H89.6089V75.6098H30.203C24.7574 75.6098 20.302 71.2195 20.302 65.8537C20.302 63.9024 20.797 62.439 21.2921 60.9756L27.7277 49.2683L10.401 12.1951H0.5V2.43902H16.8366L38.1238 46.3415H72.7772L92.0842 12.1951L100.5 17.0732L81.1931 51.2195C79.7079 54.1463 76.2426 56.0976 72.7772 56.0976H35.6485L31.1931 63.9024V64.8781Z" fill="#777777"/>
            </svg>
            <p class="no-items-in-cart-text">No products in the cart.</p>
            <a href="${response.data.shop_url}" class="no-items-in-cart-link">
                RETURN TO SHOP
            </a>
        </li>`;
                    $('.shopping-cart-list').empty().html(html)
                }
            },
            error: function () {
                console.log('error')
            },
        });
    }

    function setProduct(products) {
        let cartList = $('<ul class="shopping-cart-list"></ul>');

        products.forEach(product => {
            let html = `<li class="shopping-cart-item">
            <a href="${product.link}" class="shopping-cart-link">
                <img src="${product.image_url}" alt="${product.image_alt}" class="shopping-cart-item-img">
            </a>
            <div class="shopping-cart-content">
                <div class="shopping-cart-name-and-remove">
                    <a href="${product.link}" class="shopping-cart-link">
                        <span class="shopping-cart-item-name">${product.name}</span>
                    </a>
                    <img data-product_id="${product.id}" src="${ajax_object.template_url}/assets/images/close.svg" alt="" class="remove-product">
                </div>
                <div class="shopping-cart-quantity-block">
                    <span class="shopping-cart-minus-btn">-</span>
                    <span class="quantity">${product.quantity}</span>
                    <span class="shopping-cart-plus-btn">+</span>
                </div>
                <div class="shopping-cart-item-price">
                    <span class="shopping-cart-item-quantity">${product.quantity}</span>
                    <span class="shopping-cart-item-x">x</span>
                    <span class="shopping-cart-item-price-1">${product.price}</span>
                </div>
            </div>
        </li>`;
            cartList.append(html);
        });
        return cartList;
    }


});






