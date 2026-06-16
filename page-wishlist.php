<?php
/* Template Name: Wishlist */
get_header();
?>

<!-- Main Content -->
<main class="flex-grow">
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-[80px] md:py-[120px]">
<!-- Page Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
<div class="max-w-2xl">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4"><?php echo wp_kses_post(novara_get_field('hero_title', 'Your Curated Collection', get_the_ID())); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">A handpicked selection of our finest artisanal honeys and crafted goods, saved for your golden hour rituals.</p>
</div>
<button class="flex items-center gap-2 border-[1.5px] border-primary text-primary px-6 py-3 rounded-full font-label-md text-label-md hover:bg-primary hover:text-on-primary transition-colors duration-300 shrink-0">
<span class="material-symbols-outlined text-[20px]">share</span>
                    Share Wishlist
                </button>
</div>
<!-- Wishlist Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-gutter gap-y-[64px]">
<!-- Product Card 1 -->
<article class="group flex flex-col relative transition-transform duration-500 hover:-translate-y-2">
<div class="relative w-full aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden mb-6 transition-all duration-500 group-hover:editorial-shadow">
<img alt="Raw Wildflower Honey" class="w-full h-full object-cover mix-blend-multiply transition-transform duration-700 group-hover:scale-105" data-alt="A premium glass jar of Novala Bee Works Raw Wildflower Honey resting on a rustic wooden table. The jar catches the warm, sun-drenched golden hour light, highlighting the rich amber hue of the honey inside. The setting is minimal and artisanal, with a soft warm cream background and subtle diffused shadows creating an editorial, luxurious atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUW5Y-W8wwEge4i9LGuOAJNvZvniqY1vo65VcntBTkglog0VR9XuAE_V3ZgsxSWESMVZplztvVduTDeGjf1KiRu2tx0CKix7TgOpJi5AxUrThKfJpKblMooAW3NYWkAMD-q1hbDYBiQM5vLKZZZWWzD2BQLOzRePonzqqNCqdq8Cdp4wIcMnQYocl3LDLv9Iw5k_BI_eeF1QlxIwY3TmEvSm7bfvgyaHXg_WwPRCiucOIzmy7y4hUP8nrYJjiuH1TVXMv-mTX_ouo"/>
<!-- Badges -->
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-secondary-container text-on-secondary-container font-label-md text-[10px] uppercase tracking-wider px-3 py-1 rounded-full">Organic</span>
</div>
<!-- Remove Button -->
<button aria-label="Remove from wishlist" class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm rounded-full text-primary hover:bg-primary hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
</div>
<div class="flex-grow flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Raw Wildflower Reserve</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">$32.00</p>
<button class="mt-auto w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-full hover:bg-surface-tint transition-colors duration-300">
                            Add to Cart
                        </button>
</div>
</article>
<!-- Product Card 2 -->
<article class="group flex flex-col relative transition-transform duration-500 hover:-translate-y-2">
<div class="relative w-full aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden mb-6 transition-all duration-500 group-hover:editorial-shadow">
<img alt="Honeycomb Block" class="w-full h-full object-cover mix-blend-multiply transition-transform duration-700 group-hover:scale-105" data-alt="A pristine, artisanal block of raw honeycomb presented on a minimalist ceramic plate. The natural hexagonal structure of the wax is crisp and glowing with deep amber hues under soft, diffused natural light. The aesthetic is clean and modern, set against a warm cream backdrop, emphasizing the raw, organic beauty of the honey production process." src="https://lh3.googleusercontent.com/aida-public/AB6AXuADDfuJHAslU4IHqLWPr4w8Tnf_Fl0DbLjeMjpJxO1OnWHUFk2F3F3DnCHluTQtLCemckO4QWHFvKMBMqNcU5W9DZEm_jHpFXDbdnOgM_JbPcfijSIthkspJFcjVxY3ZS_Jy7aAvWVONXNy7VxFD7HToXIZGHEcEfaFXRMzkGWzm89CnR18HfO8URJ1iXw5F-ghCWCJGL35U6B7VuU7zHEm71FIlckZU7peaDhdvQWP8Mq3_oxnGi_M4JFCoWnp7FXEsWQJUYu0_Ws"/>
<button aria-label="Remove from wishlist" class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm rounded-full text-primary hover:bg-primary hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
</div>
<div class="flex-grow flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Signature Honeycomb</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">$45.00</p>
<button class="mt-auto w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-full hover:bg-surface-tint transition-colors duration-300">
                            Add to Cart
                        </button>
</div>
</article>
<!-- Product Card 3 -->
<article class="group flex flex-col relative transition-transform duration-500 hover:-translate-y-2">
<div class="relative w-full aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden mb-6 transition-all duration-500 group-hover:editorial-shadow">
<img alt="Lavender Infused Honey" class="w-full h-full object-cover mix-blend-multiply transition-transform duration-700 group-hover:scale-105" data-alt="An elegant, tall glass bottle of Novala Bee Works Lavender Infused Honey, bathed in serene golden hour light. Subtle sprigs of dried lavender are visible next to the bottle on a soft, textured surface. The scene uses generous whitespace and a warm cream palette to convey a luxurious, calming, and high-end artisanal lifestyle brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAolXntJLete8Xnv5bMSlw-vTJAeV9_9YD325-TdxyPKJb0XFNUp2NttuBAXBw0ZDZcj0kfZuiLeXZlWUvyMNgqyoulYGWdMQ-whhNzAmNUV-WNweuy_npHQXwpwxjJGwcNicHSZqjw4NUst98L46VgiXFNu5v_HYPXec37cNSOmUlK1Q0G9FqrN82GJXZQ4542Qc8DXX4EM8V9JoF-jwxrVvl8l8bTaESI42zUhhWTq96SSKcntr917Zj6o8OQm0Vg-yJEuEI1Oos"/>
<!-- Badges -->
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-surface-container-highest text-on-surface font-label-md text-[10px] uppercase tracking-wider px-3 py-1 rounded-full">Limited</span>
</div>
<button aria-label="Remove from wishlist" class="absolute top-4 right-4 w-10 h-10 flex items-center justify-center bg-surface-container-lowest/80 backdrop-blur-sm rounded-full text-primary hover:bg-primary hover:text-on-primary transition-colors duration-300">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
</div>
<div class="flex-grow flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">Lavender Infused Nectar</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6">$28.00</p>
<button class="mt-auto w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-full hover:bg-surface-tint transition-colors duration-300">
                            Add to Cart
                        </button>
</div>
</article>
</div>
</section>
</main>

<?php get_footer(); ?>