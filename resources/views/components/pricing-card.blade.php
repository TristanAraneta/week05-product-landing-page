@props([
    'name' => 'Package',
    'duration' => '2 HOURS',
    'description' => 'Package description goes here.',
    'price' => '$599',
    'priceSuffix' => '/ flat event rate',
    'features' => [], // ['label' => string, 'included' => bool]
    'ctaLabel' => 'Select Package',
    'ctaHref' => '#contact',
    'featured' => false,
    'featuredLabel' => 'Most Popular Choice',
])

<div @class([
    'rounded-3xl p-8 flex flex-col justify-between transition-all duration-200 relative',
    'bg-surface-container-lowest shadow-sm hover:shadow-lg' => !$featured,
    'bg-surface-container-lowest shadow-xl ring-2 ring-primary-container transform md:-translate-y-2' => $featured,
])>

    @if ($featured)
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary-container text-on-primary px-4 py-1 rounded-full font-label-sm text-label-sm font-semibold shadow-md uppercase tracking-wider flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[15px]">favorite</span>
            <span>{{ $featuredLabel }}</span>
        </div>
    @endif

    <div>
        <div @class(['flex justify-between items-center mb-4', 'mt-2' => $featured])>
            <span @class([
                'font-headline-sm text-headline-sm font-semibold',
                'text-on-surface' => !$featured,
                'text-primary font-bold' => $featured,
            ])>{{ $name }}</span>

            <span @class([
                'px-2.5 py-1 rounded font-mono-metric text-xs',
                'bg-surface-container text-on-surface' => !$featured,
                'bg-primary-container/10 text-primary-container font-semibold' => $featured,
            ])>{{ $duration }}</span>
        </div>

        <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">{{ $description }}</p>

        <div class="flex items-baseline gap-1 mb-8">
            <span @class([
                'font-display-hero text-[44px] leading-tight font-bold',
                'text-on-surface' => !$featured,
                'text-primary' => $featured,
            ])>{{ $price }}</span>
            <span class="font-body-sm text-body-sm text-on-surface-variant">{{ $priceSuffix }}</span>
        </div>

        <div class="flex flex-col gap-3.5 pb-8">
            @foreach ($features as $feature)
                @php $included = $feature['included'] ?? true; @endphp
                <div @class([
                    'flex items-center gap-3 font-body-sm text-body-sm',
                    'text-on-surface' => $included,
                    'text-on-surface-variant/60' => !$included,
                ])>
                    <span @class([
                        'material-symbols-outlined text-[20px]',
                        ($featured ? 'text-primary-container' : 'text-secondary') => $included,
                        'text-outline-variant' => !$included,
                    ])>{{ $included ? 'check_circle' : 'remove' }}</span>
                    <span @class([
                        'line-through' => !$included,
                        'font-medium' => $included && ($feature['emphasis'] ?? false),
                        'font-semibold text-primary' => $included && $featured && ($feature['emphasis'] ?? false),
                    ])>{{ $feature['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <a href="{{ $ctaHref }}" @class([
        'w-full h-12 rounded-xl font-label-md text-label-md flex items-center justify-center transition-all',
        'bg-surface-container-high hover:bg-surface-container-highest text-on-surface' => !$featured,
        'bg-primary-container hover:bg-primary text-on-primary shadow-md hover:shadow-lg' => $featured,
    ])>
        {{ $ctaLabel }}
    </a>
</div>