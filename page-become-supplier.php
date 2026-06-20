<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
/* Template Name: Become a Supplier */
get_header();
?>

<!-- Hero Section -->
<section class="relative w-full h-[614px] min-h-[400px] flex items-center justify-center bg-surface-variant overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center opacity-80 mix-blend-multiply" data-alt="A macro photograph of golden honeycomb frames bathed in warm, late afternoon sunlight. The amber honey glistens within the perfectly hexagonal wax cells, conveying a sense of rich, artisanal craftsmanship. The lighting creates a high-end, editorial 'Golden Hour' aesthetic, emphasizing the organic texture and purity of the natural produce. Soft, diffused shadows enhance the depth without overwhelming the warm cream and deep amber palette." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAk_iwZQwS3-8D4hdgIUVho-P4Y58q7lmP2JcmM3mjK8rk5vUtscQTU2oGPqkczCPE93ytEHmXK-4c1lSIWA3PKdnBJz8Hao_SHVDsbF0PCp5cNlp0JtOHV1dIvxy6X-03WfCZTx98cmuFKuZg6SOrcqTJWMgZlErWCsc0cIp1HMYj2QUyHLcEoENeLgnZOm1iX8C4H4j7DCjVd0ZYjtgq3tj8f43E7n1rZYWuNz7NEo5oIhkHvJuZtqAVeoIoN6jaW4O6-QmCa-Zk');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-3xl mx-auto">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6"><?php echo wp_kses_post(novara_get_field('hero_title', __('BECOME A SUPPLIER', 'novara'), get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto"><?php echo wp_kses_post(novara_get_field('hero_subtitle', __('Join our artisanal network and bring your high-quality, sustainable harvests to a broader market.', 'novara'), get_the_ID())); ?></p>
</div>
</section>
<!-- Value Proposition Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface">
<div class="max-w-container-max mx-auto grid md:grid-cols-2 gap-16 items-center">
<div class="space-y-8 order-2 md:order-1">
<h2 class="font-headline-md text-headline-md text-primary"><?php echo esc_html(novara_get_field('vp_title', __('A Partnership Rooted in Quality', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
    <?php echo wp_kses_post(novara_get_field('vp_text', __('Becoming a supplier for Novala Bee Works offers numerous benefits, including access to a ready market for high-quality products, ensuring consistent demand and long-term supply opportunities. As part of an integrated value chain, suppliers enjoy streamlined processes and collaborative product development.', 'novara'), get_the_ID())); ?>
</p>
<ul class="space-y-4 pt-4">
<?php
if (function_exists('have_rows') && have_rows('vp_list', get_the_ID())):
    while (have_rows('vp_list', get_the_ID())): the_row();
?>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1"><?php echo esc_html(novara_get_sub_field('icon', 'check')); ?></span>
<div>
<h3 class="font-label-md text-label-md text-on-background mb-1"><?php echo esc_html(novara_get_sub_field('title')); ?></h3>
<p class="font-body-md text-body-md text-on-surface-variant text-sm"><?php echo wp_kses_post(novara_get_sub_field('text')); ?></p>
</div>
</li>
<?php
    endwhile;
else: ?>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">handshake</span>
<div>
<h3 class="font-label-md text-label-md text-on-background mb-1">Consistent Demand</h3>
<p class="font-body-md text-body-md text-on-surface-variant text-sm">Access to our established premium market.</p>
</div>
</li>
<li class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">nature_people</span>
<div>
<h3 class="font-label-md text-label-md text-on-background mb-1">Collaborative Development</h3>
<p class="font-body-md text-body-md text-on-surface-variant text-sm">Work closely with our team to refine and elevate your artisanal goods.</p>
</div>
</li>
<?php endif; ?>
</ul>
<div class="pt-6">
<a role="link" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-on-primary font-label-md text-label-md rounded-full hover:bg-secondary transition-colors shadow-sm" href="#application-form">
    <?php echo esc_html(novara_get_field('vp_button_text', __('Become A Supplier', 'novara'), get_the_ID())); ?>
</a>
</div>
</div>
<div class="order-1 md:order-2 rounded-2xl overflow-hidden shadow-sm bg-surface-container-low aspect-square relative">
<?php $vp_image = novara_get_field('vp_image', __('https://lh3.googleusercontent.com/aida-public/AB6AXuCWdMkVRb86LPINMYYoFZWoHf7ZYUzglJP1AFX4-NV7-nYYW9zEENHw7tDtV7ihvufXOEZfeJ-t-t6VGGiBchBzpPtPe4S5pkXJiLO6T0XPStpgNJo0zmdly66JP_Rqnu0vPclmgV7v8gbvQZYH2v7Y1vRYOC_7CmzqCko5ZL4ZQ9pdGkkpgbg0p0mXwGVr6I-sm9h5NnclkJauJqCjtOxFZlpCGHxOQBEBwvIuFCZWFJlnf5tz7Rr7O9otGFQq51Vg1JtHe4Ndo3c', 'novara'), get_the_ID()); ?>
<img loading="lazy" decoding="async" alt="Beekeeper inspecting a hive frame" class="w-full h-full object-cover" src="<?php echo esc_url($vp_image); ?>"/>
<div class="absolute inset-0 ring-1 ring-inset ring-black/5 rounded-2xl"></div>
</div>
</div>
</section>
<!-- Form Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface-container-low" id="application-form">
<div class="max-w-3xl mx-auto">
<div class="text-center mb-12">
<h2 class="font-headline-md text-headline-md text-primary mb-4"><?php echo esc_html(novara_get_field('form_title', __('Supplier Application', 'novara'), get_the_ID())); ?></h2>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo wp_kses_post(novara_get_field('form_subtitle', __('Please provide your details below, and our procurement team will reach out to discuss potential opportunities.', 'novara'), get_the_ID())); ?></p>
</div>
<div class="bg-surface rounded-2xl p-8 md:p-12 shadow-sm ring-1 ring-black/5">
<?php
    $cf7_shortcode = novara_get_field('cf7_shortcode', __('', 'novara'), get_the_ID());
    if (!empty($cf7_shortcode) && shortcode_exists('contact-form-7')):
        echo do_shortcode($cf7_shortcode);
    else:
    ?>
    <!-- Fallback Static Form -->
    <form class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
    <label class="block font-label-md text-label-md text-on-background mb-2" for="companyName">Company Name</label>
    <input class="w-full bg-on-secondary border border-surface-container-highest rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-on-surface font-body-md" id="companyName" required="" type="text"/>
    </div>
    <div>
    <label class="block font-label-md text-label-md text-on-background mb-2" for="contactPerson">Contact Person</label>
    <input class="w-full bg-on-secondary border border-surface-container-highest rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-on-surface font-body-md" id="contactPerson" required="" type="text"/>
    </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
    <label class="block font-label-md text-label-md text-on-background mb-2" for="email">Email Address</label>
    <input class="w-full bg-on-secondary border border-surface-container-highest rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-on-surface font-body-md" id="email" required="" type="email"/>
    </div>
    <div>
    <label class="block font-label-md text-label-md text-on-background mb-2" for="phone">Phone Number</label>
    <input class="w-full bg-on-secondary border border-surface-container-highest rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-on-surface font-body-md" id="phone" type="tel"/>
    </div>
    </div>
    <div>
    <label class="block font-label-md text-label-md text-on-background mb-2" for="productCategory">Product Category</label>
    <select class="w-full bg-on-secondary border border-surface-container-highest rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-on-surface font-body-md appearance-none" id="productCategory">
    <option value="">Select a category</option>
    <option value="raw_honey">Raw Honey</option>
    <option value="beeswax">Beeswax</option>
    <option value="propolis">Propolis &amp; Pollen</option>
    <option value="packaging">Sustainable Packaging</option>
    <option value="other">Other</option>
    </select>
    </div>
    <div>
    <label class="block font-label-md text-label-md text-on-background mb-2" for="message">Tell us about your operation and products</label>
    <textarea class="w-full bg-on-secondary border border-surface-container-highest rounded-lg px-4 py-3 focus:ring-1 focus:ring-primary focus:border-primary transition-colors text-on-surface font-body-md resize-none" id="message" required="" rows="5"></textarea>
    </div>
    <div class="pt-4 text-center">
    <button type="button" class="w-full md:w-auto px-12 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-full hover:bg-secondary transition-colors shadow-sm" type="submit">
                                    Submit Application
                                </button>
    </div>
    </form>
    <?php endif; ?>
</div>
</div>
</section>

<?php get_footer(); ?>