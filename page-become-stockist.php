<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Template Name: Become a Stockist */
get_header();
?>

<!-- Main Content Canvas -->
<main class="min-h-screen">
<!-- Hero Section -->
<section class="relative w-full h-[614px] md:h-[716px] flex items-center justify-center overflow-hidden bg-tertiary">
<!-- Background Image -->
<div class="absolute inset-0 z-0">
<?php $hero_image = novara_get_field('hero_image', __('https://lh3.googleusercontent.com/aida-public/AB6AXuDv8Gqg1V1xUNhF7DEoq4bM1Ufo3gVp_diGAe_-bOOAndkL_uZIYnZ_BEhOtpfsDDREkphkaLvWiRK5X2ThNQXttutocc6Qu-oyu0G2GTM8xPbxleAkw_4u3eIp7hzsqtt74qtkk3zgDsbLNaQJd1YF9mZOC7oEpNxGrAtpvYX0qoPwDwFqr4AgenuIGufUKXyvGVAeOHc86SWK92FEO9snq1W7QERMeH1dIsZyQIsRQg0rc3p1khC_d_dhUtzdZaUe57hAvfYCPo0', 'novara'), get_the_ID()); ?>
<img loading="eager" fetchpriority="high" decoding="sync" alt="<?php echo esc_attr(novara_get_field('hero_title', __('Become a Stockist', 'novara'), get_the_ID())); ?>" class="w-full h-full object-cover opacity-80 mix-blend-overlay" src="<?php echo esc_url($hero_image); ?>"/>
<!-- Overlay gradient for text legibility -->
<div class="absolute inset-0 bg-gradient-to-t from-on-background/80 via-on-background/40 to-transparent"></div>
</div>
<!-- Hero Content -->
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-3xl mx-auto mt-16 md:mt-0">
<span class="block font-label-md text-label-md text-primary-fixed mb-4 tracking-widest uppercase opacity-90">Partnerships</span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-tertiary mb-6 drop-shadow-md"><?php echo wp_kses_post(novara_get_field('hero_title', __('Become a Stockist', 'novara'), get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-surface-variant md:px-12"><?php echo wp_kses_post(novara_get_field('hero_subtitle', __('Join our journey of artisanal craftsmanship. Partner with Melliflua to bring the finest, sustainably sourced honey to your community.', 'novara'), get_the_ID())); ?></p>
</div>
</section>
<!-- Benefits Section (Bento Grid Style) -->
<section class="py-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto relative">
<div class="ambient-glow top-0 right-10"></div>
<div class="text-center mb-16 relative z-10">
<h2 class="font-headline-md text-headline-md text-on-surface mb-4"><?php echo esc_html(novara_get_field('benefits_title', __('Why Partner With Us?', 'novara'), get_the_ID())); ?></h2>
<div class="w-16 h-[1px] bg-outline-variant mx-auto"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-gutter relative z-10">
<?php
if (function_exists('have_rows') && have_rows('benefits_list', get_the_ID())):
    $i = 0;
    while (have_rows('benefits_list', get_the_ID())): the_row();
        $icon = novara_get_sub_field('icon', 'check_circle');
        $title = novara_get_sub_field('title', 'Benefit');
        $text = novara_get_sub_field('text', 'Benefit description.');
        $mt = ($i == 1) ? 'md:mt-8' : ''; // stagger the middle card
?>
<div class="glass-panel p-10 rounded-xl flex flex-col items-center text-center transition-transform hover:-translate-y-1 duration-500 soft-shadow group <?php echo esc_attr($mt); ?>">
<div class="w-16 h-16 rounded-full bg-surface-container-low flex items-center justify-center mb-6 text-secondary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[32px] font-light" style="font-variation-settings: 'FILL' 0, 'wght' 200;"><?php echo esc_html($icon); ?></span>
</div>
<h3 class="font-headline-sm text-[20px] text-on-surface mb-3"><?php echo esc_html($title); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo wp_kses_post($text); ?></p>
</div>
<?php
    $i++;
    endwhile;
else: ?>
<!-- Fallback if no ACF rows exist -->
<div class="glass-panel p-10 rounded-xl flex flex-col items-center text-center transition-transform hover:-translate-y-1 duration-500 soft-shadow group">
<div class="w-16 h-16 rounded-full bg-surface-container-low flex items-center justify-center mb-6 text-secondary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[32px] font-light" style="font-variation-settings: 'FILL' 0, 'wght' 200;">local_offer</span>
</div>
<h3 class="font-headline-sm text-[20px] text-on-surface mb-3">Wholesale Prices</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Access our premium artisanal products at exclusive wholesale rates, designed to support healthy margins for your business.
                    </p>
</div>
<div class="glass-panel p-10 rounded-xl flex flex-col items-center text-center transition-transform hover:-translate-y-1 duration-500 soft-shadow group md:mt-8">
<div class="w-16 h-16 rounded-full bg-surface-container-low flex items-center justify-center mb-6 text-secondary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[32px] font-light" style="font-variation-settings: 'FILL' 0, 'wght' 200;">account_balance_wallet</span>
</div>
<h3 class="font-headline-sm text-[20px] text-on-surface mb-3">Credit Facilities</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Flexible payment terms and credit options available to established partners to help manage cash flow effectively.
                    </p>
</div>
<div class="glass-panel p-10 rounded-xl flex flex-col items-center text-center transition-transform hover:-translate-y-1 duration-500 soft-shadow group">
<div class="w-16 h-16 rounded-full bg-surface-container-low flex items-center justify-center mb-6 text-secondary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[32px] font-light" style="font-variation-settings: 'FILL' 0, 'wght' 200;">campaign</span>
</div>
<h3 class="font-headline-sm text-[20px] text-on-surface mb-3">Promotional Support</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Receive dedicated marketing materials, staff training resources, and promotional support to help tell our shared story.
                    </p>
</div>
<?php endif; ?>
</div>
</section>
</main>

<?php get_footer(); ?>