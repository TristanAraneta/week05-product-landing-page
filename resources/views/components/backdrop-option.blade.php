@props([
    'image' => '',
    'name' => '',
    'tag' => '',
    'alt' => null,
    'selected' => false,
])

<div @class([
    'p-3 rounded-2xl transition-all cursor-pointer border-2',
    'bg-surface-container border-primary shadow-sm' => $selected,
    'bg-surface-container-low border-transparent hover:border-outline-variant' => !$selected,
])>
    <div class="relative aspect-4/3 w-full rounded-xl overflow-hidden bg-surface-container-high mb-3">
        @if (!empty($image))
            <img 
                src="{{ asset($image) }}" 
                alt="{{ $alt ?? $name }}" 
                class="w-full h-full object-cover"
                loading="lazy"
            >
        @else
            {{-- Fallback placeholder if image path is missing --}}
            <div class="w-full h-full flex items-center justify-center bg-surface-container-highest text-on-surface-variant font-label-md">
                {{ $name }}
            </div>
        @endif
    </div>

    <div>
        <h4 class="font-headline-sm text-sm font-semibold text-on-surface">{{ $name }}</h4>
        <span class="font-body-sm text-xs text-on-surface-variant">{{ $tag }}</span>
    </div>
</div>