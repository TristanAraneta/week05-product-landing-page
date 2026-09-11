@props([
    'images' => [], // array of ['src' => ..., 'alt' => ...]
    'label' => 'Event Name',
    'caption' => 'Date',
    'grayscale' => false,
])

<div @class([
    'bg-surface rounded-xl p-2 shadow-sm flex flex-col gap-2 hover:-translate-y-2 transition-transform duration-200',
    'grayscale contrast-125' => $grayscale,
])>
    @foreach ($images as $image)
        <div class="aspect-[1/1] rounded-lg overflow-hidden bg-surface-container">
            <img src="{{ $image['src'] }}" alt="{{ $image['alt'] ?? $label }}" class="w-full h-full object-cover">
        </div>
    @endforeach

    <div class="pt-2 text-center">
        <span @class([
            'font-headline-sm text-[12px] block leading-tight font-bold',
            'text-primary' => !$grayscale,
            'text-on-surface' => $grayscale,
        ])>{{ $label }}</span>
        <span class="font-mono-metric text-[10px] text-on-surface-variant">{{ $caption }}</span>
    </div>
</div>