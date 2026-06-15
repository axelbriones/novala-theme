<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/section', 'hero'); ?>
    <?php get_template_part('template-parts/section', 'features'); ?>
    <?php get_template_part('template-parts/section', 'products'); ?>
    <?php get_template_part('template-parts/section', 'sustainability'); ?>
    <?php get_template_part('template-parts/section', 'newsletter'); ?>

    <?php
    // Global ACF Flexible Content Components Loop
    // This allows components defined in the ACF Options page to be rendered globally.
    if( function_exists('have_rows') && have_rows('global_components', 'option') ): ?>
        <section class="global-acf-components">
        <?php while ( have_rows('global_components', 'option') ) : the_row(); ?>

            <?php if( get_row_layout() == 'layout_hero' ): ?>
                <div class="acf-hero-section relative w-full h-[600px] flex items-center justify-center overflow-hidden" style="background-image: url('<?php echo esc_url(get_sub_field('image')); ?>'); background-size: cover; background-position: center;">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
                        <h2 class="font-display-lg text-on-primary mb-4"><?php echo esc_html(get_sub_field('title')); ?></h2>
                        <p class="font-body-lg text-on-primary/90"><?php echo esc_html(get_sub_field('subtitle')); ?></p>
                    </div>
                </div>

            <?php elseif( get_row_layout() == 'layout_cta' ): ?>
                <div class="acf-cta-section py-24 bg-surface-container-low text-center px-4">
                    <div class="max-w-3xl mx-auto">
                        <h2 class="font-headline-md text-primary mb-6"><?php echo esc_html(get_sub_field('title')); ?></h2>
                        <p class="font-body-md text-on-surface-variant mb-8"><?php echo esc_html(get_sub_field('text')); ?></p>
                        <?php
                        $link = get_sub_field('link');
                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="bg-primary text-on-primary font-label-md px-8 py-4 rounded hover:bg-secondary transition-colors" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endif; ?>

        <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
