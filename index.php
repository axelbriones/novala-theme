<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>
<main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12 pt-[88px]">
<!-- Header -->
<header class="text-center mb-16">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4"><?php echo esc_html(novara_get_option('blog_title', __('The Buzz', 'novara'))); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto"><?php echo wp_kses_post(novara_get_option('blog_subtitle', __('Stories, insights, and recipes from the heart of our apiaries. Deep dives into sustainable beekeeping and the art of raw honey.', 'novara'))); ?></p>
</header>
<!-- Categories Filter -->
<div class="flex flex-wrap justify-center gap-4 mb-16">
<?php
$categories = get_categories(array('hide_empty' => true));
echo '<a href="' . esc_url(get_post_type_archive_link('post')) . '" class="px-6 py-2 bg-primary text-on-primary rounded-full font-label-md text-label-md transition-all">' . esc_html__('All', 'novara') . '</a>';
foreach($categories as $category) {
    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="px-6 py-2 bg-transparent border border-outline-variant text-on-surface rounded-full font-label-md text-label-md hover:border-primary transition-all">' . esc_html($category->name) . '</a>';
}
?>
</div>

<?php if (have_posts()) : ?>
    <?php $post_count = 0; ?>
    <!-- Featured Article (First Post) -->
    <?php while (have_posts()) : the_post(); ?>
        <?php if ($post_count === 0) : ?>
            <article class="grid grid-cols-1 lg:grid-cols-2 gap-gutter mb-24 bg-surface-bright rounded-xl overflow-hidden ambient-shadow cursor-pointer hover-ambient-shadow group" onclick="window.location.href='<?php the_permalink(); ?>'">
            <div class="relative h-[400px] lg:h-[500px] w-full overflow-hidden">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105', 'loading' => 'eager']); ?>
            <?php else : ?>
                <div class="w-full h-full bg-surface-variant flex items-center justify-center"><span class="material-symbols-outlined text-outline text-6xl">image</span></div>
            <?php endif; ?>
            </div>
            <div class="p-8 lg:p-12 flex flex-col justify-center">
            <div class="flex items-center gap-4 mb-6">
            <?php
            $cats = get_the_category();
            if(!empty($cats)): ?>
                <span class="px-3 py-1 bg-secondary-container text-on-secondary-fixed rounded-full font-label-md text-caption uppercase tracking-wider"><?php echo esc_html($cats[0]->name); ?></span>
            <?php endif; ?>
            <time class="font-body-md text-caption text-on-surface-variant" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            </div>
            <h2 class="font-headline-md text-headline-md text-primary mb-4 group-hover:text-secondary transition-colors"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="font-body-lg text-body-lg text-on-surface-variant mb-8 line-clamp-3"><?php the_excerpt(); ?></div>
            <div class="mt-auto">
            <span class="text-secondary font-label-md text-label-md uppercase tracking-wider flex items-center gap-2 group-hover:gap-3 transition-all">
                                <?php esc_html_e('Read Story', 'novara'); ?> <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </span>
            </div>
            </div>
            </article>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-16 gap-x-gutter">
        <?php else : ?>
            <!-- Standard Grid Article -->
            <article class="flex flex-col group cursor-pointer" onclick="window.location.href='<?php the_permalink(); ?>'">
            <div class="relative w-full aspect-video rounded-xl overflow-hidden mb-6">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105', 'loading' => 'lazy']); ?>
            <?php else : ?>
                <div class="w-full h-full bg-surface-variant flex items-center justify-center"><span class="material-symbols-outlined text-outline text-4xl">image</span></div>
            <?php endif; ?>
            </div>
            <div class="flex items-center gap-4 mb-4">
            <?php
            $cats = get_the_category();
            if(!empty($cats)): ?>
                <span class="text-secondary font-label-md text-caption uppercase tracking-wider"><?php echo esc_html($cats[0]->name); ?></span>
            <?php endif; ?>
            <span class="text-surface-variant">•</span>
            <time class="font-body-md text-caption text-on-surface-variant" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            </div>
            <h3 class="font-headline-sm text-headline-sm text-on-surface mb-3 group-hover:text-primary transition-colors"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="font-body-md text-body-md text-on-surface-variant line-clamp-3 mb-4"><?php the_excerpt(); ?></div>
            </article>
        <?php endif; ?>
        <?php $post_count++; ?>
    <?php endwhile; ?>
    <?php if($post_count > 1) echo '</div>'; ?>

    <!-- Pagination -->
    <div class="mt-16 flex justify-center">
        <?php
        echo paginate_links(array(
            'prev_text' => '<span class="material-symbols-outlined">chevron_left</span>',
            'next_text' => '<span class="material-symbols-outlined">chevron_right</span>',
            'class' => 'font-label-md text-label-md pagination-links'
        ));
        ?>
    </div>
<?php else : ?>
    <p class="text-center font-body-lg text-on-surface-variant"><?php esc_html_e('No posts found.', 'novara'); ?></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>