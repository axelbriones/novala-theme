<?php get_header(); ?>
<main class="flex-grow w-full max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop py-12 pt-[88px]">
<?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="mb-10 text-center">
            <div class="flex items-center justify-center gap-4 mb-6">
                <?php
                $cats = get_the_category();
                if(!empty($cats)): ?>
                    <span class="text-secondary font-label-md text-caption uppercase tracking-wider"><?php echo esc_html($cats[0]->name); ?></span>
                <?php endif; ?>
                <span class="text-surface-variant">•</span>
                <time class="font-body-md text-caption text-on-surface-variant" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            </div>
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6"><?php the_title(); ?></h1>
            <div class="font-body-md text-caption text-on-surface-variant">
                <?php esc_html_e('By', 'novara'); ?> <span class="font-medium text-primary"><?php the_author(); ?></span>
            </div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
            <div class="w-full aspect-[16/9] md:aspect-[21/9] rounded-2xl overflow-hidden mb-12">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover', 'loading' => 'eager']); ?>
            </div>
        <?php endif; ?>

        <div class="prose prose-lg md:prose-xl prose-stone max-w-none text-on-surface-variant font-body-md mb-16">
            <?php the_content(); ?>
        </div>

        <footer class="border-t border-outline-variant/30 pt-8 mt-16 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant"><?php esc_html_e('Share', 'novara'); ?></span>
                <button aria-label="<?php esc_attr_e('Share Link', 'novara'); ?>" class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors">
                    <span class="material-symbols-outlined text-[18px]">share</span>
                </button>
            </div>
            <div class="flex gap-2 flex-wrap">
                <?php
                $tags = get_the_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="px-4 py-1.5 rounded-full bg-surface-container-low text-on-surface-variant font-label-md text-caption hover:bg-surface-variant transition-colors">#' . esc_html($tag->name) . '</a>';
                    }
                }
                ?>
            </div>
        </footer>
    </article>

    <!-- Comments Section -->
    <?php if (comments_open() || get_comments_number()) : ?>
        <section class="mt-16 pt-16 border-t border-outline-variant/30">
            <?php comments_template(); ?>
        </section>
    <?php endif; ?>

<?php endwhile; ?>
</main>
<?php get_footer(); ?>