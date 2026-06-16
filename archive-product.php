<?php get_header(); ?>
<main class="flex-grow max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop pt-16 pb-24">
    <header class="mb-16 text-center md:text-left flex flex-col items-center md:items-start">
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6"><?php woocommerce_page_title(); ?></h1>
    </header>
    <div class="woocommerce-container">
        <?php woocommerce_content(); ?>
    </div>
</main>
<?php get_footer(); ?>