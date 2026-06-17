<!-- Main Layout -->
<main class="flex-grow flex flex-col md:flex-row max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop py-10 gap-gutter">
    <aside class="w-full md:w-64 flex-shrink-0 mb-8 md:mb-0">
        <div class="sticky top-32">
            <h2 class="font-headline-sm text-headline-sm text-primary mb-6">My Account</h2>
            <?php do_action( 'woocommerce_account_navigation' ); ?>
        </div>
    </aside>
    <section class="flex-grow">
        <div class="bg-surface-container-low rounded-2xl p-6 md:p-10 shadow-soft">
            <?php do_action( 'woocommerce_account_content' ); ?>
        </div>
    </section>
</main>