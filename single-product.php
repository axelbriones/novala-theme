<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>
<main class="flex-grow max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop pt-16 pb-24">
    <div class="woocommerce-container">
        <?php if (function_exists('woocommerce_content')) { woocommerce_content(); } else { echo '<p>WooCommerce is not active.</p>'; } ?>
    </div>
</main>
<?php get_footer(); ?>