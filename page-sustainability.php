<?php
/* Template Name: Sustainability */
get_header();
?>

<main>
<!-- Hero Section -->
<section class="relative h-[80vh] min-h-[600px] w-full flex items-center justify-center pt-20">
<div class="absolute inset-0 w-full h-full">
<?php $hero_image = novara_get_field('hero_image', __('https://lh3.googleusercontent.com/aida-public/AB6AXuBbw0znFa5tivs87Us9wZm_oFwtBRvy3AuNFVLxOIpmzAdBbmCYyHdEInGZ8U9n8-inWiF0ONlx7fKAzkqK0VnxQF75Dkq1CZeCZNPN2TYR6RfCo8dfumrley5-HMwBdYh8lJ32vSU25RpwCG-HKWP8OBsC_T-H0BSjnmSzlem5tYMNJfJQMaucb2IjPOZ6_E0rvuDdl5nI65tcB4n1BrZI-cVJeGoeaV5rhx02t2TfCnEt0AhahlnoAKXvRwgWMpMKjtBbyEvMyAk', 'novara'), get_the_ID()); ?>
<img loading="eager" class="w-full h-full object-cover" src="<?php echo esc_url($hero_image); ?>"/>
<div class="absolute inset-0 hero-gradient"></div>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center mt-12">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-primary mb-6 max-w-4xl mx-auto drop-shadow-md"><?php echo wp_kses_post(novara_get_field('hero_title', '
                    Environmental Stewardship at Ivovoani
                ', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-primary max-w-2xl mx-auto text-opacity-90 drop-shadow-sm"><?php echo wp_kses_post(novara_get_field('hero_subtitle', __('Our bee farm in Ngaamba is a testament to our commitment to responsible stewardship, biodiversity, and sustainable agriculture.', 'novara'), get_the_ID())); ?></p>
</div>
</section>
<!-- Reforestation & Native Flora -->
<section class="py-24 md:py-32 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<div class="md:col-span-5 md:col-start-1 space-y-6 order-2 md:order-1 mt-12 md:mt-0">
<div class="flex items-center space-x-2 text-secondary mb-4">
<span class="material-symbols-outlined icon-fill">eco</span>
<span class="font-label-md text-label-md uppercase tracking-widest"><?php echo esc_html(novara_get_field('refo_eyebrow', __('Restoration', 'novara'), get_the_ID())); ?></span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface"><?php echo esc_html(novara_get_field('refo_title', __('Reforestation & Native Flora', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('refo_text_1', __('Our extensive reforestation programme focuses on regenerating native flora to create a resilient ecosystem. We believe that true sustainability goes beyond simply doing less harm; it involves actively healing the land.', 'novara'), get_the_ID())); ?>
</p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('refo_text_2', __('By cultivating specific indigenous plant species, we are establishing a biodiverse positive carbon sink. Interestingly, our thriving bee colonies play a dual role—they pollinate the new growth and naturally deter larger animals from damaging the fragile saplings.', 'novara'), get_the_ID())); ?>
</p>
</div>
<div class="md:col-span-6 md:col-start-7 order-1 md:order-2">
<div class="rounded-xl overflow-hidden shadow-lg shadow-surface-tint/5 aspect-[4/5] md:aspect-auto h-full">
<?php $refo_img = novara_get_field('refo_image', __('https://lh3.googleusercontent.com/aida-public/AB6AXuAep_GXg7Bdux_7H1JP1NtDAdqVZtrOSxC8pFE1gkEfCxrOq9toN7JSzE1zCNysNWzm13KfkP5-Re9W4ZwLNrIuDw2758Cp9Ln8fMihGKnLARnLirlOWGFPkTJKjNUGRZop2nifqx9AIR8a7yOoEjnkQYcIso-OMGBfE5wu_uPAsUbY1A8yIU_ERLX08GYBJTr_YgrWT_QfMHThGz5oUBmm6VrkWBvE8yRXabE3DwJh_B7ZD9lpOvOH2jlsVIRA5_dIYsVGenNVFlc', 'novara'), get_the_ID()); ?>
<img loading="lazy" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700 ease-in-out" src="<?php echo esc_url($refo_img); ?>"/>
</div>
</div>
</div>
</section>
<!-- Bee Welfare -->
<section class="py-24 md:py-32 bg-surface-container-low px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-16 max-w-3xl mx-auto">
<div class="flex justify-center items-center space-x-2 text-secondary mb-4">
<span class="material-symbols-outlined icon-fill">hive</span>
<span class="font-label-md text-label-md uppercase tracking-widest"><?php echo esc_html(novara_get_field('welfare_eyebrow', __('Sanctuary', 'novara'), get_the_ID())); ?></span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface mb-6"><?php echo esc_html(novara_get_field('welfare_title', __('Bee Welfare', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed"><?php echo wp_kses_post(novara_get_field('welfare_text', __('Providing a safe haven for feral colonies and creating migratory sanctuaries.', 'novara'), get_the_ID())); ?></p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<div class="md:col-span-7">
<div class="rounded-xl overflow-hidden shadow-lg shadow-surface-tint/5 aspect-video md:aspect-[16/10]">
<?php $welfare_img = novara_get_field('welfare_image', __('https://lh3.googleusercontent.com/aida-public/AB6AXuBeJgQYYgkYHZi5hvIXFOW3WuLegvuKromwiPjcYDa-gG6cZIqXnbx6F9rZ1pUSBmdSCv6J8g6jwMLo05ttfqVPngkO8F5_x_gmj5JEtsnl19C087zgN1aQkLn_TUU9062d8KLHq3OcCxQKCsoVB9qJ7D6mFLDB8Y0QFgINCtdZ_yDYbYrokUl39ILo_F4mifftnXHX3r-CzUve27nY1Ufyh9E14WnH17Jj_RCzEebsOrSTZ5MtMoksuMqORztON_p7uzh7nnclYLI', 'novara'), get_the_ID()); ?>
<img loading="lazy" class="w-full h-full object-cover" src="<?php echo esc_url($welfare_img); ?>"/>
</div>
</div>
<div class="md:col-span-4 md:col-start-9 space-y-6 mt-12 md:mt-0">
<?php
if (function_exists('have_rows') && have_rows('welfare_features', get_the_ID())):
    while (have_rows('welfare_features', get_the_ID())): the_row();
?>
<div class="p-8 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-primary"><?php echo esc_html(novara_get_sub_field('icon')); ?></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4"><?php echo esc_html(novara_get_sub_field('title')); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo wp_kses_post(novara_get_sub_field('text')); ?></p>
</div>
<?php
    endwhile;
else: ?>
<!-- Fallback -->
<div class="p-8 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 relative overflow-hidden group">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Innovative Housing</h3>
<p class="font-body-md text-body-md text-on-surface-variant">We utilize the innovative Novala top-bar hives...</p>
</div>
<?php endif; ?>
</div>
</div>
</div>
</section>
<!-- Model Agroforestry -->
<section class="py-24 md:py-32 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
<div class="max-w-4xl mx-auto space-y-8">
<span class="material-symbols-outlined text-4xl text-primary mb-2"><?php echo esc_html(novara_get_field('agro_icon', __('park', 'novara'), get_the_ID())); ?></span>
<h2 class="font-headline-md text-headline-md text-on-surface"><?php echo esc_html(novara_get_field('agro_title', __('A Model for Agroforestry', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('agro_text', __('Ivovoani serves as a model farm, demonstrating the powerful synergy of integrating apiculture, horticulture, and forestry. We offer immersive learning experiences for beekeepers and farmers, sharing our holistic approach to land management to inspire widespread ecological restoration.', 'novara'), get_the_ID())); ?>
</p>
<div class="pt-8">
<a href="<?php echo esc_url(novara_get_field('agro_button_link', __('#', 'novara'), get_the_ID())); ?>" class="inline-block px-8 py-4 bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider rounded shadow-md shadow-primary/20 hover:bg-primary-container hover:text-on-primary-container transition-all duration-300">
    <?php echo esc_html(novara_get_field('agro_button_text', __('Learn About Our Programs', 'novara'), get_the_ID())); ?>
</a>
</div>
</div>
</section>
</main>

<?php get_footer(); ?>
