<!DOCTYPE html>
<html class="light" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>



</head>
<body <?php body_class("bg-background text-on-surface font-body-md overflow-x-hidden selection:bg-secondary-container selection:text-on-secondary-container"); ?>>
<?php wp_body_open(); ?>
<?php if ($promo = novara_get_option('header_promo_text')): ?>
<div class="bg-primary text-on-primary py-2 text-center text-label-md font-label-md">
    <?php echo esc_html($promo); ?>
</div>
<?php endif; ?>

<!-- TopNavBar Component -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto backdrop-blur-md bg-surface/70 text-primary font-body-md text-body-md flat no shadows cursor-pointer active:opacity-70 transition-colors duration-300">
<!-- Brand Logo -->
<div class="font-headline-sm text-headline-sm text-primary tracking-tight">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php
        $brand_logo = novara_get_option('brand_logo');
        if ($brand_logo): ?>
            <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php echo esc_attr(novara_get_option('brand_name', 'Novala Bee Works')); ?>" class="h-8 w-auto">
        <?php else: ?>
            <?php echo esc_html(novara_get_option('brand_name', 'Novala Bee Works')); ?>
        <?php endif; ?>
    </a>
</div>
<!-- Navigation Links (Desktop) -->
<nav class="hidden md:flex items-center gap-8">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'flex items-center gap-8',
        'fallback_cb'    => function() {
            echo '<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#">Pure Honey</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#">Infused</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#">Seeds</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#">Hives</a>
<a class="text-on-surface-variant font-medium hover:text-primary transition-colors duration-300" href="#">Our Story</a>';
        },
        'add_a_class'    => 'text-on-surface-variant font-medium hover:text-primary transition-colors duration-300',
    ));
    ?>
</nav>
<!-- Trailing Icon Actions -->
<div class="flex items-center gap-4">
<?php if (novara_get_option('enable_cart_icon', true)): ?>
<button aria-label="Shopping Cart" class="text-primary hover:text-secondary transition-colors duration-300 flex items-center justify-center relative">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">shopping_cart</span>
<span class="absolute -top-2 -right-2 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">0</span>
</button>
<?php endif; ?>
<button aria-label="Person" class="text-primary hover:text-secondary transition-colors duration-300 flex items-center justify-center">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">person</span>
</button>
<!-- Mobile Menu Toggle (Visible only on small screens) -->
<button aria-label="Menu" class="md:hidden text-primary hover:text-secondary transition-colors duration-300 flex items-center justify-center">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">menu</span>
</button>
</div>
</header>
