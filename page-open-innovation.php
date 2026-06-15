<?php
/* Template Name: Open Innovation */
get_header();
?>

<!-- Main Content -->
<main class="pt-[80px]">
<!-- Hero Section -->
<section class="relative w-full h-[614px] min-h-[500px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0 bg-black/30"></div>
<img class="absolute inset-0 w-full h-full object-cover z-[-1]" data-alt="A serene, sun-drenched outdoor scene depicting a wooden table in a blooming orchard during golden hour. The setting is warm and inviting, evoking a sense of organic collaboration and natural creativity. Soft, diffused light filters through the leaves, highlighting a blank notepad and scattered botanical elements. The overall aesthetic is Artisanal Modernism, featuring a warm cream and deep amber palette, communicating high-quality agricultural stewardship and open innovation." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCLlxVyqYmQXQ1R4FxrdKHtY93Q6mLJOCFWIz6jn2jfMtvt7tK-2ebPY6eWjrPkLR_6L-BjGIJHnsI-C6pFR7JJkQQpzm5XZ3ATBcX9zMK-_8HDkaqiU90YznG5DBJEsqhzyHfbj9uuk3vGDGtFem4w0qFeC4rOhdNIWR72GJGurWE8ANgTcaO_RVLtRYh-2Gk8oeAc6QtQxNOsekgQepx0BZcmZ64KO2jzwQNhAR5K946b97-XTDeWZGu0Eriy2LdqfK6emyfcR4"/>
<div class="relative z-10 text-center px-6 max-w-3xl mx-auto flex flex-col items-center gap-6">
<h1 class="font-display-lg text-display-lg text-on-primary md:font-display-lg-mobile md:text-display-lg-mobile">Open Innovation</h1>
<p class="font-body-lg text-body-lg text-on-primary/90 max-w-2xl font-light">Do you want to share an innovative idea with us?</p>
</div>
</section>
<!-- Intro & Form Section -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-20 lg:py-32 grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column: Context -->
<div class="lg:col-span-5 flex flex-col gap-8 pr-0 lg:pr-12">
<div class="w-12 h-1 bg-secondary rounded-full"></div>
<h2 class="font-headline-md text-headline-md text-on-surface">Collaborate with nature.</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                    We love teaming up with creative individuals and businesses to craft products and processes that bring joy to our customers. Whether it's a new sustainable packaging solution, a unique honey infusion, or an advancement in apiary care, your ideas matter to the hive.
                </p>
<div class="mt-8 p-8 bg-surface-container-low rounded-2xl border border-outline-variant/30 relative overflow-hidden group">
<div class="absolute inset-0 bg-gradient-to-br from-secondary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
<span class="material-symbols-outlined text-secondary text-4xl mb-4 block" style="font-variation-settings: 'FILL' 1;">emoji_objects</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Our Promise</h3>
<p class="text-on-surface-variant font-body-md">Every submission is reviewed by our stewardship team. We honor the origin of every idea and maintain strict confidentiality.</p>
</div>
</div>
<!-- Right Column: Form -->
<div class="lg:col-span-7 mt-12 lg:mt-0">
<div class="bg-surface-container-lowest rounded-3xl p-8 md:p-12 shadow-[0_20px_40px_-15px_rgba(122,85,0,0.05)] border border-surface-variant/50">
<form class="flex flex-col gap-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="name">Your Name *</label>
<input class="bg-surface-container-lowest border border-surface-variant text-on-surface rounded-lg px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none font-body-md placeholder:text-outline-variant" id="name" required="" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="company">Company Name</label>
<input class="bg-surface-container-lowest border border-surface-variant text-on-surface rounded-lg px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none font-body-md placeholder:text-outline-variant" id="company" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="email">Email Address *</label>
<input class="bg-surface-container-lowest border border-surface-variant text-on-surface rounded-lg px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none font-body-md placeholder:text-outline-variant" id="email" required="" type="email"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="phone">Phone Number</label>
<input class="bg-surface-container-lowest border border-surface-variant text-on-surface rounded-lg px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none font-body-md placeholder:text-outline-variant" id="phone" type="tel"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="location">Where are you based? *</label>
<input class="bg-surface-container-lowest border border-surface-variant text-on-surface rounded-lg px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none font-body-md placeholder:text-outline-variant" id="location" required="" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="deck">Presentation deck / material?</label>
<div class="relative border-2 border-dashed border-outline-variant/50 rounded-xl p-8 flex flex-col items-center justify-center gap-4 hover:bg-surface-container-low transition-colors cursor-pointer group">
<input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" id="deck" type="file"/>
<span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors text-3xl">cloud_upload</span>
<div class="text-center">
<p class="font-body-md text-on-surface font-medium">Click to upload or drag and drop</p>
<p class="font-caption text-caption text-outline mt-1">PDF, PPTX, or DOCX (Max. 10MB)</p>
</div>
</div>
</div>
<div class="flex flex-col gap-2 mt-4">
<label class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-xs" for="message">Brief Description (Optional)</label>
<textarea class="bg-surface-container-lowest border border-surface-variant text-on-surface rounded-lg px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary transition-colors outline-none font-body-md resize-none placeholder:text-outline-variant" id="message" rows="4"></textarea>
</div>
<div class="flex items-start gap-3 mt-4">
<div class="flex items-center h-6">
<input class="w-5 h-5 rounded border-surface-variant text-primary focus:ring-primary bg-surface-container-lowest cursor-pointer transition-colors" id="policy" required="" type="checkbox"/>
</div>
<label class="font-body-md text-body-md text-on-surface-variant cursor-pointer text-sm" for="policy">
                                I accept Novatus Limited &amp; Novala Bee Works Innovation Proposal Submission Policy.
                            </label>
</div>
<button class="mt-6 bg-primary text-on-primary font-label-md text-label-md py-4 px-8 rounded-full hover:bg-primary-container transition-colors duration-300 w-full md:w-auto md:self-start shadow-[0_8px_16px_-4px_rgba(122,85,0,0.15)] flex items-center justify-center gap-2 group" type="submit">
                            Submit Proposal
                            <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
</form>
</div>
</div>
</section>
</main>

<?php get_footer(); ?>