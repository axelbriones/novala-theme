<footer class="bg-tertiary-fixed dark:bg-tertiary-fixed-variant">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-20 max-w-container-max mx-auto">
<div class="flex flex-col gap-6">
<span class="font-headline-sm text-headline-sm font-bold text-on-tertiary-fixed"><?php echo esc_html(novara_get_option('brand_name', 'NOVALA Bee Works')); ?></span>
<p class="text-on-tertiary-fixed-variant font-body-md leading-relaxed">
                    <?php echo esc_html(novara_get_option('footer_text', "Crafting nature's finest honey while preserving the beauty and biodiversity of the African savannah.")); ?>
                </p>
<div class="mb-4">
    <?php
    $cert_logo = novara_get_option('footer_certification_logo', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDugRaZ4aFxiksZXpG6loiiemlezbaqzYmL3dZiQIn9UHlnvpI1Cw53LHDRgGkKcLq-hkOErpjXlFprPH8wz3wgRGpfD17VuQqvebNt7EamY1H3OncCZAZsyerhkhq4E5dQQ9MTiFF2x41c58Zb9r_29GCtSdpQBVOVhX4RQPsFwUNCboBeQQY2-ZBpqwRkr-2OG3OgqDsb1whehQX5HK5zCKK07CNwh0fqLKrdpXHMWu78mHHomum07iXxPsOcOs9LjDIQi3KYZFM');
    if ($cert_logo) : ?>
    <img src="<?php echo esc_url($cert_logo); ?>" alt="<?php esc_attr_e('Certification Logo', 'novara'); ?>" class="h-20 w-auto opacity-90 hover:opacity-100 transition-opacity">
    <?php endif; ?>
</div>
<div class="flex gap-4">
<?php if ($fb = novara_get_option('social_facebook')): ?>
<a aria-label="<?php esc_attr_e('Social Link', 'novara'); ?>" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="<?php echo esc_url($fb); ?>" target="_blank">
<span class="material-symbols-outlined text-sm">public</span>
</a>
<?php endif; ?>
<?php if ($ig = novara_get_option('social_instagram')): ?>
<a aria-label="<?php esc_attr_e('Social Link', 'novara'); ?>" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="<?php echo esc_url($ig); ?>" target="_blank">
<span class="material-symbols-outlined text-sm">camera_alt</span>
</a>
<?php endif; ?>
<?php if ($tw = novara_get_option('social_twitter')): ?>
<a aria-label="<?php esc_attr_e('Social Link', 'novara'); ?>" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="<?php echo esc_url($tw); ?>" target="_blank">
<span class="material-symbols-outlined text-sm">flutter_dash</span>
</a>
<?php endif; ?>
<?php if ($tt = novara_get_option('social_tiktok')): ?>
<a aria-label="<?php esc_attr_e('Social Link', 'novara'); ?>" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="<?php echo esc_url($tt); ?>" target="_blank">
<span class="material-symbols-outlined text-sm">music_note</span>
</a>
<?php endif; ?>
<?php if ($wa = novara_get_option('social_whatsapp')): ?>
<a aria-label="<?php esc_attr_e('Social Link', 'novara'); ?>" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $wa)); ?>" target="_blank">
<span class="material-symbols-outlined text-sm">chat</span>
</a>
<?php endif; ?>
<?php if ($em = novara_get_option('contact_email', 'engage@novalabeeworks.xyz')): ?>
<a aria-label="<?php esc_attr_e('Social Link', 'novara'); ?>" class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="mailto:<?php echo antispambot($em); ?>">
<span class="material-symbols-outlined text-sm">alternate_email</span>
</a>
<?php endif; ?>
</div>
</div>
<div>
<h5 class="font-label-md text-label-md font-bold mb-8 uppercase tracking-[0.15em] text-on-tertiary-fixed"><?php esc_html_e('About Us', 'novara'); ?></h5>
<?php
wp_nav_menu(array(
    'theme_location' => 'footer_about',
    'container' => false,
    'menu_class' => 'space-y-4',
    'fallback_cb' => function() {
        echo '<ul class="space-y-4">
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">' . esc_html__('Intro', 'novara') . '</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Shop With Us</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Our Story</a></li>
<li class=""><a class="font-body-md text-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Buzz</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Sustainability</a></li>
</ul>';
    },
    'add_a_class'     => 'font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors',
));
?>
</div>
<div>
<h5 class="font-label-md text-label-md font-bold mb-8 uppercase tracking-[0.15em] text-on-tertiary-fixed"><?php esc_html_e('Partner', 'novara'); ?></h5>
<?php
wp_nav_menu(array(
    'theme_location' => 'footer_partner',
    'container' => false,
    'menu_class' => 'space-y-4',
    'fallback_cb' => function() {
        echo '<ul class="space-y-4">
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Wholesale</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Food Service</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Suppliers</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Contract Farming</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Influencer Program</a></li>
</ul>';
    },
    'add_a_class'     => 'font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors',
));
?>
</div>
<div>
<h5 class="font-label-md text-label-md font-bold mb-8 uppercase tracking-[0.15em] text-on-tertiary-fixed"><?php esc_html_e('Engage', 'novara'); ?></h5>
<address class="not-italic space-y-4 text-on-tertiary-fixed-variant font-body-md">
<p class=""><?php echo wp_kses_post(novara_get_option('contact_address', "Hakati Business Center,<br>1st Floor, Shop F35,<br>Mfangano Street, Nairobi, Kenya")); ?></p>
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg">mail</span>
                        <?php echo esc_html(novara_get_option('contact_email', 'engage@novalabeeworks.xyz')); ?>
                    </p>
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg">call</span>
                        <?php echo esc_html(novara_get_option('contact_phone', '+254 721 692895')); ?>
                    </p>
</address>
</div>
</div>
<div class="border-t border-tertiary-container/20">
<div class="max-w-container-max mx-auto px-margin-desktop py-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-label-md text-label-md text-on-tertiary-fixed-variant"><?php echo esc_html(str_replace('{year}', date('Y'), novara_get_option('footer_copyright', '© {year} Novatus Limited. All rights reserved.'))); ?></p>
<div class="flex gap-8">
<?php
wp_nav_menu(array(
    'theme_location' => 'footer_legal',
    'container' => false,
    'menu_class' => 'flex gap-8',
    'fallback_cb' => function() {
        $privacy = novara_get_option('legal_privacy');
        $terms = novara_get_option('legal_terms');
        $privacy_url = $privacy ? get_permalink($privacy) : '#';
        $terms_url = $terms ? get_permalink($terms) : '#';

        echo '<div class="flex gap-8">
<a class="font-label-md text-label-md text-on-tertiary-fixed-variant hover:text-primary" href="' . esc_url($privacy_url) . '">' . esc_html__('Privacy Policy', 'novara') . '</a>
<a class="font-label-md text-label-md text-on-tertiary-fixed-variant hover:text-primary" href="' . esc_url($terms_url) . '">' . esc_html__('Terms of Use', 'novara') . '</a>
</div>';
    },
    'add_a_class'     => 'font-label-md text-label-md text-on-tertiary-fixed-variant hover:text-primary',
));
?>
</div>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
