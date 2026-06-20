<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<main>
    <?php
    // Render static components migrated to dynamic architecture fallback
    novara_render_component('hero');
    novara_render_component('features');
    novara_render_component('products');
    novara_render_component('sustainability');
    novara_render_component('newsletter');
    ?>

</main>

<?php get_footer(); ?>
