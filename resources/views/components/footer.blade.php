@props([
    'brand' => 'Pixelar Photobooth',
    'logo' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCbDzbxax61pBk9BFZVLW2C7CubMhAt-0RDVffJiM-mjBi-LWosD2t-LU-P2v3xbJwF19nk-B2hzdRxZvt8y1heoBwXraJ3reUQdE3KDyfxy5x3iXY1vk_fn6eotbYibytnhycCbSyZR61ghyeVxwa1Jl-4L-tIQId3-A1D1fcrjxxrxAUGVlVA3lXpbw9Zp2Saxf0gf7zh2yTVapTtwwd48lkMCLmAO18RaMUwKLYocUu6AAIyfOO56Ehiq3Xpzq9qzQ',
    'description' => 'High-end event photobooth technology blending computational optics, instant studio-grade prints, and seamless experiential brand activations.',
    'cities' => ['New York', 'Los Angeles', 'London'],
    'productLinks' => [
        ['label' => 'Hardware Tiers', 'href' => '#'],
        ['label' => 'Glam Filters', 'href' => '#'],
        ['label' => 'Instant Printing', 'href' => '#'],
        ['label' => 'Analytics Portal', 'href' => '#'],
    ],
    'phone' => '+1 (800) 749-3527',
    'email' => 'hello@pixelarbooth.com',
    'supportHours' => '24/7 Dispatch Support',
    'newsletterPlaceholder' => 'Enter work email',
    'newsletterAction' => '#',
    'copyright' => '© 2025 Pixelar Photobooth Inc. All rights reserved.',
    'legalLinks' => [
        ['label' => 'Privacy Policy', 'href' => '#'],
        ['label' => 'Rental Terms', 'href' => '#'],
        ['label' => 'Security & SOC2', 'href' => '#'],
    ],
])

<footer class="w-full bg-tertiary text-on-tertiary pt-space-2xl pb-space-xl">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-2xl">

            {{-- Brand column --}}
            <div class="lg:col-span-2 flex flex-col gap-space-md">
                <div class="flex items-center gap-space-sm">
                    <img src="{{ $logo }}" alt="{{ $brand }}" class="h-9 w-auto object-contain rounded bg-surface-container-lowest p-0.5">
                    <span class="font-headline-md text-headline-md tracking-tight text-on-tertiary">{{ $brand }}</span>
                </div>

                <p class="font-body-sm text-body-sm text-on-tertiary-container max-w-sm">{{ $description }}</p>

                <div class="flex items-center gap-space-sm pt-space-xs flex-wrap">
                    @foreach ($cities as $city)
                        <span class="inline-flex items-center gap-space-xs px-space-sm py-space-xs rounded bg-tertiary-container text-on-tertiary font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-[16px]">pin_drop</span>{{ $city }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Product links --}}
            <div class="flex flex-col gap-space-sm">
                <h4 class="font-headline-sm text-headline-sm text-on-tertiary">Product</h4>
                <div class="flex flex-col gap-space-xs">
                    @foreach ($productLinks as $link)
                        <a href="{{ $link['href'] }}" class="font-body-sm text-body-sm text-on-tertiary-container hover:text-on-tertiary transition-colors">{{ $link['label'] }}</a>
                    @endforeach
                </div>
            </div>

            {{-- Contact --}}
            <div class="flex flex-col gap-space-sm">
                <h4 class="font-headline-sm text-headline-sm text-on-tertiary">Contact &amp; Support</h4>
                <div class="flex flex-col gap-space-xs">
                    <span class="font-body-sm text-body-sm text-on-tertiary-container flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-[16px]">call</span>{{ $phone }}
                    </span>
                    <span class="font-body-sm text-body-sm text-on-tertiary-container flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-[16px]">mail</span>{{ $email }}
                    </span>
                    <span class="font-body-sm text-body-sm text-on-tertiary-container flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-[16px]">schedule</span>{{ $supportHours }}
                    </span>
                </div>
            </div>

            {{-- Newsletter --}}
            <div class="flex flex-col gap-space-sm">
                <h4 class="font-headline-sm text-headline-sm text-on-tertiary">Stay Updated</h4>
                <p class="font-body-sm text-body-sm text-on-tertiary-container">Get early access to holiday slots and software updates.</p>
                <form action="{{ $newsletterAction }}" method="POST" class="flex items-center gap-space-xs">
                    @csrf
                    <input type="email" name="email" placeholder="{{ $newsletterPlaceholder }}"
                           class="h-10 px-space-sm rounded-lg bg-tertiary-container text-on-tertiary font-body-sm text-body-sm placeholder:text-on-tertiary-container focus:outline-none focus:ring-1 focus:ring-secondary-container w-full">
                    <button type="submit" class="h-10 px-space-md rounded-lg bg-primary-container text-on-primary font-label-sm text-label-sm hover:bg-primary transition-colors flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </form>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md">
            <p class="font-body-sm text-body-sm text-on-tertiary-container">{{ $copyright }}</p>
            <div class="flex items-center gap-space-lg">
                @foreach ($legalLinks as $link)
                    <a href="{{ $link['href'] }}" class="font-body-sm text-body-sm text-on-tertiary-container hover:text-on-tertiary transition-colors">{{ $link['label'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>