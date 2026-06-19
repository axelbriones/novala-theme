<?php
/* Template Name: Our Story */
get_header();
?>

<main class="flex-grow pt-[88px]">
<!-- Hero Section -->
<header class="relative w-full h-[80vh] min-h-[600px] flex items-center justify-center mt-24">
<div class="absolute inset-0 z-0">
<img loading="eager" alt="Beekeepers tending to traditional woven hives in a tall grass savanna during a breathtaking golden hour sunset, capturing the artisanal essence and raw nature of organic honey harvesting." class="w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfZ7_QnFjAQAPQ7wn1MFVoOJ_XYV8Vin2qS_c5zW_zaobfJFqS59oCnaVjTlfn_9cpbHxHksdbFpP_NwvbLY28aEMhhmor6CvVWbiZ4v8x3bUwYsr2KIpGA1Waq6_r63FO8HQW5028f69zkPA-3KKfv1WNn67duQiwicGx-SvzywRKlgNMczlzavQrBuHsZt94bdBvuRr6E54b22hyosAdZeBOWva34-NZz1nF0XaH5XW3xlxB0Ttp3n12b1xFGeVD_ZAbvQiLJAE"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-surface/30 mix-blend-multiply"></div>
</div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-surface-container-lowest mb-6 drop-shadow-md"><?php echo wp_kses_post(novara_get_field('hero_title', __('Born from passion,<br/>dedicated to nature.', 'novara'), get_the_ID())); ?></h1>
</div>
</header>
<!-- Introduction -->
<section class="py-24 px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto text-center">
<h2 class="font-headline-md text-headline-md text-primary mb-8"><?php echo esc_html(novara_get_field('intro_title', __('Welcome to Novala Bee Works', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('intro_text', __('We are more than just purveyors of honey; we are stewards of the environment. Our journey began with a profound respect for the delicate balance of nature and a passion for sustainable apiculture. At Novala Bee Works, we believe that true quality comes from a deep, harmonious relationship with our bees and the land they forage. We are dedicated to providing products that are as pure and unadulterated as the landscapes from which they originate.', 'novara'), get_the_ID())); ?>
</p>
</section>
<!-- Impact Section -->
<section class="py-24 bg-surface-container-low px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto">
<h2 class="font-headline-md text-headline-md text-primary text-center mb-16"><?php echo esc_html(novara_get_field('impact_title', __('Our Impact', 'novara'), get_the_ID())); ?></h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<?php
if ( function_exists('have_rows') && have_rows('impact_items', get_the_ID()) ) :
    while ( have_rows('impact_items', get_the_ID()) ) : the_row();
?>
    <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(122,85,0,0.1)] transition-shadow duration-300">
    <div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center mb-6 text-primary">
    <span class="material-symbols-outlined text-3xl" data-icon="<?php echo esc_attr(get_sub_field('icon')); ?>"><?php echo esc_html(get_sub_field('icon')); ?></span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-4"><?php echo esc_html(get_sub_field('title')); ?></h3>
    <p class="text-on-surface-variant"><?php echo esc_html(get_sub_field('description')); ?></p>
    </div>
<?php
    endwhile;
else :
    // Static Fallbacks
?>
    <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(122,85,0,0.1)] transition-shadow duration-300">
    <div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center mb-6 text-primary">
    <span class="material-symbols-outlined text-3xl" data-icon="group">group</span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Empowering Farmers</h3>
    <p class="text-on-surface-variant">We train and contract local farmers, providing them with sustainable livelihoods while promoting ethical beekeeping practices across our communities.</p>
    </div>
    <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(122,85,0,0.1)] transition-shadow duration-300">
    <div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center mb-6 text-primary">
    <span class="material-symbols-outlined text-3xl" data-icon="favorite">favorite</span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Colony Welfare</h3>
    <p class="text-on-surface-variant">The health of our bees is paramount. We employ organic, low-stress management techniques to ensure our colonies thrive season after season.</p>
    </div>
    <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(122,85,0,0.1)] transition-shadow duration-300">
    <div class="w-16 h-16 rounded-full bg-secondary-fixed flex items-center justify-center mb-6 text-primary">
    <span class="material-symbols-outlined text-3xl" data-icon="eco">eco</span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Environmental Stewardship</h3>
    <p class="text-on-surface-variant">By protecting natural habitats and promoting biodiversity, we ensure that our practices give back to the earth more than they take.</p>
    </div>
