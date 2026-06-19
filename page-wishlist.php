<?php
/* Template Name: Wishlist */
get_header();
?>

<!-- Main Content -->
<main class="flex-grow">
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-[80px] md:py-[120px]">
<!-- Page Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
<div class="max-w-2xl">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4"><?php echo wp_kses_post(novara_get_field('hero_title', __('Your Curated Collection', 'novara'), get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant"><?php echo wp_kses_post(novara_get_field('hero_subtitle', __('A handpicked selection of our finest artisanal honeys and crafted goods, saved for your golden hour rituals.', 'novara'), get_the_ID())); ?></p>
</div>
<button type="button" class="flex items-center gap-2 border-[1.5px] border-primary text-primary px-6 py-3 rounded-full font-label-md text-label-md hover:bg-primary hover:text-on-primary transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined text-[20px]">share</span>
                    Share Wishlist
                </button>
</div>
<!-- Wishlist Grid -->
<div class="mt-8">
<?php
// Check if YITH Wishlist is active and we want to render it,
// else fallback to an ACF manual grid or a placeholder
if (shortcode_exists('yith_wcwl_wishlist')) {
    echo do_shortcode('[yith_wcwl_wishlist]');
} else {
    // If no plugin, we allow the client to populate a static grid via ACF for demo/landing purposes
    if (function_exists('have_rows') && have_rows('wishlist_demo_items', get_the_ID())):
        echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-gutter gap-y-[64px]">';
        while (have_rows('wishlist_demo_items', get_the_ID())): the_row();
?>
<article class="group flex flex-col relative transition-transform duration-500 hover:-translate-y-2">
<div class="relative w-full aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden mb-6 transition-all duration-500 group-hover:editorial-shadow">
<img loading="lazy" alt="<?php echo esc_attr(novara_get_sub_field('title')); ?>" class="w-full h-full object-cover mix-blend-multiply transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url(novara_get_sub_field('image')); ?>"/>
<?php if ($badge = novara_get_sub_field('badge')): ?>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-secondary-container text-on-secondary-container font-label-md text-[10px] uppercase tracking-wider px-3 py-1 rounded-full"><?php echo esc_html($badge); ?></span>
</div>
<?php endif; ?>
<button aria-label="Remove from wishlist" class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm rounded-full text-primary hover:bg-primary hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
</div>
<div class="flex-grow flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2"><?php echo esc_html(novara_get_sub_field('title')); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6"><?php echo esc_html(novara_get_sub_field('price')); ?></p>
<button type="button" class="mt-auto w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-full hover:bg-surface-tint transition-colors duration-300">
    Add to Cart
</button>
</div>
</article>
<?php
        endwhile;
        echo '</div>';
    else:
        // Default text if no plugin and no ACF demo data
        echo '<p class="text-center font-body-lg text-on-surface-variant">Your wishlist is currently empty.</p>';
    endif;
}
?>
</div>
</section>
</main>

<?php get_footer(); ?>