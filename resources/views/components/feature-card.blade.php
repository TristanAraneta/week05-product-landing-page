@props([
    'icon' => 'bolt',
    'title' => 'Feature Title',
    'description' => 'Feature description goes here.',
    'index' => '01',
    'label' => 'Category',
    'iconBg' => 'primary-container', // 'primary-container' | 'secondary'
])

@php
    $isSecondary = $iconBg === 'secondary';
@endphp

<div class="group bg-surface-container-lowest p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
    <div class="flex flex-col gap-4">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-colors duration-200
            {{ $isSecondary
                ? 'bg-secondary/10 text-secondary group-hover:bg-secondary group-hover:text-on-secondary'
                : 'bg-primary-container/10 text-primary-container group-hover:bg-primary-container group-hover:text-on-primary' }}">
            <span class="material-symbols-outlined text-[24px]">{{ $icon }}</span>
        </div>

        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">{{ $title }}</h3>

        <p class="font-body-md text-body-md text-on-surface-variant">
            {{ $description }}
        </p>
    </div>

    <div class="mt-8 pt-4 flex items-center justify-between">
        <span class="font-mono-metric text-label-sm text-secondary uppercase tracking-wider">{{ $index }} / {{ $label }}</span>
        <code class="text-[10px] text-on-surface-variant/70 font-mono-metric">components/feature-card.blade.php</code>
    </div>
</div>