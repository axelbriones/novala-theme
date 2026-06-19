<?php
/* Template Name: Experiential Beekeeping Tour */
get_header();
?>

<main class="pt-[104px]">
<!-- Hero Section -->
<section class="relative w-full h-[70vh] min-h-[600px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 w-full h-full">
<img loading="eager" alt="Experiential Beekeeping Tour" class="w-full h-full object-cover object-center brightness-[0.85]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASQPpw1Jw4HewJcZt_1f_r5RTC1DFlLK8FiLzhNtArejiyZq295qCRLgOlkdHIQymPyiSuluZ7whul660xSMh9ffF_zAEAeWHDG0SXzZ_n7Er45kGQAh8JZO8C1reo6QlsHMF0Yf42t8Ofdkpm1uknJet3LZKZHHPzMNnw8SkGX9TDPkSLf4y7c38Xwx_70R-TJXf_P67QHb6C8j3vxqU7Bjh0Aqm3XADib_iltOa-0dlVrxTnGxOu-YgneYo9HfoO8XF7DWi6QYA"/>
<div class="absolute inset-0 bg-gradient-to-t from-background/90 via-background/20 to-transparent"></div>
</div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto mt-20">
<span class="inline-block mb-6 px-4 py-1 rounded-full bg-secondary-fixed/90 text-on-secondary-fixed font-label-md text-label-md uppercase tracking-widest backdrop-blur-sm">Ivovoani Apiary</span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6"><?php echo wp_kses_post(novara_get_field('hero_title', __('Experiential Beekeeping Tour', 'novara'), get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">A deep dive into sustainable apiculture in the heart of Makueni County. Witness the harmony of nature and craft.</p>
</div>
</section>
<!-- Narrative Section -->
<section class="py-20 md:py-[120px] px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<div class="col-span-1 md:col-span-5 order-2 md:order-1 relative">
<div class="aspect-[4/5] rounded-lg overflow-hidden ambient-shadow">
<img loading="lazy" alt="Close up of artisanal beekeeper gently inspecting a golden honey comb frame. The scene is bathed in warm, dappled sunlight filtering through green leaves, highlighting the intricate hexagonal wax structure and the calm, steady hands of the steward. High editorial quality, warm amber tones." class="w-full h-full object-cover" data-alt="Close up of artisanal beekeeper gently inspecting a golden honey comb frame. The scene is bathed in warm, dappled sunlight filtering through green leaves, highlighting the intricate hexagonal wax structure and the calm, steady hands of the steward. High editorial quality, warm amber tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuClMdUNr9jymRRXgWyOfmrATL1-UIMCMOOyfcVWrRveRsBbj4AwDCs-MM6TwLeaAIERITCcqk2kyHmZ7-K68wb_cVdVljv06rvZDWSmV_38nyPtO-ACMVToGuVensRaOpP44DxU1mVyDsKFM4DNRtvuFM_5xR1DrBsPX_hSFGZxGsLTka8mrYf4hEO9KnUyHNEl9_9BLNRXBWbMwxA321QXzY1SHRLmQUcwysVfltDqOnXpIRCOUFYDobtcxX0gOWZIkNNikg6e4xs"/>
</div>
</div>
<div class="col-span-1 md:col-span-6 md:col-start-7 order-1 md:order-2 mb-10 md:mb-0">
<h2 class="font-headline-md text-headline-md text-primary mb-8"><?php echo esc_html(novara_get_field('exp_title', __('The Golden Hour Experience', 'novara'), get_the_ID())); ?></h2>
<div class="space-y-6 text-on-surface-variant font-body-md text-body-md">
    <?php echo wp_kses_post(novara_get_field('exp_text', __('<p>Step into the world of sustainable apiculture at our Ivovoani apiary. This is not merely a tour; it is an immersion into the delicate balance of the ecosystem that sustains our pollinators.</p><p>Guided by our master apiarists, you will journey through the sun-drenched savannah, learning the profound connection between native flora, traditional craftsmanship, and the production of pure, organic honey.</p>', 'novara'), get_the_ID())); ?>
