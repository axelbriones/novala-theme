<?php
/* Template Name: Food Service Partners */
get_header();
?>

<main class="min-h-screen">
<!-- Hero Section -->
<section class="relative w-full h-[80vh] min-h-[600px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Enrich your menu with Novala products" class="w-full h-full object-cover object-center filter brightness-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCl3EFtV9CKL38AQ0cK-un41XpI4PsfYkPk01FKhsrH7D0h9wP6K0s2tpb2O_0ez44Ovj1wsUJfYndZBA4YPv4I2HCkj_IZv8G80sdY-YzC-Lkvz3wB-9nPvuFb12nZWdvSLkkkQvSaye26vQcWm0YnKDvMjJBXiDHd63V-h2o26uXbpP8vREuUErhXIf5Q3CDszL0tNp9q-y-iuS2PNZnCECFWXi2bpvgaLZROlqVjl8NxnJZf_K4ROCM7zb-rgK2JJOPT892n_7w"/>
<div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
</div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-4xl mx-auto mt-20">
<span class="font-label-md text-label-md text-primary tracking-[0.2em] uppercase mb-6 block">Food Service Partners</span>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6 drop-shadow-sm"><?php echo wp_kses_post(novara_get_field('hero_title', '
                    Enrich your menu with Novala products
                ', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto drop-shadow-sm">
                    Awe your customers!
                </p>
<div class="mt-10">
<a class="inline-flex items-center justify-center bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider px-8 py-4 rounded hover:bg-primary-container transition-all duration-300 shadow-md hover:shadow-lg" href="#partner-form">
                        Become a Partner
                    </a>
</div>
</div>
</section>
<!-- Benefits Section (Bento Layout) -->
<section class="py-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-md text-headline-md text-on-surface mb-4">Value Added Products</h2>
<div class="w-16 h-0.5 bg-primary mx-auto"></div>
</div>
<div class="bento-grid">
<!-- Card 1 -->
<div class="col-span-12 md:col-span-4 glass-card golden-glow rounded-xl p-8 flex flex-col items-center text-center group hover:-translate-y-1 transition-transform duration-500">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary-fixed transition-colors duration-300">
<span class="material-symbols-outlined text-3xl text-primary" style="font-variation-settings: 'FILL' 0;">payments</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Buy at wholesale prices</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Unlock premium margins on our artisanal honey collections designed specifically for culinary professionals.</p>
</div>
<!-- Card 2 -->
<div class="col-span-12 md:col-span-4 glass-card golden-glow rounded-xl p-8 flex flex-col items-center text-center group hover:-translate-y-1 transition-transform duration-500">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary-fixed transition-colors duration-300">
<span class="material-symbols-outlined text-3xl text-primary" style="font-variation-settings: 'FILL' 0;">credit_card</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Access credit facilities</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Flexible payment terms designed to support your restaurant's cash flow and inventory needs.</p>
</div>
<!-- Card 3 -->
<div class="col-span-12 md:col-span-4 glass-card golden-glow rounded-xl p-8 flex flex-col items-center text-center group hover:-translate-y-1 transition-transform duration-500">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-6 group-hover:bg-primary-fixed transition-colors duration-300">
<span class="material-symbols-outlined text-3xl text-primary" style="font-variation-settings: 'FILL' 0;">campaign</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-4">Co-marketing opportunities</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Feature your signature dishes on our platforms and collaborate on exclusive seasonal campaigns.</p>
</div>
</div>
</section>
<!-- Form Section -->
<section class="py-24 bg-surface-container-low relative overflow-hidden" id="partner-form">
<!-- Decorative organic shape -->
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary-fixed/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
<div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
<div class="text-center mb-12">
<h2 class="font-headline-md text-headline-md text-on-surface mb-4">Thank You for Your Interest in Our Products</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Please complete our Food Service Partner Request, and we will be in touch!</p>
</div>
<form class="glass-card golden-glow rounded-xl p-8 md:p-12 space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="business_name">Business Name</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="business_name" name="business_name" required="" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="contact_person">Contact Person</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="contact_person" name="contact_person" required="" type="text"/>
</div>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="email">Email Address</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none" id="email" name="email" required="" type="email"/>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="vision">Tell us about your culinary vision</label>
<textarea class="w-full bg-surface-container-lowest border border-outline-variant rounded px-4 py-3 font-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none resize-y" id="vision" name="vision" rows="4"></textarea>
</div>
<div class="pt-4 text-center">
<button class="inline-flex items-center justify-center bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider px-10 py-4 rounded hover:bg-primary-container transition-all duration-300 w-full md:w-auto shadow-md" type="submit">
                            Submit Request
                        </button>
</div>
</form>
</div>
</section>
</main>

<?php get_footer(); ?>