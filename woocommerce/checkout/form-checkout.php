<!-- Main Content Canvas -->
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    get_footer();
	return;
}
?>

<!-- Main Content Canvas -->
<main class="flex-grow max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop py-10 md:py-20">
    <div class="mb-10">
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4">Checkout</h1>
        <p class="text-on-surface-variant font-body-lg text-body-lg">Complete your order securely.</p>
    </div>

    <?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>

    <form name="checkout" method="post" class="checkout woocommerce-checkout grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-[64px]" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

        <!-- Left Column: Forms -->
        <div class="lg:col-span-7 space-y-12" id="customer_details">
            <?php if ( $checkout->get_checkout_fields() ) : ?>
                <!-- Billing & Shipping injected by WooCommerce -->
                <div class="bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow mb-8">
                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                </div>

                <div class="bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow">
                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                </div>
            <?php endif; ?>

            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
        </div>

        <!-- Right Column: Order Summary & Payment -->
        <div class="lg:col-span-5 relative">
            <div class="sticky top-32 bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow">
                <h2 class="font-headline-sm text-headline-sm text-primary mb-6" id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h2>

                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

                <p class="font-caption text-caption text-center text-on-surface-variant mt-6 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[16px] text-outline" style="font-variation-settings: 'FILL' 0;">eco</span>
                                        Every purchase supports native bee habitats.
                </p>
            </div>
        </div>
    </form>

    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

</main>