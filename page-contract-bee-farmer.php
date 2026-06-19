<?php
/* Template Name: Contract Bee Farmer */
get_header();
?>

<!-- Hero Section -->
<header class="relative w-full min-h-[80vh] flex items-center pt-20 pb-32">
<div class="absolute inset-0 z-0">
<img loading="eager" alt="Sunset view of bee boxes lined up on a rocky landscape with beekeepers tending to them in the distance." class="w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpuhS2pB4wCKonB8owglyOqTCPaF6laShZBeF1-EnLVyXJe49UCqSUKZMj-MKbodFQKuV76cwakAFtOOALQN_IukO_V6uDxR6JE-1u221lEPcZNToiGjASiD4nC9HYo2tW35Z1aww1XxnqFH1jqnnKRkw3JkJEtkmh9BzAvbsAgyfF0TcEylUfWLkEENuGINXXHYZaZ9nNuN-YAfrTrHvQ5S2DsE9NfQ0Uda0UoAaZef9iNijNKSOWewz4-7eiSrD_WbFhG6xB3nE"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/50 to-transparent"></div>
</div>
<div class="relative z-10 w-full px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="max-w-2xl text-on-primary">
<span class="inline-block py-1 px-3 mb-6 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-md text-label-md uppercase tracking-wider"><?php echo esc_html(novara_get_field('hero_badge', __('Partnership Opportunity', 'novara'), get_the_ID())); ?></span>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg mb-6 leading-tight"><?php echo wp_kses_post(novara_get_field('hero_title', __('Be a Contract <br/><span class="text-inverse-primary">Bee Farmer</span>', 'novara'), get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg mb-10 text-surface-bright opacity-90 max-w-xl leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('hero_subtitle', __('Got land that’s too dry, rocky, or remote for traditional crops? Don’t let it go to waste—partner with Novala Bee Works to establish thriving apiaries that yield golden returns.', 'novara'), get_the_ID())); ?>
</p>
<div class="flex flex-col sm:flex-row gap-4">
<a href="<?php echo esc_url(novara_get_field('hero_btn1_url', __('#apply', 'novara'), get_the_ID())); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-primary text-on-primary font-label-md text-label-md rounded transition-colors hover:bg-secondary">
    <?php echo esc_html(novara_get_field('hero_btn1_text', __('Partner With Us', 'novara'), get_the_ID())); ?>
</a>
<a href="<?php echo esc_url(novara_get_field('hero_btn2_url', __('#value', 'novara'), get_the_ID())); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-primary-fixed text-primary-fixed font-label-md text-label-md rounded transition-colors hover:bg-primary-fixed/10">
    <?php echo esc_html(novara_get_field('hero_btn2_text', __('Learn More', 'novara'), get_the_ID())); ?>