<div class="pt-6">
<a href="<?php echo esc_url(novara_get_field('exp_button_url', __('#', 'novara'), get_the_ID())); ?>" class="inline-block bg-primary text-on-primary font-label-md text-label-md px-8 py-4 rounded hover:bg-surface-tint transition-colors ambient-shadow-hover"><?php echo esc_html(novara_get_field('exp_button_text', __('Book Your Journey', 'novara'), get_the_ID())); ?></a>
</div>
</div>
</div>
</div>
</section>
<!-- Highlights Grid -->
<section class="py-20 bg-surface-container-low px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Tour Highlights</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Discover the pillars of our stewardship and the intricate details of beekeeping.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<?php
if (function_exists('have_rows') && have_rows('highlights_list', get_the_ID())):
    while (have_rows('highlights_list', get_the_ID())): the_row();
?>
<div class="bg-surface rounded-xl p-8 ambient-shadow-hover border border-outline-variant/30">
<span class="material-symbols-outlined text-[32px] text-primary mb-6"><?php echo esc_html(novara_get_sub_field('icon')); ?></span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3"><?php echo esc_html(novara_get_sub_field('title')); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo wp_kses_post(novara_get_sub_field('description')); ?></p>
</div>
<?php
    endwhile;
else: ?>
<!-- Fallbacks -->
<div class="bg-surface rounded-xl p-8 ambient-shadow-hover border border-outline-variant/30">
<span class="material-symbols-outlined text-[32px] text-primary mb-6">visibility</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Mission &amp; Vision</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Understand our core philosophy of environmental stewardship and community empowerment.</p>
</div>
<!-- Other fallbacks... -->
<?php endif; ?>
</div>
</div>
</section>
<!-- Requirements & Pricing -->
<section class="py-20 md:py-[120px] px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
<!-- Requirements -->
<div>
<h2 class="font-headline-md text-headline-md text-primary mb-8"><?php echo esc_html(novara_get_field('reqs_title', __('Requirements & Gear', 'novara'), get_the_ID())); ?></h2>
<div class="bg-surface-container rounded-xl p-8 border border-outline-variant/50">
<p class="font-body-md text-body-md text-on-surface-variant mb-6"><?php echo wp_kses_post(novara_get_field('reqs_text', __('For your safety and comfort, proper attire is mandatory within the apiary bounds.', 'novara'), get_the_ID())); ?></p>
<ul class="space-y-4 mb-8">
<?php
if (function_exists('have_rows') && have_rows('reqs_list', get_the_ID())):
    while (have_rows('reqs_list', get_the_ID())): the_row();
?>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
<span class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html(novara_get_sub_field('item')); ?></span>
</li>
<?php
    endwhile;
