<?php
/* Template Name: Become a Supplier */
get_header();
?>

<!-- Hero Section -->
<section class="relative w-full h-[614px] min-h-[400px] flex items-center justify-center bg-surface-variant overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center opacity-80 mix-blend-multiply" data-alt="A macro photograph of golden honeycomb frames bathed in warm, late afternoon sunlight. The amber honey glistens within the perfectly hexagonal wax cells, conveying a sense of rich, artisanal craftsmanship. The lighting creates a high-end, editorial 'Golden Hour' aesthetic, emphasizing the organic texture and purity of the natural produce. Soft, diffused shadows enhance the depth without overwhelming the warm cream and deep amber palette." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAk_iwZQwS3-8D4hdgIUVho-P4Y58q7lmP2JcmM3mjK8rk5vUtscQTU2oGPqkczCPE93ytEHmXK-4c1lSIWA3PKdnBJz8Hao_SHVDsbF0PCp5cNlp0JtOHV1dIvxy6X-03WfCZTx98cmuFKuZg6SOrcqTJWMgZlErWCsc0cIp1HMYj2QUyHLcEoENeLgnZOm1iX8C4H4j7DCjVd0ZYjtgq3tj8f43E7n1rZYWuNz7NEo5oIhkHvJuZtqAVeoIoN6jaW4O6-QmCa-Zk');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-3xl mx-auto">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6"><?php echo wp_kses_post(novara_get_field('hero_title', 'BECOME A SUPPLIER', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Join our artisanal network and bring your high-quality, sustainable harvests to a broader market.</p>
</div>
</section>
<!-- Value Proposition Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface">
<div class="max-w-container-max mx-auto grid md:grid-cols-2 gap-16 items-center">
<div class="space-y-8 order-2 md:order-1">
<h2 class="font-headline-md text-headline-md text-primary">A Partnership Rooted in Quality</h2>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Becoming a supplier for Novala Bee Works offers numerous benefits, including access to a ready market for high-quality products, ensuring consistent demand and long-term supply opportunities. As part of an integrated value chain, suppliers enjoy streamlined processes and collaborative product development.
                    </p>
<ul class="space-y-4 pt-4">
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
</ul>
<div class="pt-6">
<a class="inline-flex items-center justify-center px-8 py-3 bg-primary text-on-primary font-label-md text-label-md rounded-full hover:bg-secondary transition-colors shadow-sm" href="#application-form">
                            Become A Supplier
                        </a>
</div>
</div>
<div class="order-1 md:order-2 rounded-2xl overflow-hidden shadow-sm bg-surface-container-low aspect-square relative">
<img alt="Beekeeper inspecting a hive frame" class="w-full h-full object-cover" data-alt="A portrait of a skilled artisan beekeeper carefully inspecting a wooden hive frame in a sun-drenched field. The beekeeper wears a protective suit, but the focus is on their gloved hands delicately handling the frame, demonstrating care and stewardship. The background is a soft blur of vibrant green flora and warm sunlight. The overall aesthetic is rustic yet highly professional, matching the premium organic brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWdMkVRb86LPINMYYoFZWoHf7ZYUzglJP1AFX4-NV7-nYYW9zEENHw7tDtV7ihvufXOEZfeJ-t-t6VGGiBchBzpPtPe4S5pkXJiLO6T0XPStpgNJo0zmdly66JP_Rqnu0vPclmgV7v8gbvQZYH2v7Y1vRYOC_7CmzqCko5ZL4ZQ9pdGkkpgbg0p0mXwGVr6I-sm9h5NnclkJauJqCjtOxFZlpCGHxOQBEBwvIuFCZWFJlnf5tz7Rr7O9otGFQq51Vg1JtHe4Ndo3c"/>
<div class="absolute inset-0 ring-1 ring-inset ring-black/5 rounded-2xl"></div>
</div>
</div>
</section>
<!-- Form Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface-container-low" id="application-form">
<div class="max-w-3xl mx-auto">
<div class="text-center mb-12">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Supplier Application</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Please provide your details below, and our procurement team will reach out to discuss potential opportunities.</p>
</div>
<div class="bg-surface rounded-2xl p-8 md:p-12 shadow-sm ring-1 ring-black/5">
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
<button class="w-full md:w-auto px-12 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-full hover:bg-secondary transition-colors shadow-sm" type="submit">
                                Submit Application
                            </button>
</div>
</form>
</div>
</div>
</section>

<?php get_footer(); ?>