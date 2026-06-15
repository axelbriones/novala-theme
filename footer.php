<footer class="bg-tertiary-fixed dark:bg-tertiary-fixed-variant">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-20 max-w-container-max mx-auto">
<div class="flex flex-col gap-6">
<span class="font-headline-sm text-headline-sm font-bold text-on-tertiary-fixed">NOVALA Bee Works</span>
<p class="text-on-tertiary-fixed-variant font-body-md leading-relaxed">
                    Crafting nature's finest honey while preserving the beauty and biodiversity of the African savannah.
                </p>
<div class="mb-4"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDugRaZ4aFxiksZXpG6loiiemlezbaqzYmL3dZiQIn9UHlnvpI1Cw53LHDRgGkKcLq-hkOErpjXlFprPH8wz3wgRGpfD17VuQqvebNt7EamY1H3OncCZAZsyerhkhq4E5dQQ9MTiFF2x41c58Zb9r_29GCtSdpQBVOVhX4RQPsFwUNCboBeQQY2-ZBpqwRkr-2OG3OgqDsb1whehQX5HK5zCKK07CNwh0fqLKrdpXHMWu78mHHomum07iXxPsOcOs9LjDIQi3KYZFM" alt="Sustainable Kenya Listed Directory" class="h-20 w-auto opacity-90 hover:opacity-100 transition-opacity"></div><div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="<?php echo function_exists('get_field') && get_field('social_facebook', 'option') ? esc_url(get_field('social_facebook', 'option')) : '#'; ?>">
<span class="material-symbols-outlined text-sm">public</span>
</a>
<a class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="mailto:<?php echo function_exists('get_field') && get_field('contact_email', 'option') ? antispambot(get_field('contact_email', 'option')) : 'engage@novalabeeworks.xyz'; ?>">
<span class="material-symbols-outlined text-sm">alternate_email</span>
</a>
<a class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:opacity-80 transition-opacity" href="#">
<span class="material-symbols-outlined text-sm">share</span>
</a>
</div>
</div>
<div>
<h5 class="font-label-md text-label-md font-bold mb-8 uppercase tracking-[0.15em] text-on-tertiary-fixed">About Us</h5>
<ul class="space-y-4">
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Intro</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Shop With Us</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Our Story</a></li>
<li class=""><a class="font-body-md text-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Buzz</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Sustainability</a></li>
</ul>
</div>
<div>
<h5 class="font-label-md text-label-md font-bold mb-8 uppercase tracking-[0.15em] text-on-tertiary-fixed">Partner</h5>
<ul class="space-y-4">
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Wholesale</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Food Service</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Suppliers</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Contract Farming</a></li>
<li class=""><a class="font-body-md text-on-tertiary-fixed-variant hover:text-primary transition-colors" href="#">Influencer Program</a></li>
</ul>
</div>
<div>
<h5 class="font-label-md text-label-md font-bold mb-8 uppercase tracking-[0.15em] text-on-tertiary-fixed">Engage</h5>
<address class="not-italic space-y-4 text-on-tertiary-fixed-variant font-body-md">
<p class=""><?php echo function_exists('get_field') && get_field('contact_address', 'option') ? get_field('contact_address', 'option') : 'Hakati Business Center,<br>1st Floor, Shop F35,<br>Mfangano Street, Nairobi, Kenya'; ?></p>
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg">mail</span>
                        <?php echo function_exists('get_field') && get_field('contact_email', 'option') ? get_field('contact_email', 'option') : 'engage@novalabeeworks.xyz'; ?>
                    </p>
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg">call</span>
                        <?php echo function_exists('get_field') && get_field('contact_phone', 'option') ? get_field('contact_phone', 'option') : '+254 721 692895'; ?>
                    </p>
</address>
</div>
</div>
<div class="border-t border-tertiary-container/20">
<div class="max-w-container-max mx-auto px-margin-desktop py-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-label-md text-label-md text-on-tertiary-fixed-variant">© 2026 Novatus Limited. All rights reserved.</p>
<div class="flex gap-8">
<a class="font-label-md text-label-md text-on-tertiary-fixed-variant hover:text-primary" href="#">Privacy Policy</a>
<a class="font-label-md text-label-md text-on-tertiary-fixed-variant hover:text-primary" href="#">Terms of Use</a>
<a class="font-label-md text-label-md text-on-tertiary-fixed-variant hover:text-primary" href="#">Legal</a>
</div>
</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