else: ?>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
<span class="font-body-md text-body-md text-on-surface-variant">Full Bee Suit (Mandatory)</span>
</li>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
<span class="font-body-md text-body-md text-on-surface-variant">Sturdy Boots</span>
</li>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
<span class="font-body-md text-body-md text-on-surface-variant">Thick Protective Gloves</span>
</li>
<?php endif; ?>
</ul>
<div class="bg-surface p-6 rounded border border-secondary-fixed-dim/30">
<h4 class="font-headline-sm text-headline-sm text-primary mb-2 text-lg"><?php echo esc_html(novara_get_field('rental_title', __('Equipment Rental', 'novara'), get_the_ID())); ?></h4>
<p class="font-body-md text-body-md text-on-surface-variant text-sm"><?php echo wp_kses_post(novara_get_field('rental_text', __('Don\', 'novara')t have your own gear? We offer premium, freshly laundered satin bee suits for rent at KES 500 per session.', get_the_ID())); ?></p>
</div>
</div>
</div>
<!-- Pricing & Info -->
<div>
<h2 class="font-headline-md text-headline-md text-primary mb-8"><?php echo esc_html(novara_get_field('details_title', __('Investment & Details', 'novara'), get_the_ID())); ?></h2>
<div class="space-y-6 mb-10">
<!-- Essential Info -->
<?php
if (function_exists('have_rows') && have_rows('details_list', get_the_ID())):
    while (have_rows('details_list', get_the_ID())): the_row();
?>
<div class="flex gap-4 items-center p-4 bg-surface rounded-lg border border-outline-variant/30">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed shrink-0">
<span class="material-symbols-outlined"><?php echo esc_html(novara_get_sub_field('icon')); ?></span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant"><?php echo esc_html(novara_get_sub_field('label')); ?></p>
<p class="font-body-md text-body-md text-primary font-semibold"><?php echo esc_html(novara_get_sub_field('value')); ?></p>
</div>
</div>
<?php
    endwhile;
else: ?>
<div class="flex gap-4 items-center p-4 bg-surface rounded-lg border border-outline-variant/30">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed shrink-0">
<span class="material-symbols-outlined">schedule</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Duration</p>
<p class="font-body-md text-body-md text-primary font-semibold">1 Hour 30 Minutes</p>
</div>
</div>
<div class="flex gap-4 items-center p-4 bg-surface rounded-lg border border-outline-variant/30">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed shrink-0">
<span class="material-symbols-outlined">event</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Availability</p>
<p class="font-body-md text-body-md text-primary font-semibold">Saturdays Only</p>
</div>
</div>
<div class="flex gap-4 items-center p-4 bg-surface rounded-lg border border-outline-variant/30">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed shrink-0">
<span class="material-symbols-outlined">restaurant</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Refreshments</p>
<p class="font-body-md text-body-md text-primary font-semibold">Please carry your own food &amp; water</p>
</div>
</div>
<?php endif; ?>
</div>
<!-- Pricing Table -->
<div class="bg-surface rounded-xl overflow-hidden border border-outline-variant/50 ambient-shadow">
<div class="bg-surface-container-high py-4 px-6 border-b border-outline-variant/30">
<h3 class="font-headline-sm text-headline-sm text-primary text-xl"><?php echo esc_html(novara_get_field('pricing_title', __('Tiered Pricing', 'novara'), get_the_ID())); ?></h3>
</div>
<div class="divide-y divide-outline-variant/20">
<?php
if (function_exists('have_rows') && have_rows('pricing_tiers', get_the_ID())):
    while (have_rows('pricing_tiers', get_the_ID())): the_row();
?>
<div class="flex justify-between py-4 px-6 hover:bg-surface-container-lowest transition-colors">
<span class="font-body-md text-body-md text-on-surface-variant"><?php echo esc_html(novara_get_sub_field('tier')); ?></span>
<span class="font-label-md text-label-md text-primary"><?php echo esc_html(novara_get_sub_field('price')); ?></span>
</div>
<?php
    endwhile;
else: ?>
<div class="flex justify-between py-4 px-6 hover:bg-surface-container-lowest transition-colors">
<span class="font-body-md text-body-md text-on-surface-variant">1 Person</span>
<span class="font-label-md text-label-md text-primary">KES 3,000</span>
</div>
<div class="flex justify-between py-4 px-6 hover:bg-surface-container-lowest transition-colors">
<span class="font-body-md text-body-md text-on-surface-variant">2 Persons</span>
<span class="font-label-md text-label-md text-primary">KES 5,000</span>
</div>
<div class="flex justify-between py-4 px-6 hover:bg-surface-container-lowest transition-colors">
<span class="font-body-md text-body-md text-on-surface-variant">3 Persons</span>
<span class="font-label-md text-label-md text-primary">KES 7,000</span>
</div>
<div class="flex justify-between py-4 px-6 hover:bg-surface-container-lowest transition-colors">
<span class="font-body-md text-body-md text-on-surface-variant">4 Persons</span>
<span class="font-label-md text-label-md text-primary">KES 8,000</span>
</div>
<div class="flex justify-between py-4 px-6 hover:bg-surface-container-lowest transition-colors">
<span class="font-body-md text-body-md text-on-surface-variant">5 to 10 Persons</span>
<span class="font-label-md text-label-md text-primary">KES 10,000 Flat Rate</span>
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</section>
</main>

<?php get_footer(); ?>
