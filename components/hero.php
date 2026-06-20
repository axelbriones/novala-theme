<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
// Extracted component variables with fallbacks to preserve exact visual structure
$image_url = isset($image) && !empty($image) ? $image : 'https://lh3.googleusercontent.com/aida-public/AB6AXuDPUDgUvyVTIbcGloDNmOwpqzKgIg2HAiU74ewjq9TVdzu6EO2u08QQ4BrIlFt0sPc0JCdH3oH8UnCQfHLaQAsmMgLbuwnRDDFAVOch5Xc6y-2ao_zIXYwb2LljVccTx6tYlUxkf9EeJuNXQ8jstugX700dIaRsvhsA-xbl_B7_GJEV1ws9yLfcB5sFP2oKSu2waaayK7PdmKx6cgGsGY5FJ7y0NbQ-gN4OeNSon5R8fzHzn2pEOnKqUHvU25LLKEH5nWccKIix0tk';
$hero_title = isset($title) && !empty($title) ? $title : 'Pure Honey, Sustainably Sourced.';
$hero_subtitle = isset($subtitle) && !empty($subtitle) ? $subtitle : 'Discover our range of premium, organic honey products from the African savannah. Ethically harvested to protect biodiversity and empower local communities.';
?>
<!-- Hero Section -->
<section class="relative h-[870px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Pouring Honey" class="w-full h-full object-cover" src="<?php echo esc_url($image_url); ?>"/>
<div class="absolute inset-0 honey-overlay"></div>
</div>
<div class="relative z-10 px-margin-desktop max-w-container-max mx-auto w-full">
<div class="max-w-2xl text-white">
<h1 class="font-display-lg text-display-lg mb-6 leading-tight"><?php echo esc_html($hero_title); ?></h1>
<p class="font-body-lg text-body-lg mb-10 opacity-90 leading-relaxed">
    <?php echo esc_html($hero_subtitle); ?>
</p>
<div class="flex gap-4">
<button class="bg-secondary-container text-on-secondary-container px-8 py-4 rounded font-label-md text-label-md hover:bg-primary transition-all duration-300 uppercase tracking-widest">
                            Shop Now
                        </button>
<button class="border-2 border-white text-white px-8 py-4 rounded font-label-md text-label-md hover:bg-white hover:text-primary transition-all duration-300 uppercase tracking-widest">
                            Our Story
                        </button>
</div>
</div>
</div>
</section>
