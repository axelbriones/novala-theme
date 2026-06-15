<?php get_header(); ?>

<main>
    <?php
    // Render static components migrated to dynamic architecture fallback
    novara_render_component('hero');
    novara_render_component('features');
    novara_render_component('products');
    novara_render_component('sustainability');
    novara_render_component('newsletter');
    ?>

    <?php
    // Global ACF Flexible Content Components Loop (Dynamic Overrides)
    // Render dynamic components directly using the exact visual layouts migrated to components/
    novara_render_acf_components();
    ?>
</main>

<?php get_footer(); ?>
