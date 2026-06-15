<?php
/* Template Name: Contact Us */
get_header();
?>

<main>
<!-- Hero Section -->
<section class="relative w-full h-[409px] md:h-[512px] flex items-center justify-center overflow-hidden bg-surface-container-low">
<div class="absolute inset-0 z-0">
<img alt="A close-up shot of golden honey slowly dripping from a wooden dipper into a ceramic jar. The lighting is warm and sun-drenched, creating a beautiful golden hour effect. The background is softly blurred showing green organic foliage, emphasizing the Artisanal Modernism style with deep amber and warm cream tones." class="w-full h-full object-cover opacity-60" data-alt="A close-up shot of golden honey slowly dripping from a wooden dipper into a ceramic jar. The lighting is warm and sun-drenched, creating a beautiful golden hour effect. The background is softly blurred showing green organic foliage, emphasizing the Artisanal Modernism style with deep amber and warm cream tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8S-6X5GSYC5GNA_dYDGZ6dFjd6gurR9dS0ZnNbKamBCc5SC2R_71fD35e2SWngertU7BmfcTOjc8S121DZkUKzvNrCywkhMOfJ7g7fsz-6il2N4RR99ylNJ3aqm4dbyB6HJf-GcZw_536mlipKeRDLSTin3Tm4pekrrQNOEXJxkT3FJr1HkvgqyqVRj3mRlK-9W4Q6aV7NUKQU9L1KKrlO-pr4EMSSTwGC4FNQ8ewSaQtPuaqeIkRrmit1bFH4u4HxGVoVl0TtZQ"/>
</div>
<div class="relative z-10 text-center px-4">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-4">Get in Touch</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">We'd love to hear from you about our artisanal honey and sustainable practices.</p>
</div>
</section>
<!-- Main Content Area: Bento-style split -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-16 md:py-24">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-gutter">
<!-- Contact Form Section (8 columns) -->
<div class="lg:col-span-7 bg-surface-container-lowest p-8 md:p-12 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-surface-variant/50">
<h2 class="font-headline-md text-headline-md text-on-surface mb-4">Send Us a Message</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-8">Use the form below to reach out to us. We'll get back to you as soon as possible.</p>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="name">Your name</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface focus:border-primary focus:ring-1 focus:ring-primary rounded-DEFAULT px-4 py-3 font-body-md transition-colors" id="name" name="name" placeholder="Jane Doe" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="email">Your email</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface focus:border-primary focus:ring-1 focus:ring-primary rounded-DEFAULT px-4 py-3 font-body-md transition-colors" id="email" name="email" placeholder="jane@example.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="phone">Phone</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface focus:border-primary focus:ring-1 focus:ring-primary rounded-DEFAULT px-4 py-3 font-body-md transition-colors" id="phone" name="phone" placeholder="+254 XXX XXX XXX" type="tel"/>
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface" for="complaint">Complaint / Message</label>
<textarea class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface focus:border-primary focus:ring-1 focus:ring-primary rounded-DEFAULT px-4 py-3 font-body-md transition-colors resize-none" id="complaint" name="complaint" placeholder="How can we help you?" rows="5"></textarea>
</div>
<button class="w-full md:w-auto px-8 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-DEFAULT hover:bg-primary/90 transition-colors shadow-sm mt-4" type="submit">
                            Submit Message
                        </button>
</form>
</div>
<!-- Contact Information Section (4 columns) -->
<div class="lg:col-span-5 space-y-8">
<!-- Glassmorphism style info card -->
<div class="bg-surface-container/50 backdrop-blur-sm p-8 rounded-xl border border-surface-variant/30 h-full flex flex-col justify-center space-y-10">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-6 border-b border-outline-variant/30 pb-4">Contact Details</h3>
</div>
<div class="flex items-start space-x-4">
<span class="material-symbols-outlined text-primary mt-1" data-icon="location_on">location_on</span>
<div>
<h4 class="font-label-md text-label-md text-on-surface mb-1">Address</h4>
<p class="font-body-md text-body-md text-on-surface-variant"><?php echo function_exists('get_field') && get_field('contact_address', 'option') ? get_field('contact_address', 'option') : 'Hakati Business Center, 1st Floor, Shop F35<br/>Mfangano Street, Nairobi, Kenya'; ?></p>
</div>
</div>
<div class="flex items-start space-x-4">
<span class="material-symbols-outlined text-primary mt-1" data-icon="mail">mail</span>
<div>
<h4 class="font-label-md text-label-md text-on-surface mb-1">Email</h4>
<?php $email = function_exists('get_field') && get_field('contact_email', 'option') ? get_field('contact_email', 'option') : 'engage@novalabeeworks.xyz'; ?>
<a class="font-body-md text-body-md text-primary hover:underline" href="mailto:<?php echo antispambot($email); ?>"><?php echo esc_html($email); ?></a>
</div>
</div>
<div class="flex items-start space-x-4">
<span class="material-symbols-outlined text-primary mt-1" data-icon="call">call</span>
<div>
<h4 class="font-label-md text-label-md text-on-surface mb-1">Phone</h4>
<?php $phone = function_exists('get_field') && get_field('contact_phone', 'option') ? get_field('contact_phone', 'option') : '+254 721 692895'; ?>
<a class="font-body-md text-body-md text-primary hover:underline" href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a>
</div>
</div>
</div>
</div>
</div>
</section>
</main>

<?php get_footer(); ?>
