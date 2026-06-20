<main class="flex-grow max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop py-12 md:py-20">
<div class="mb-12">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-2">Your Cart</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">2 items crafted for the conscious connoisseur.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Cart Items (Dynamic) -->
<div class="lg:col-span-8 flex flex-col gap-8">
    <form class="woocommerce-cart-form" action="<?php
echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <?php do_action( 'woocommerce_before_cart_table' ); ?>

        <?php
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                ?>
                <div class="woocommerce-cart-form__cart-item flex flex-col sm:flex-row gap-6 p-6 bg-surface-container-lowest rounded-xl ambient-shadow-hover transition-all mb-8">
                    <div class="w-full sm:w-32 h-32 rounded-lg overflow-hidden bg-surface-container-low shrink-0 relative">
                        <?php
                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('woocommerce_thumbnail', ['class' => 'w-full h-full object-cover']), $cart_item, $cart_item_key );
                        if ( ! $product_permalink ) {
                            echo $thumbnail; // PHPCS: XSS ok.
                        } else {
                            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                        }
                        ?>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-1">
                                    <?php
                                    if ( ! $product_permalink ) {
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                    } else {
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                    }

                                    do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                    // Meta data.
                                    echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
                                    ?>
                                </h3>
                            </div>
                            <?php
                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                    'woocommerce_cart_item_remove_link',
                                    sprintf(
                                        '<a href="%s" class="text-tertiary hover:text-error transition-colors" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span class="material-symbols-outlined" data-icon="delete">delete</span></a>',
                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                        esc_html__( 'Remove this item', 'woocommerce' ),
                                        esc_attr( $product_id ),
                                        esc_attr( $_product->get_sku() )
                                    ),
                                    $cart_item_key
                                );
                            ?>
                        </div>
                        <div class="flex justify-between items-end mt-4 sm:mt-0">
                            <div class="flex items-center border border-outline-variant rounded-full bg-surface overflow-hidden">
                                <?php
                                if ( $_product->is_sold_individually() ) {
                                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                } else {
                                    $product_quantity = woocommerce_quantity_input(
                                        array(
                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                            'input_value'  => $cart_item['quantity'],
                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                            'min_value'    => '0',
                                            'product_name' => $_product->get_name(),
                                            'classes'      => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text', 'font-label-md', 'text-label-md', 'w-12', 'text-center', 'text-on-surface', 'bg-transparent', 'border-none', 'focus:ring-0', 'p-0' ), $_product ),
                                        ),
                                        $_product,
                                        false
                                    );
                                }
                                echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                ?>
                            </div>
                            <span class="font-headline-sm text-headline-sm text-primary">
                                <?php
                                    echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>

        <?php do_action( 'woocommerce_cart_contents' ); ?>

        <div class="flex justify-end mt-4">
            <button type="submit" class="bg-surface-container text-on-surface-variant font-label-md text-label-md px-6 py-3 rounded-full hover:bg-surface-variant transition-colors" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
            <?php do_action( 'woocommerce_cart_actions' ); ?>
            <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
        </div>

        <?php do_action( 'woocommerce_after_cart_table' ); ?>
    </form>
</div>

<!-- Order Summary (Dynamic) -->
<div class="lg:col-span-4 mt-8 lg:mt-0">
    <div class="cart-collaterals sticky top-32">
        <?php
            /**
             * Cart collaterals hook.
             *
             * @hooked woocommerce_cross_sell_display
             * @hooked woocommerce_cart_totals - 10
             */
            do_action( 'woocommerce_cart_collaterals' );
        ?>
    </div>
</div>
</div>
</main>