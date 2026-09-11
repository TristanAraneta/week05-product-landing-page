@props([
    'brand' => 'Pixelar Photobooth',
    'logo' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCHU2D5bEYh8VfF20dzI1RLOX4vW6lnjwEGMO_7nIWwLOAnqQ9Il-P_f4jU5nIsMKl58vOamlRJ3ZGcd2w0qkrK7lxhq-wAxxbEchH-RUx-UIYkuESoxfFI_dkHYzBrV-F7H-8Sl2F9fHUhF91iHbMXd29NRjW6qLexVBzlKVyyFTWb0j2n37BaO0PvnoAhV2jWta5iCho-4dZ73KOBNugXdrM0OxIhZzKRF9GI2J_u_ZF52uEe8TZ_VOFSY6yB40mL4Q',
    'links' => [],
    'loginHref' => '#',
    'ctaHref' => '#pricing',
    'ctaLabel' => 'Get Started',
])

<header class="fixed top-0 inset-x-0 z-50 bg-surface-container-lowest/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(15,23,42,0.06)]">
    <div class="h-20 max-w-7xl mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">

        {{-- Brand --}}
        <div class="flex items-center gap-space-sm">
            <img src="{{ $logo }}" alt="{{ $brand }}" class="h-9 w-auto object-contain rounded">
            <span class="font-headline-sm text-headline-sm text-primary tracking-tight">{{ $brand }}</span>
        </div>

        {{-- Nav links --}}
        <nav class="hidden lg:flex items-center gap-space-lg">
            @foreach ($links as $link)
                <a href="{{ $link['href'] ?? '#' . ($link['path'] ?? '') }}"
                   data-path="{{ $link['path'] ?? '' }}"
                   @if(!empty($link['active'])) aria-current="page" @endif
                   class="transition-colors duration-150 {{ !empty($link['active'])
                        ? 'text-primary font-headline-sm underline decoration-secondary decoration-2 underline-offset-8'
                        : 'font-label-md text-label-md text-on-surface-variant hover:text-primary' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        {{-- Actions --}}
        <div class="flex items-center gap-space-sm sm:gap-space-md">
            <a href="{{ $loginHref }}"
               class="hidden sm:inline-flex items-center justify-center h-11 px-space-md rounded-xl font-label-md text-label-md text-on-surface bg-surface-container-lowest border border-outline-variant hover:bg-surface-container-low hover:text-primary transition-all duration-150">
                Sign In
            </a>
            <a href="{{ $ctaHref }}"
               class="inline-flex items-center justify-center h-11 px-space-lg rounded-xl font-label-md text-label-md text-on-primary bg-primary-container hover:bg-primary transition-all duration-150 shadow-[0_2px_4px_rgba(92,6,18,0.18)] hover:scale-[1.01]">
                {{ $ctaLabel }}
            </a>
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center flex-shrink-0 ml-space-xs">
                <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
            </div>
        </div>

    </div>
</header>