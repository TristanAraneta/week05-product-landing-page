@props([
    'badge' => 'Now Booking for 2025 Weddings & Corporate Galas',
    'titleLine1' => 'Pixels That Last,',
    'titleLine2' => 'Memories That Stay.',
    'subheadline' => 'Elevate your celebrations with studio-grade lighting, instant lab-quality prints, interactive touchscreens, and live cloud delivery crafted for luxury events.',
    'primaryCtaLabel' => 'Book Your Date',
    'primaryCtaHref' => '#pricing',
    'secondaryCtaLabel' => 'View Sample Prints',
    'secondaryCtaHref' => '#gallery',
    'ratingCount' => '1,200+',
    'heroImage' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAVuaUfE2XjZEg8YPg0hS1JD61jw2tHsj2rv9E13Q_SO6JlLZ-pDlTOqwahkbwGyfYT2StIMFw33ZwI7AY3qdIiRWEpWxPOa9Y3DQxhiiHEPezjyAXfrr21Y1ubaO1riJdxPgyuW4ZMisiSCnDdyhfOiDJTdcmQmwfVsegiI32N_Wezfnn2ppizEdhDuyKhkU8kXE-CANyF2i9aIj8t9KmOH9bCE2SDmYqOKrLwZVbB1ht9egHpinu4',
    'heroImageAlt' => 'High-end sleek architectural event photobooth kiosk with a bright illuminated halo ring light',
    'liveMetricLabel' => 'Live Capture',
    'liveMetricValue' => '12,400+ smiles',
    'qrBadgeLabel' => 'Real-Time Sync',
    'qrBadgeValue' => 'Instant AirDrop & QR',
    'stripImage1' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCCjZ4FFHYjrMM89N2j2qZ-mA8YlN0iH53lA9UZYfyX-8Fwy0XzqVYYh3J4hNDsYvh7PR62bvuUEZwqKK-a4yUYzLI2m0gDMSb6BS72QjfcVvEW-cByXdjTX2IKXmd8Sm_VkjcPAp96T_58BlWAfWcMHzJk_WRvENj4HeEK8ROrjn-vBF0aFGt99Oqognlx_bz6PR27Dwh5Ecp9PzDEJ1C1GBk141cHb7a-X-wFpcyal1ywuT-R9Ipn',
    'stripImage2' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAC4zIb996Xl5da0RvN8NqWEu-NgG9jw2v_xWVcwvpMmy-vkdNMeLDLbhRw59WGlQj9Y34am2PILu9OjGryeju2E-uj-vfFbIMiLPPdTxepz-hylq4QHN0gXg7K5WR7VWFQqnr-a2YTYv4SEuzVuJ61VJYOloH5oCMF7o3KJJfIbVzp9Mck6XnopF0MfS8BbQ-Jd83bpKHuF3DfDLevI4DLF-in77EfjTv9_RtRFFHASZo1wD1_MP04',
    'stripCaption' => '08s Dye-Sublimation',
])

<section class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-lowest via-background to-surface-container-low pt-10 pb-20 lg:pt-16 lg:pb-28">

    {{-- Ambient glows --}}
    <div class="absolute top-0 right-1/4 -z-10 w-96 h-96 bg-primary-container/10 rounded-full blur-3xl pointer-events-none transform -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-1/12 -z-10 w-80 h-80 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

            {{-- Text column --}}
            <div class="lg:col-span-6 flex flex-col items-start gap-6">

                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary-container/5 text-primary-container font-label-sm text-label-sm shadow-sm hover:bg-primary-container/10 transition-colors">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                    </span>
                    <span>{{ $badge }}</span>
                    <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                </div>

                <h1 class="font-display-hero text-display-hero-mobile md:text-display-hero text-on-surface tracking-tight leading-[1.08]">
                    {{ $titleLine1 }} <br class="hidden sm:inline">
                    <span class="bg-gradient-to-r from-primary-container via-secondary to-primary-container bg-clip-text text-transparent">{{ $titleLine2 }}</span>
                </h1>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    {{ $subheadline }}
                </p>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full sm:w-auto pt-2">
                    <a href="{{ $primaryCtaHref }}"
                       class="inline-flex items-center justify-center gap-2 h-13 px-8 rounded-2xl font-label-md text-label-md text-on-primary bg-primary-container hover:bg-primary transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        <span>{{ $primaryCtaLabel }}</span>
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    </a>
                    <a href="{{ $secondaryCtaHref }}"
                       class="inline-flex items-center justify-center gap-2 h-13 px-6 rounded-2xl font-label-md text-label-md text-on-surface bg-surface-container-lowest hover:bg-surface-container-high transition-all duration-200 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-[20px]">photo_library</span>
                        <span>{{ $secondaryCtaLabel }}</span>
                    </a>
                </div>

                <div class="pt-6 flex items-center gap-6">
                    <div class="flex -space-x-2">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-primary text-on-primary text-xs font-semibold shadow-sm ring-2 ring-surface">99%</span>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-secondary text-on-secondary text-xs font-semibold shadow-sm ring-2 ring-surface">5★</span>
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-primary-container text-on-primary text-xs font-semibold shadow-sm ring-2 ring-surface">NYC</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center text-amber-500">
                            @for ($i = 0; $i < 5; $i++)
                                <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            @endfor
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant font-medium">Over {{ $ratingCount }} events elevated in NY, LA &amp; SF</span>
                    </div>
                </div>
            </div>

            {{-- Visual column --}}
            <div class="lg:col-span-6 relative flex items-center justify-center">
                <div class="relative w-full max-w-lg rounded-3xl p-3 bg-surface-container-lowest shadow-2xl">

                    <div class="relative rounded-2xl overflow-hidden aspect-[4/3] bg-surface-container">
                        <img src="{{ $heroImage }}" alt="{{ $heroImageAlt }}" class="w-full h-full object-cover">

                        <div class="absolute top-4 left-4 bg-surface-container-lowest/90 backdrop-blur-md px-3.5 py-2 rounded-xl shadow-lg flex items-center gap-2.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-ping"></span>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider">{{ $liveMetricLabel }}</span>
                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $liveMetricValue }}</span>
                            </div>
                        </div>

                        <div class="absolute bottom-4 right-4 bg-primary text-on-primary px-4 py-2.5 rounded-2xl shadow-xl flex items-center gap-3">
                            <span class="material-symbols-outlined text-secondary-fixed text-[24px]">qr_code_2</span>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-[10px] text-secondary-fixed uppercase tracking-wider font-semibold">{{ $qrBadgeLabel }}</span>
                                <span class="font-label-md text-label-md font-bold">{{ $qrBadgeValue }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="hidden sm:flex absolute -bottom-8 -left-6 bg-surface-container-lowest rounded-2xl p-2.5 shadow-2xl flex-col items-center gap-1.5 transform -rotate-6 w-36 hover:rotate-0 transition-transform duration-300">
                        <div class="w-full aspect-[1/1] rounded-lg overflow-hidden bg-surface-container">
                            <img src="{{ $stripImage1 }}" alt="Photobooth strip preview" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full aspect-[1/1] rounded-lg overflow-hidden bg-surface-container">
                            <img src="{{ $stripImage2 }}" alt="Photobooth strip preview" class="w-full h-full object-cover">
                        </div>
                        <span class="font-mono-metric text-[10px] text-on-surface-variant tracking-wider uppercase">{{ $stripCaption }}</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>