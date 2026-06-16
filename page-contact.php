<?php
/* Template Name: Contact Us */
get_header();
?>

<main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-20 md:py-32">
<section class="mb-16 md:mb-24 text-center max-w-3xl mx-auto">
<h1 class="font-display-lg text-display-lg text-primary mb-6"><?php echo wp_kses_post(novara_get_field('hero_title', 'Contact Us', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">We value your interest in our artisanal craft. Whether you have an inquiry about our honey, our sustainability practices, or simply want to say hello, our team is here to listen.</p>
</section>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-16 items-start">
<div class="lg:col-span-5 flex flex-col gap-12">
<div class="flex flex-col gap-8">
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">location_on</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Location</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Hakati Business Center, 1st Floor, Shop F35,<br/>Junction of Mfangano Street &amp; Hakati Road,<br/>Nairobi, Kenya</p>
</div>
</div>
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">schedule</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Opening Hours</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Mon-Sat: 09.00 AM - 07.00 PM<br/>Sun: Closed</p>
</div>
</div>
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">phone</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Phone</h3>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="tel:+254721692895">+254 721 692895</a>
</div>
</div>
<div class="flex items-start gap-4 group">
<div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">mail</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Email</h3>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="mailto:engage@novalabeeworks.xyz">engage@novalabeeworks.xyz</a>
</div>
</div>
</div>
<div class="rounded-xl overflow-hidden shadow-sm aspect-square lg:aspect-[1.11] relative bg-surface-container">
<img alt="Location Map" class="w-full h-full object-cover" data-location="Hakati Business Center, Nairobi, Kenya" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmdm3Vv6uWGKMSyzjh1pwDA1IGNVMEK0XunQfW4uGwKyADvHQHdDV-G93ImxS9Jdf9Drb4eYjaql7FVtkPizMQ8B-RSoTJO6C0jrH7KqlGb1IZwpejPnfiSGFXsEEbd1fBALYt4Q-QksN3GCLZtJjb5BL64fCoGf-xFVIN_Tn9mXxsdPTppPMaRSZDk42fm8duyFkD6huyEFrusuFXF9yRrILA89Key2DoTcIVXpEfz0E9Sk68LgaPiErodVL-WMr9E6STcbx-6JE"/>
<div class="absolute inset-0 ring-1 ring-inset ring-outline-variant/20 rounded-xl pointer-events-none"></div>
</div>
</div>
<div class="lg:col-span-7">
<div class="bg-surface-container-low rounded-xl p-8 md:p-12 shadow-sm border border-surface-container-highest">
<h2 class="font-headline-md text-headline-md text-on-surface mb-8">Send a Message</h2>
<form class="flex flex-col gap-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant" for="name">Name</label>
<input class="bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-0 rounded-md px-4 py-3 font-body-md text-on-surface transition-colors duration-200" id="name" name="name" required="" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant" for="email">Email</label>
<input class="bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-0 rounded-md px-4 py-3 font-body-md text-on-surface transition-colors duration-200" id="email" name="email" required="" type="email"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant" for="subject">Subject</label>
<input class="bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-0 rounded-md px-4 py-3 font-body-md text-on-surface transition-colors duration-200" id="subject" name="subject" required="" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant" for="message">Message</label>
<textarea class="bg-surface-container-lowest border border-outline-variant focus:border-primary focus:ring-0 rounded-md px-4 py-3 font-body-md text-on-surface transition-colors duration-200 resize-y" id="message" name="message" required="" rows="6"></textarea>
</div>
<div class="pt-4">
<button class="w-full md:w-auto bg-primary text-on-primary font-label-md text-label-md py-4 px-8 rounded-md hover:bg-surface-tint transition-colors duration-300 shadow-sm flex justify-center items-center gap-2 group" type="submit">
                                Send Message
                                <span class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
</div>
</form>
</div>
</div>
</div>
</main>

<?php get_footer(); ?>