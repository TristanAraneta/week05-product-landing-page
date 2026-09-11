@props([
    'quote' => 'Testimonial quote goes here.',
    'rating' => 5, // 1-5
    'verifiedLabel' => 'Verified Booking',
    'name' => 'Reviewer Name',
    'event' => 'Event Name, Location',
    'initials' => 'AB',
    'avatarBg' => 'primary-container', // 'primary-container' | 'secondary' | 'primary'
])

@php
    $avatarClasses = match ($avatarBg) {
        'secondary' => 'bg-secondary text-on-secondary',
        'primary' => 'bg-primary text-on-primary',
        default => 'bg-primary-container text-on-primary',
    };
@endphp

<div class="bg-surface rounded-2xl p-8 shadow-sm flex flex-col justify-between">
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <div class="flex text-amber-500">
                @for ($i = 0; $i < 5; $i++)
                    <span class="material-symbols-outlined text-[18px] {{ $i >= $rating ? 'opacity-30' : '' }}" style="font-variation-settings: 'FILL' 1;">star</span>
                @endfor
            </div>
            <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[11px] font-label-sm">{{ $verifiedLabel }}</span>
        </div>

        <p class="font-body-md text-body-md text-on-surface italic">
            "{{ $quote }}"
        </p>
    </div>

    <div class="pt-6 flex items-center gap-3">
        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm {{ $avatarClasses }}">{{ $initials }}</div>
        <div>
            <span class="font-headline-sm text-[15px] block font-semibold text-on-surface">{{ $name }}</span>
            <span class="font-body-sm text-xs text-on-surface-variant">{{ $event }}</span>
        </div>
    </div>
</div>