</a>
</div>
</div>
</div>
</header>
<!-- Value Proposition Section -->
<section class="py-24 md:py-32 bg-surface" id="value">
<div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="text-center max-w-3xl mx-auto mb-20">
<h2 class="font-headline-md text-headline-md text-on-surface mb-6"><?php echo esc_html(novara_get_field('vp_title', __('Turn your marginal land into profit with contract beekeeping!', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
    <?php echo wp_kses_post(novara_get_field('vp_text', __('Novala Bee Works partners with farmers like you to establish thriving apiaries, boosting your income while supporting vital biodiversity. We provide the expertise, you provide the space.', 'novara'), get_the_ID())); ?>
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<?php
if (function_exists('have_rows') && have_rows('vp_list', get_the_ID())):
    $i = 0;
    while (have_rows('vp_list', get_the_ID())): the_row();
        $mt = ($i == 1) ? 'md:mt-8' : (($i == 2) ? 'md:mt-16' : '');
?>
<div class="bg-surface-bright rounded-xl p-8 ambient-shadow ambient-shadow-hover transition-all duration-300 flex flex-col h-full border border-surface-variant/50 <?php echo esc_attr($mt); ?>">
<div class="w-14 h-14 rounded-full bg-secondary-fixed/20 flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'wght' 200;"><?php echo esc_html(novara_get_sub_field('icon')); ?></span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4"><?php echo esc_html(novara_get_sub_field('title')); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow"><?php echo wp_kses_post(novara_get_sub_field('text')); ?></p>
</div>
<?php
    $i++;
    endwhile;
else: ?>
<!-- Fallbacks -->
<div class="bg-surface-bright rounded-xl p-8 ambient-shadow ambient-shadow-hover transition-all duration-300 flex flex-col h-full border border-surface-variant/50">
<div class="w-14 h-14 rounded-full bg-secondary-fixed/20 flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'wght' 200;">landscape</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Land Optimization</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                        Transform dry, rocky, or difficult-to-farm terrain into productive agricultural assets without intensive irrigation or soil preparation.
                    </p>
</div>
<div class="bg-surface-bright rounded-xl p-8 ambient-shadow ambient-shadow-hover transition-all duration-300 flex flex-col h-full border border-surface-variant/50 mt-0 md:mt-8">
<div class="w-14 h-14 rounded-full bg-secondary-fixed/20 flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'wght' 200;">storefront</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Guaranteed Market</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                        Enjoy secure, reliable income with access to Novala's premium distribution network. We guarantee purchase of all quality honey produced.
                    </p>
</div>
<div class="bg-surface-bright rounded-xl p-8 ambient-shadow ambient-shadow-hover transition-all duration-300 flex flex-col h-full border border-surface-variant/50 mt-0 md:mt-16">
<div class="w-14 h-14 rounded-full bg-secondary-fixed/20 flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'wght' 200;">psychiatry</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Biodiversity Support</h3>
<p class="font-body-md text-body-md text-on-surface-variant flex-grow">
                        Play a crucial role in enhancing local ecosystems through ethical apiculture, supporting native flora pollination and bee populations.
                    </p>
</div>
<?php endif; ?>
</div>
</div>
</section>
<!-- Application Section (Bento Grid Style) -->
<section class="py-24 md:py-32 bg-surface-container-low relative overflow-hidden" id="apply">
<!-- Decorative background element -->
<div class="absolute -top-[20%] -right-[10%] w-[60%] h-[140%] bg-surface rounded-full blur-3xl opacity-60 pointer-events-none"></div>
<div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<!-- Text Content -->
<div class="lg:col-span-5 flex flex-col justify-center">
<span class="text-secondary font-label-md text-label-md uppercase tracking-widest mb-4 block">Take the Next Step</span>
<h2 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6 leading-tight">Ready to make your land work for you?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-10">
                        Fill out the inquiry form with details about your location and land availability. Our apiary specialists will review your submission and contact you to discuss potential partnership structures tailored to your property.
                    </p>
<div class="flex items-center space-x-4 mb-8 p-4 bg-surface-bright rounded-lg border border-outline-variant/50">
<span class="material-symbols-outlined text-secondary text-2xl">verified_user</span>
<p class="font-body-md text-body-md text-on-surface-variant text-sm">Your information is secure and will only be used to evaluate partnership feasibility.</p>
</div>
</div>
<!-- Form Container -->
<div class="lg:col-span-7">
<div class="bg-surface-bright rounded-2xl p-8 md:p-12 ambient-shadow border border-surface-variant/50">
<?php
    $cf7_shortcode = novara_get_field('cf7_shortcode', __('', 'novara'), get_the_ID());
    if (!empty($cf7_shortcode) && shortcode_exists('contact-form-7')):
        echo do_shortcode($cf7_shortcode);
    else:
    ?>
    <form action="#" class="space-y-6" method="POST">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="space-y-2">
    <label class="block font-label-md text-label-md text-on-surface" for="firstName">First Name</label>
    <input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 text-on-surface font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="firstName" name="firstName" required="" type="text"/>
    </div>
    <div class="space-y-2">
    <label class="block font-label-md text-label-md text-on-surface" for="lastName">Last Name</label>
    <input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 text-on-surface font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="lastName" name="lastName" required="" type="text"/>
    </div>
    </div>
    <div class="space-y-2">
    <label class="block font-label-md text-label-md text-on-surface" for="email">Email Address</label>
    <input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 text-on-surface font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="email" name="email" required="" type="email"/>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="space-y-2">
    <label class="block font-label-md text-label-md text-on-surface" for="location">Farm Location (City/Region)</label>
    <input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 text-on-surface font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="location" name="location" required="" type="text"/>
    </div>
    <div class="space-y-2">
    <label class="block font-label-md text-label-md text-on-surface" for="landSize">Available Land Size (Acres/Hectares)</label>
    <input class="w-full bg-surface border border-outline-variant rounded px-4 py-3 text-on-surface font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="landSize" name="landSize" required="" type="text"/>
    </div>
    </div>
    <div class="space-y-2">
    <label class="block font-label-md text-label-md text-on-surface" for="description">Land Description</label>
    <textarea class="w-full bg-surface border border-outline-variant rounded px-4 py-3 text-on-surface font-body-md text-body-md focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none resize-none" id="description" name="description" placeholder="Briefly describe the terrain, current use, and water access if any..." rows="4"></textarea>
    </div>
    <button type="button" class="w-full md:w-auto mt-8 px-10 py-4 bg-primary text-on-primary font-label-md text-label-md rounded transition-all hover:bg-secondary hover:ambient-shadow-hover focus:ring-2 focus:ring-offset-2 focus:ring-primary flex items-center justify-center space-x-2" type="submit">
    <span>Submit Application</span>
    <span class="material-symbols-outlined text-sm">arrow_forward</span>
    </button>
    </form>
    <?php endif; ?>
</div>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>