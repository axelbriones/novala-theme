<?php get_header(); ?>

<!-- Main Layout -->
<main class="flex-grow flex flex-col md:flex-row max-w-container-max mx-auto w-full px-margin-mobile md:px-margin-desktop py-10 gap-gutter">
<!-- Side Navigation -->
<aside class="w-full md:w-64 flex-shrink-0 mb-8 md:mb-0">
<div class="sticky top-32">
<h2 class="font-headline-sm text-headline-sm text-primary mb-6">My Account</h2>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-4 py-3 bg-surface-container-low text-primary rounded-lg font-label-md text-label-md border-l-4 border-primary" href="#">
<span class="material-symbols-outlined icon-fill">dashboard</span>
                        Dashboard
                    </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-low hover:text-primary transition-colors rounded-lg font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">receipt_long</span>
                        Orders
                    </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-low hover:text-primary transition-colors rounded-lg font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">location_on</span>
                        Addresses
                    </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-low hover:text-primary transition-colors rounded-lg font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">payment</span>
                        Payment Methods
                    </a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-low hover:text-primary transition-colors rounded-lg font-label-md text-label-md" href="#">
<span class="material-symbols-outlined">manage_accounts</span>
                        Account Details
                    </a>
<button class="flex items-center gap-3 px-4 py-3 mt-4 text-error hover:bg-error-container transition-colors rounded-lg font-label-md text-label-md text-left">
<span class="material-symbols-outlined">logout</span>
                        Log Out
                    </button>
</nav>
</div>
</aside>
<!-- Dashboard Canvas -->
<div class="flex-grow space-y-10">
<!-- Welcome Banner -->
<section class="glass-panel soft-shadow rounded-xl p-8 relative overflow-hidden">
<div class="absolute right-0 top-0 w-64 h-64 bg-primary-fixed opacity-20 rounded-full blur-3xl -mr-20 -mt-20"></div>
<div class="relative z-10">
<h1 class="font-display-lg text-display-lg text-primary mb-2">Welcome back, Eleanor.</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                        From your dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.
                    </p>
</div>
</section>
<!-- Overview Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Loyalty Card -->
<div class="bg-surface-container-lowest rounded-xl p-6 soft-shadow flex flex-col justify-between">
<div class="flex items-center gap-3 mb-4 text-secondary">
<span class="material-symbols-outlined">workspace_premium</span>
<h3 class="font-label-md text-label-md uppercase tracking-wider">Golden Tier</h3>
</div>
<div>
<p class="font-headline-md text-headline-md text-primary mb-1">2,450</p>
<p class="font-caption text-caption text-on-surface-variant">Nectar Points Available</p>
</div>
<a class="mt-4 font-label-md text-label-md text-secondary hover:text-primary transition-colors flex items-center gap-1" href="#">
                        Redeem Points <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Next Delivery -->
<div class="bg-surface-container-lowest rounded-xl p-6 soft-shadow lg:col-span-2 flex flex-col justify-between relative overflow-hidden group">
<div class="absolute inset-0 z-0">
<img alt="A jar of premium, golden raw honey sitting elegantly on a rustic wooden table, illuminated by warm, late afternoon golden-hour sunlight. The background is slightly out of focus, showing subtle hints of natural greenery and a light, airy kitchen setting. The image evokes a sense of artisanal quality, organic purity, and calm luxury, perfectly aligning with an upscale artisanal modernism aesthetic." class="w-full h-full object-cover opacity-20 group-hover:opacity-30 transition-opacity duration-700" data-alt="A jar of premium, golden raw honey sitting elegantly on a rustic wooden table, illuminated by warm, late afternoon golden-hour sunlight. The background is slightly out of focus, showing subtle hints of natural greenery and a light, airy kitchen setting. The image evokes a sense of artisanal quality, organic purity, and calm luxury, perfectly aligning with an upscale artisanal modernism aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFRlZjMwNyAVxI6uDSPkiyAI1x7kmAjtUS1y9GKGMqtR8gEXUayi5l67gTGKqEpyxjvWWOq9nOS2u-C_vFHoUIBLC339bB2pLgteVkxxslUgU-sWOniXQTGvbTzR4yvmwc7_sfWXUjTMQmT559JxOY8FEniH5Y3XnFwhk_oxmRUw192l26Ng1hjlelQch9o2Q1w7YXSEVQkIxGHjmE43VQ04vJ9rVjcBnej8Dyty-T9-D12shVxiyP0q_WYz3jeAgkapEL9Mg8vNU"/>
</div>
<div class="relative z-10 flex flex-col h-full justify-between">
<div class="flex justify-between items-start mb-4">
<div class="flex items-center gap-3 text-on-background">
<span class="material-symbols-outlined">local_shipping</span>
<h3 class="font-label-md text-label-md uppercase tracking-wider">Upcoming Subscription</h3>
</div>
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full font-caption text-caption">Processing</span>
</div>
<div>
<p class="font-headline-sm text-headline-sm text-primary mb-1">Wildflower Raw Honey (Set of 3)</p>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Expected delivery: Oct 12 - Oct 14</p>
<button class="px-6 py-2 bg-transparent border-[1.5px] border-primary text-primary font-label-md text-label-md rounded hover:bg-primary hover:text-on-primary transition-colors">
                                Manage Subscription
                            </button>
</div>
</div>
</div>
</section>
<!-- Recent Orders -->
<section>
<div class="flex justify-between items-end mb-6">
<h2 class="font-headline-md text-headline-md text-primary">Recent Orders</h2>
<a class="font-label-md text-label-md text-secondary hover:text-primary transition-colors flex items-center gap-1" href="#">
                        View All <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<div class="bg-surface-container-lowest rounded-xl soft-shadow overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-surface-variant bg-surface-container-low text-on-surface-variant font-label-md text-label-md">
<th class="px-6 py-4 font-normal">Order ID</th>
<th class="px-6 py-4 font-normal">Date</th>
<th class="px-6 py-4 font-normal">Status</th>
<th class="px-6 py-4 font-normal">Total</th>
<th class="px-6 py-4 font-normal text-right">Actions</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md text-on-background">
<tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
<td class="px-6 py-4 font-medium">#NBW-8932</td>
<td class="px-6 py-4 text-on-surface-variant">Sep 28, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] icon-fill">check_circle</span> Delivered
                                        </span>
</td>
<td class="px-6 py-4 font-medium">$85.00</td>
<td class="px-6 py-4 text-right">
<button class="text-secondary hover:text-primary font-label-md text-label-md transition-colors">View</button>
</td>
</tr>
<tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
<td class="px-6 py-4 font-medium">#NBW-8710</td>
<td class="px-6 py-4 text-on-surface-variant">Aug 15, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] icon-fill">check_circle</span> Delivered
                                        </span>
</td>
<td class="px-6 py-4 font-medium">$120.50</td>
<td class="px-6 py-4 text-right">
<button class="text-secondary hover:text-primary font-label-md text-label-md transition-colors">View</button>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="px-6 py-4 font-medium">#NBW-8405</td>
<td class="px-6 py-4 text-on-surface-variant">Jun 02, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1 text-primary">
<span class="material-symbols-outlined text-[16px] icon-fill">check_circle</span> Delivered
                                        </span>
</td>
<td class="px-6 py-4 font-medium">$45.00</td>
<td class="px-6 py-4 text-right">
<button class="text-secondary hover:text-primary font-label-md text-label-md transition-colors">View</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
</div>
</main>

<?php get_footer(); ?>