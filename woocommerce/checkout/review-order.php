<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- Items -->
<div class="space-y-6 mb-8 border-b border-surface-variant pb-8 woocommerce-checkout-review-order-table">
    <?php
    do_action( 'woocommerce_review_order_before_cart_contents' );

    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            ?>
            <div class="flex items-center gap-4 <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                <div class="w-20 h-20 rounded-md overflow-hidden bg-surface-container-low flex-shrink-0 border border-surface-variant relative">
                    <?php
                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('woocommerce_thumbnail', ['class' => 'w-full h-full object-cover']), $cart_item, $cart_item_key );
                    echo $thumbnail;
                    ?>
                    <span class="absolute -top-2 -right-2 bg-secondary text-on-secondary font-caption text-caption w-6 h-6 rounded-full flex items-center justify-center z-10">
                        <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', sprintf( '%s', $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
                    </span>
                </div>
                <div class="flex-grow">
                    <h3 class="font-label-md text-label-md text-on-surface">
                        <?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ); ?>
                    </h3>
                    <p class="font-caption text-caption text-on-surface-variant mt-1">
                        <?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
                    </p>
                </div>
                <div class="font-body-md text-body-md text-on-surface text-right">
                    <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
                </div>
            </div>
            <?php
        }
    }

    do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
</div>

<!-- Totals -->
<div class="space-y-4 mb-8">
    <div class="flex justify-between items-center text-on-surface-variant cart-subtotal">
        <span class="font-body-md text-body-md"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></span>
        <span class="font-body-md text-body-md"><?php wc_cart_totals_subtotal_html(); ?></span>
    </div>

    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
        <div class="flex justify-between items-center text-secondary cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
            <span class="font-body-md text-body-md"><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
            <span class="font-body-md text-body-md"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
        </div>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
        <div class="flex justify-between items-center text-on-surface-variant">
            <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>
            <span class="font-body-md text-body-md w-full"><?php wc_cart_totals_shipping_html(); ?></span>
            <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>
        </div>
    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
        <div class="flex justify-between items-center text-on-surface-variant fee">
            <span class="font-body-md text-body-md"><?php echo esc_html( $fee->name ); ?></span>
            <span class="font-body-md text-body-md"><?php wc_cart_totals_fee_html( $fee ); ?></span>
        </div>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
        <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
            <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
                <div class="flex justify-between items-center text-on-surface-variant tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                    <span class="font-body-md text-body-md"><?php echo esc_html( $tax->label ); ?></span>
                    <span class="font-body-md text-body-md"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="flex justify-between items-center text-on-surface-variant tax-total">
                <span class="font-body-md text-body-md"><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></span>
                <span class="font-body-md text-body-md"><?php wc_cart_totals_taxes_total_html(); ?></span>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <div class="flex justify-between items-center pt-4 border-t border-surface-variant order-total">
        <span class="font-headline-sm text-headline-sm text-primary"><?php esc_html_e( 'Total', 'woocommerce' ); ?></span>
        <div class="text-right">
            <span class="font-headline-sm text-headline-sm text-primary"><?php wc_cart_totals_order_total_html(); ?></span>
        </div>
    </div>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
</div>