<?php endif; ?>
</div>
</div>
</section>
<!-- Mission & Vision -->
<section class="py-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-24">
<div class="relative p-12 bg-surface border border-outline-variant/30 rounded-2xl overflow-hidden group">
<div class="absolute inset-0 bg-primary/5 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out"></div>
<div class="relative z-10">
<span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="flag">flag</span>
<h2 class="font-headline-md text-headline-md text-primary mb-6">Our Mission</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                        <?php echo esc_html(novara_get_field('mission_text', __('To delight customers with products they will consume confidently, knowing they are crafted with uncompromising integrity and a deep respect for nature.', 'novara'), get_the_ID())); ?>
                    </p>
</div>
</div>
<div class="relative p-12 bg-surface border border-outline-variant/30 rounded-2xl overflow-hidden group">
<div class="absolute inset-0 bg-secondary/5 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out"></div>
<div class="relative z-10">
<span class="material-symbols-outlined text-4xl text-secondary mb-6 block" data-icon="visibility">visibility</span>
<h2 class="font-headline-md text-headline-md text-primary mb-6">Our Vision</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                        <?php echo esc_html(novara_get_field('vision_text', __('To be a top-tier apiculture products and solutions provider, recognized globally for our commitment to quality, sustainability, and ethical stewardship.', 'novara'), get_the_ID())); ?>
                    </p>
</div>
</div>
</div>
</section>
<!-- Our Values -->
<section class="py-24 bg-surface-container-low px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto">
<h2 class="font-headline-md text-headline-md text-primary text-center mb-16"><?php echo esc_html(novara_get_field('values_title', __('Core Values', 'novara'), get_the_ID())); ?></h2>
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
<?php
if ( function_exists('have_rows') && have_rows('core_values', get_the_ID()) ) :
    while ( have_rows('core_values', get_the_ID()) ) : the_row();
?>
    <div class="p-6 bg-surface rounded-xl border border-outline-variant/20 flex flex-col items-center text-center hover:-translate-y-1 transition-transform duration-300">
    <span class="material-symbols-outlined text-secondary mb-4" data-icon="<?php echo esc_attr(get_sub_field('icon')); ?>"><?php echo esc_html(get_sub_field('icon')); ?></span>
    <h4 class="font-label-md text-label-md text-on-surface"><?php echo esc_html(get_sub_field('title')); ?></h4>
    </div>
<?php
    endwhile;
else :
    // Static Fallbacks
    $default_values = [
        ['icon' => 'sentiment_satisfied', 'title' => 'Customer-focused'],
        ['icon' => 'local_fire_department', 'title' => 'Passion'],
        ['icon' => 'diversity_3', 'title' => 'Teamwork'],
        ['icon' => 'handshake', 'title' => 'Respect'],
        ['icon' => 'verified_user', 'title' => 'Integrity'],
        ['icon' => 'pets', 'title' => 'Animal welfare'],
        ['icon' => 'nature', 'title' => 'Conserving nature'],
        ['icon' => 'lightbulb', 'title' => 'Innovation'],
        ['icon' => 'fact_check', 'title' => 'Accountability'],
        ['icon' => 'explore', 'title' => 'Responsible leadership'],
    ];
    foreach ($default_values as $val) :
?>
    <div class="p-6 bg-surface rounded-xl border border-outline-variant/20 flex flex-col items-center text-center hover:-translate-y-1 transition-transform duration-300">
    <span class="material-symbols-outlined text-secondary mb-4" data-icon="<?php echo esc_attr($val['icon']); ?>"><?php echo esc_html($val['icon']); ?></span>
    <h4 class="font-label-md text-label-md text-on-surface"><?php echo esc_html($val['title']); ?></h4>
    </div>
<?php
    endforeach;
endif;
?>
</div>
</div>
</section>
</main>

<?php get_footer(); ?>
