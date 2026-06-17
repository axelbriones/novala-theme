<?php
/* Template Name: Customer Education */
get_header();
?>

<main class="flex-grow">
<!-- Hero Section -->
<section class="relative h-[614px] min-h-[500px] flex items-center justify-center bg-surface-container-low overflow-hidden">
<?php $hero_bg = novara_get_field('hero_image', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBR569pfaImskGT-NDTYcbL0L5IdmlEVmn8RHQZWjw21O4cA9xJUgvFUaxl17y1u08nvPIo7vgC2wJQIZUZ7p5X4S-T4hqhZ1oqgzQWaB1EGe15NRPol9iNOz8Xrr8n28EACq_u9qt89PJOPbtYt0N72533YvpdiSgExNQaEdDr1ZaVSfP3m6_dI_upJ_CaLCwQO8wbO7U8BusHfcLzRZMy30or7Bqf0b-K8itxqtBXIVyoN2_O11J9eVIEPDalFTRmKowBLE4fpIk', get_the_ID()); ?>
<div class="absolute inset-0 bg-cover bg-center opacity-60" style="background-image: url('<?php echo esc_url($hero_bg); ?>');">
</div>
<div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/40 to-transparent"></div>
<div class="relative z-10 text-center px-margin-desktop max-w-4xl mx-auto mt-20">
<h1 class="font-display-lg text-display-lg text-primary mb-6"><?php echo wp_kses_post(novara_get_field('hero_title', 'Customer Education', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto"><?php echo wp_kses_post(novara_get_field('hero_subtitle', 'Enrol today in our insightful beekeeping courses. Learn the art of apiculture from our master artisans.', get_the_ID())); ?></p>
</div>
</section>
<!-- Course Grid -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 gap-16">
<?php
if (function_exists('have_rows') && have_rows('courses_list', get_the_ID())):
    while (have_rows('courses_list', get_the_ID())): the_row();
        $badge = novara_get_sub_field('badge', 'In-person');
        $badge_color = (strtolower($badge) == 'virtual') ? 'bg-tertiary-fixed/90 text-on-tertiary-fixed' : 'bg-secondary-fixed/90 text-on-secondary-fixed';
?>
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden hover-lift flex flex-col border border-surface-container-high transition-colors hover:border-outline-variant">
<div class="h-64 overflow-hidden relative">
<img alt="<?php echo esc_attr(novara_get_sub_field('title')); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url(novara_get_sub_field('image')); ?>"/>
<div class="absolute top-4 left-4 <?php echo esc_attr($badge_color); ?> px-3 py-1 rounded-full font-label-md text-label-md shadow-sm backdrop-blur-sm">
    <?php echo esc_html($badge); ?>
</div>
</div>
<div class="p-8 flex-grow flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-2"><?php echo esc_html(novara_get_sub_field('title')); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">
    <?php echo wp_kses_post(novara_get_sub_field('description')); ?>
</p>
<div class="flex items-center justify-between border-t border-surface-variant pt-6 mb-8">
<div class="flex items-center text-on-surface-variant">
<span class="material-symbols-outlined mr-2 text-primary">calendar_month</span>
<span class="font-label-md text-label-md"><?php echo esc_html(novara_get_sub_field('date')); ?></span>
</div>
<div class="font-headline-sm text-headline-sm text-primary">
    <?php echo esc_html(novara_get_sub_field('price')); ?>
</div>
</div>
<div class="flex space-x-4">
<a href="<?php echo esc_url(novara_get_sub_field('inquire_link')); ?>" class="flex-1 text-center block bg-primary text-on-primary font-label-md text-label-md py-3 rounded hover:bg-primary-container transition-colors duration-300">
    Inquire
</a>
<a href="<?php echo esc_url(novara_get_sub_field('learn_more_link')); ?>" class="flex-1 text-center block bg-transparent text-secondary border-[1.5px] border-primary font-label-md text-label-md py-3 rounded hover:bg-surface-container-low transition-colors duration-300">
    Learn More
</a>
</div>
</div>
</div>
<?php
    endwhile;
else: ?>
<!-- Fallbacks -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden hover-lift flex flex-col border border-surface-container-high transition-colors hover:border-outline-variant">
<div class="h-64 overflow-hidden relative">
<img alt="In-person beekeeping training" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrQtU_q5FsEFZbHB_6Ov_HXaCr1Wh-9eO62uWcgqjBxfxAOx6uHy-XqcLfc8bzPePCb2U2KJmuRZJ7N1htyouuXIw0NnVWaaAzRRpkNnejdqBHcvPVvYihh8BKyFBI4tiWf6KhdPfH7xQoGVpWRpwZCMBH9TL5IINLqKDxweC5_jEau3q_t9jHD_ZMgXaz50VG6zJWum7amUXX9UIDaNarAQ1RX7hzOB45j_ajhvKSPkOSjpX5A3MIoUfimsaOPhBPIL-imn8SyXE"/>
<div class="absolute top-4 left-4 bg-secondary-fixed/90 text-on-secondary-fixed px-3 py-1 rounded-full font-label-md text-label-md shadow-sm backdrop-blur-sm">
                            In-person
                        </div>
</div>
<div class="p-8 flex-grow flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-2">DISCOVER BEEKEEPING</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">
                            A comprehensive 3-hour experiential training for new beekeepers. Get hands-on experience with our hives.
                        </p>
<div class="flex items-center justify-between border-t border-surface-variant pt-6 mb-8">
<div class="flex items-center text-on-surface-variant">
<span class="material-symbols-outlined mr-2 text-primary">calendar_month</span>
<span class="font-label-md text-label-md">DD-MMMM-YYYY</span>
</div>
<div class="font-headline-sm text-headline-sm text-primary">
                                KES 988
                            </div>
</div>
<div class="flex space-x-4">
<button class="flex-1 bg-primary text-on-primary font-label-md text-label-md py-3 rounded hover:bg-primary-container transition-colors duration-300">
                                Inquire
                            </button>
<button class="flex-1 bg-transparent text-secondary border-[1.5px] border-primary font-label-md text-label-md py-3 rounded hover:bg-surface-container-low transition-colors duration-300">
                                Learn More
                            </button>
</div>
</div>
</div>
<?php endif; ?>
</div>
</section>
</main>

<?php get_footer(); ?>
