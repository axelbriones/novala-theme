<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

    <div class="bg-surface-container-lowest rounded-xl p-8 ambient-shadow">
        <h2 class="font-headline-sm text-headline-sm text-primary mb-6 border-b border-surface-variant pb-4"><?php esc_html_e( 'Order Summary', 'woocommerce' ); ?></h2>

        <div class="flex flex-col gap-4 font-body-md text-body-md text-on-surface-variant mb-6">
            <div class="flex justify-between cart-subtotal">
                <span><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></span>
                <span class="text-on-surface" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></span>
            </div>

            <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                <div class="flex justify-between text-secondary cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                    <span><?php wc_cart_totals_coupon_label( $coupon ); ?></span>
                    <span data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
                </div>
            <?php endforeach; ?>

            <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
                <?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
                <div class="flex justify-between w-full">
                    <?php wc_cart_totals_shipping_html(); ?>
                </div>
                <?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
            <?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>
                <div class="flex justify-between shipping">
                    <span><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></span>
                    <span data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></span>
                </div>
            <?php endif; ?>

            <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
                <div class="flex justify-between fee">
                    <span><?php echo esc_html( $fee->name ); ?></span>
                    <span class="text-on-surface" data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></span>
                </div>
            <?php endforeach; ?>

            <?php
            if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
                $taxable_address = WC()->customer->get_taxable_address();
                $estimated_text  = '';

                if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
                    /* translators: %s location. */
                    $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
                }

                if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
                    foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                        ?>
                        <div class="flex justify-between tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                            <span><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                            <span class="text-on-surface" data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></span>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="flex justify-between tax-total">
                        <span><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                        <span class="text-on-surface" data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></span>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

        <div class="border-t border-surface-variant pt-6 mb-8 order-total">
            <div class="flex justify-between items-center">
                <span class="font-headline-sm text-headline-sm text-primary"><?php esc_html_e( 'Total', 'woocommerce' ); ?></span>
                <span class="font-headline-sm text-headline-sm text-primary" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></span>
            </div>
            <?php if ( wc_tax_enabled() ) : ?>
                <p class="font-caption text-caption text-tertiary mt-2">Taxes calculated at checkout</p>
            <?php endif; ?>
        </div>

        <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

        <div class="wc-proceed-to-checkout">
            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-full hover:bg-surface-tint transition-colors ambient-shadow-hover flex items-center justify-center gap-2">
                <?php esc_html_e( 'Proceed to Checkout', 'woocommerce' ); ?>
                <span class="material-symbols-outlined text-[20px]" data-icon="arrow_forward">arrow_forward</span>
            </a>
            <div class="mt-6 pt-6 border-t border-surface-variant flex items-center justify-center gap-2 text-tertiary">
                <span class="material-symbols-outlined text-[16px]" data-icon="lock">lock</span>
                <span class="font-caption text-caption">Secure, encrypted checkout</span>
            </div>
        </div>
    </div>
</div>
