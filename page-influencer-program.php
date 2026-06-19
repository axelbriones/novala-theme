<?php
/* Template Name: Influencer Program */
get_header();
?>

<!-- Main Content -->
<main class="flex-grow">
<!-- Hero Section -->
<section class="relative w-full min-h-[716px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0 bg-surface-container-low">
<img loading="eager" alt="Hero Background" class="w-full h-full object-cover object-center opacity-80 mix-blend-multiply" data-alt="A warm, sun-drenched lifestyle photograph set during golden hour. The image features a rustic outdoor table set with a jar of golden, glowing honey, a wooden honey dipper, and fresh wildflowers. Sunlight streams through leaves, creating soft, dappled shadows across the scene. The aesthetic is Artisanal Modernism—high-end, serene, and deeply connected to nature, utilizing a palette of deep amber and warm cream tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIdIzbarNIlYWQ98YvXD0qoVqXPgdiUhd_HZmj0UKmcJuhkLQ3pw-h8-vucFHel7NnkjRZJkwA2b0jSonzygfu36fCRS3WZSHU60DOwFhlRLUirumxaAmY6j7iq37OH4y2QHTpm8pmD3DRbl0gsdnpqZNV-yuvhON9lQP1xsqSFjyIdJKM8apCQ2TK5PuaTQksDfLd3PYBNDQFh9a6Fe3HjyH_OwQMV4tVeXWTa1hMKidxOqxAdpGqztqsoBYLf-NJD7CJf5mSJNc"/>
<!-- Warm Gradient Overlay to ensure text readability while maintaining golden hour vibe -->
<div class="absolute inset-0 bg-gradient-to-t from-background via-surface/60 to-transparent"></div>
</div>
<div class="relative z-10 max-w-3xl mx-auto px-margin-mobile text-center pt-20 pb-32">
<span class="inline-block px-4 py-1 mb-6 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md tracking-wider uppercase shadow-ambient">Partnerships</span>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-background mb-8"><?php echo wp_kses_post(novara_get_field('hero_title', '
                    Join the Novala Bee Works Influencer Program
                ', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-12">
                    Become an ambassador for sustainable beekeeping, premium honey, and eco-friendly practices. Share your love for natural products while earning rewards.
                </p>
</div>
</section>
<!-- Benefits Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-background">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-md text-headline-md text-on-background"><?php echo esc_html(novara_get_field('benefits_title', __('Benefits of Joining', 'novara'), get_the_ID())); ?></h2>
<div class="w-16 h-1 bg-primary mx-auto mt-6 rounded-full opacity-60"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<?php
if (function_exists('have_rows') && have_rows('benefits_list', get_the_ID())):
    $i = 0;
    while (have_rows('benefits_list', get_the_ID())): the_row();
        $mt = ($i % 2 !== 0) ? 'mt-0 md:mt-8' : '';
?>
<div class="bg-surface-container-lowest p-8 rounded-2xl shadow-ambient shadow-ambient-hover transition-all duration-300 flex flex-col items-center text-center group <?php echo esc_attr($mt); ?>">
<div class="w-16 h-16 rounded-full bg-primary-fixed flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-on-primary-fixed text-3xl" data-icon="<?php echo esc_attr(novara_get_sub_field('icon')); ?>"><?php echo esc_html(novara_get_sub_field('icon')); ?></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-background mb-4"><?php echo esc_html(novara_get_sub_field('title')); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo wp_kses_post(novara_get_sub_field('text')); ?></p>
</div>
<?php
    $i++;
    endwhile;
else: ?>
<!-- Fallbacks -->
<div class="bg-surface-container-lowest p-8 rounded-2xl shadow-ambient shadow-ambient-hover transition-all duration-300 flex flex-col items-center text-center group">
<div class="w-16 h-16 rounded-full bg-primary-fixed flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-on-primary-fixed text-3xl" data-icon="redeem">redeem</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-background mb-4">Products &amp; Perks</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Free products or exclusive discounts on our artisanal honey collections.</p>
</div>
<!-- More fallbacks... -->
<?php endif; ?>
</div>
</div>
</section>
<!-- CTA / Application Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface-container-low relative overflow-hidden">
<!-- Decorative organic blob -->
<div class="absolute top-0 right-0 -mr-32 -mt-32 w-96 h-96 bg-primary-fixed-dim rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
<div class="absolute bottom-0 left-0 -ml-32 -mb-32 w-96 h-96 bg-secondary-fixed rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
<div class="max-w-4xl mx-auto relative z-10 bg-surface-container-lowest rounded-3xl p-10 md:p-16 shadow-ambient">
<div class="text-center">
<span class="material-symbols-outlined text-primary text-5xl mb-6" data-icon="<?php echo esc_attr(novara_get_field('cta_icon', __('mail', 'novara'), get_the_ID())); ?>"><?php echo esc_html(novara_get_field('cta_icon', __('mail', 'novara'), get_the_ID())); ?></span>
<h2 class="font-headline-md text-headline-md text-on-background mb-6"><?php echo esc_html(novara_get_field('cta_title', __('Ready to Collaborate?', 'novara'), get_the_ID())); ?></h2>
<div class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-2xl mx-auto leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('cta_text', __('If you’re up for this, send us an email at <span class="font-semibold text-primary">info@novalabeeworks.com</span> with your details and why you’d love to be part of our Influencer Program. We can’t wait to hear from you!', 'novara'), get_the_ID())); ?>
</div>
<a role="link" class="inline-flex items-center justify-center px-8 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-full shadow-sm hover:bg-primary-container hover:text-on-primary-container hover:-translate-y-1 transition-all duration-300" href="<?php echo esc_url(novara_get_field('cta_btn_url', __('mailto:info@novalabeeworks.com', 'novara'), get_the_ID())); ?>">
    <?php echo esc_html(novara_get_field('cta_btn_text', __('Be an Influencer', 'novara'), get_the_ID())); ?>
    <span class="material-symbols-outlined ml-2 text-[20px]" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</section>
</main>

<?php get_footer(); ?>