<?php get_header(); ?>

<!-- Main Content Canvas -->
<main class="flex-grow max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop py-10 md:py-20">
<div class="mb-10">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4">Checkout</h1>
<p class="text-on-surface-variant font-body-lg text-body-lg">Complete your order securely.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-[64px]">
<!-- Left Column: Forms -->
<div class="lg:col-span-7 space-y-12">
<!-- Contact Information -->
<section class="bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow">
<h2 class="font-headline-sm text-headline-sm text-primary mb-6 flex items-center gap-3">
<span class="material-symbols-outlined text-outline" style="font-variation-settings: 'FILL' 0;">person</span>
                        Contact Information
                    </h2>
<div class="space-y-6">
<div>
<label class="form-label" for="email">Email Address *</label>
<input class="form-input" id="email" placeholder="connoisseur@example.com" required="" type="email"/>
</div>
<div class="flex items-center gap-3 mt-4">
<input class="w-5 h-5 border-outline-variant rounded-sm text-primary focus:ring-primary accent-primary" id="newsletter" type="checkbox"/>
<label class="font-body-md text-body-md text-on-surface-variant" for="newsletter">Keep me updated on exclusive releases and bee stewardship news.</label>
</div>
</div>
</section>
<!-- Shipping Address -->
<section class="bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow">
<h2 class="font-headline-sm text-headline-sm text-primary mb-6 flex items-center gap-3">
<span class="material-symbols-outlined text-outline" style="font-variation-settings: 'FILL' 0;">local_shipping</span>
                        Shipping Details
                    </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="form-label" for="firstName">First Name *</label>
<input class="form-input" id="firstName" required="" type="text"/>
</div>
<div>
<label class="form-label" for="lastName">Last Name *</label>
<input class="form-input" id="lastName" required="" type="text"/>
</div>
<div class="md:col-span-2">
<label class="form-label" for="address">Address *</label>
<input class="form-input" id="address" required="" type="text"/>
</div>
<div class="md:col-span-2">
<label class="form-label" for="apartment">Apartment, suite, etc. (optional)</label>
<input class="form-input" id="apartment" type="text"/>
</div>
<div>
<label class="form-label" for="city">City *</label>
<input class="form-input" id="city" required="" type="text"/>
</div>
<div>
<label class="form-label" for="postalCode">Postal Code *</label>
<input class="form-input" id="postalCode" required="" type="text"/>
</div>
</div>
</section>
<!-- Payment Details -->
<section class="bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow">
<h2 class="font-headline-sm text-headline-sm text-primary mb-6 flex items-center gap-3">
<span class="material-symbols-outlined text-outline" style="font-variation-settings: 'FILL' 0;">credit_card</span>
                        Payment
                    </h2>
<p class="font-body-sm text-on-surface-variant mb-6 text-sm">All transactions are secure and encrypted.</p>
<div class="space-y-6">
<div class="border border-outline-variant rounded-DEFAULT overflow-hidden">
<!-- Card Option -->
<div class="p-4 border-b border-outline-variant bg-surface-container-lowest flex items-center gap-3">
<input checked="" class="w-5 h-5 text-primary accent-primary" id="pay_card" name="payment_method" type="radio"/>
<label class="font-label-md text-label-md flex-grow cursor-pointer" for="pay_card">Credit Card</label>
<div class="flex gap-1">
<span class="material-symbols-outlined text-on-surface-variant">payment</span>
</div>
</div>
<!-- Card Form (expanded) -->
<div class="p-6 bg-surface-container-low/50 space-y-4">
<div>
<input class="form-input" placeholder="Card number" type="text"/>
</div>
<div class="grid grid-cols-2 gap-4">
<input class="form-input" placeholder="Expiration date (MM / YY)" type="text"/>
<input class="form-input" placeholder="Security code" type="text"/>
</div>
<div>
<input class="form-input" placeholder="Name on card" type="text"/>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column: Order Summary -->
<div class="lg:col-span-5 relative">
<div class="sticky top-32 bg-surface-container-lowest p-6 md:p-8 rounded-lg ambient-shadow">
<h2 class="font-headline-sm text-headline-sm text-primary mb-6">Order Summary</h2>
<!-- Items -->
<div class="space-y-6 mb-8 border-b border-surface-variant pb-8">
<div class="flex items-center gap-4">
<div class="w-20 h-20 rounded-md overflow-hidden bg-surface-container-low flex-shrink-0 border border-surface-variant relative">
<img alt="Ajar of artisanal raw honey resting on a rustic wooden table, softly illuminated by warm golden hour sunlight. The honey inside glows with a deep amber hue, embodying a high-end, organic aesthetic. Soft shadows emphasize the product's natural origins and premium quality." class="w-full h-full object-cover" data-alt="A jar of artisanal raw honey resting on a rustic wooden table, softly illuminated by warm golden hour sunlight. The honey inside glows with a deep amber hue, embodying a high-end, organic aesthetic. Soft shadows emphasize the product's natural origins and premium quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCmKqJ86AjsjgGo9rcjYPabr_fHpYBFPzza7UDWgzMiEfthByf7Ur58MJDQIciubY5N2MeyEHgACX3FgPyPYgz_gQYR-LUcy0G_rfYJWlVuJ_izJYBDAcl00oXEeyollw_dz0CYhS6PNOvfAwmZjzU-Edvpq9NKnQd29usQ1Z58pD8HWXNjVMPRhp_g9Y4Q_wEhhmOhgSov1l0qzLleC5bAKYnCR9phnxC2kKEX-iDsyC54MEZxXWlcPIofSZRsA_ipcype27ixa70"/>
<span class="absolute -top-2 -right-2 bg-secondary text-on-secondary font-caption text-caption w-6 h-6 rounded-full flex items-center justify-center z-10">1</span>
</div>
<div class="flex-grow">
<h3 class="font-label-md text-label-md text-on-surface">Wildflower Reserve</h3>
<p class="font-caption text-caption text-on-surface-variant mt-1">Raw, Unfiltered, 16oz</p>
</div>
<div class="font-body-md text-body-md text-on-surface text-right">
                                $38.00
                            </div>
</div>
</div>
<!-- Totals -->
<div class="space-y-4 mb-8">
<div class="flex justify-between items-center text-on-surface-variant">
<span class="font-body-md text-body-md">Subtotal</span>
<span class="font-body-md text-body-md">$38.00</span>
</div>
<div class="flex justify-between items-center text-on-surface-variant">
<span class="font-body-md text-body-md">Shipping</span>
<span class="font-body-md text-body-md">Calculated at next step</span>
</div>
<div class="flex justify-between items-center pt-4 border-t border-surface-variant">
<span class="font-headline-sm text-headline-sm text-primary">Total</span>
<div class="text-right">
<span class="font-caption text-caption text-on-surface-variant mr-2">USD</span>
<span class="font-headline-sm text-headline-sm text-primary">$38.00</span>
</div>
</div>
</div>
<!-- Action -->
<button class="btn-primary group">
                        Place Order
                        <span class="material-symbols-outlined text-[20px] transition-transform group-hover:translate-x-1" style="font-variation-settings: 'FILL' 0;">arrow_forward</span>
</button>
<p class="font-caption text-caption text-center text-on-surface-variant mt-6 flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[16px] text-outline" style="font-variation-settings: 'FILL' 0;">eco</span>
                        Every purchase supports native bee habitats.
                    </p>
</div>
</div>
</div>
</main>

<?php get_footer(); ?>