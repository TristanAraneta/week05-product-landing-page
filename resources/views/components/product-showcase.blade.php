@props([
    'heading' => 'Print Strip Anatomy & Backdrop Lab',
    'description' => 'Choose from authentic 2×6 retro strips, modern 4×6 postcards, or high-contrast VIP Kardashian-style Glam Monochrome filters.',
    'tabs' => ['Classic 2×6 Strips', '4×6 Postcard', 'Glam Filter', 'Boomerang GIF'],
    'activeTab' => 'Classic 2×6 Strips',
    'strips' => [], // array of print-strip props
    'backdrops' => [], // array of backdrop-option props
    'specTitle' => '24.1 MP Optical Sensor',
    'specDescription' => 'We never rely on tablet cameras. We use dedicated professional mirrorless bodies with prime lenses.',
])

<section class="w-full py-20 bg-surface-container-low overflow-hidden" id="gallery">
    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">

        {{-- Header + tabs --}}
        <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-12 gap-6">
            <div>
                <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface tracking-tight">
                    {{ $heading }}
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-2 max-w-xl">
                    {{ $description }}
                </p>
            </div>

            <div class="flex items-center gap-1.5 p-1.5 bg-surface-container rounded-xl self-start">
                @foreach ($tabs as $tab)
                    <button type="button" @class([
                        'px-4 py-2 rounded-lg font-label-md text-label-md transition-all',
                        'bg-surface-container-lowest text-primary font-semibold shadow-sm' => $tab === $activeTab,
                        'text-on-surface-variant hover:text-on-surface' => $tab !== $activeTab,
                    ])>{{ $tab }}</button>
                @endforeach
            </div>
        </div>

        {{-- Bento grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            {{-- Left: strip collection --}}
            <div class="lg:col-span-7 bg-surface-container-lowest rounded-3xl p-6 lg:p-8 shadow-md">
                <div class="flex items-center justify-between pb-6">
                    <div>
                        <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Physical Sample Prints</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Archival pigment prints with customized commemorative bottom branding</p>
                    </div>
                    <span class="font-mono-metric text-xs px-2.5 py-1 rounded bg-surface-container-high text-primary font-semibold">300 DPI GLOSS</span>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-2">
                    @foreach ($strips as $strip)
                        <x-print-strip 
                            :images="$strip['images'] ?? []" 
                            :label="$strip['label'] ?? ''" 
                            :caption="$strip['caption'] ?? ''" 
                            :grayscale="$strip['grayscale'] ?? false" 
                        />
                    @endforeach
                </div>
            </div>

            {{-- Right: backdrop selector + spec card --}}
            <div class="lg:col-span-5 flex flex-col gap-6">
                <div class="bg-surface-container-lowest rounded-3xl p-6 lg:p-8 shadow-md">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-2">Backdrop Selection Gallery</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Premium 8×8 ft heavy wrinkle-resistant fabrics or lush 3D greenery.</p>

                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($backdrops as $backdrop)
                            <x-backdrop-option 
                                :image="$backdrop['image'] ?? ''" 
                                :alt="$backdrop['alt'] ?? ($backdrop['name'] ?? '')" 
                                :name="$backdrop['name'] ?? ''" 
                                :tag="$backdrop['tag'] ?? ''" 
                                :selected="$backdrop['selected'] ?? false" 
                            />
                        @endforeach
                    </div>
                </div>

                <div class="bg-primary text-on-primary rounded-3xl p-6 shadow-md flex items-center gap-5">
                    <div class="w-14 h-14 rounded-2xl bg-primary-container flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary-fixed text-[32px]">photo_camera</span>
                    </div>
                    <div>
                        <span class="font-headline-sm text-headline-sm block font-bold">{{ $specTitle }}</span>
                        <p class="font-body-sm text-body-sm text-surface-variant/80 mt-0.5">{{ $specDescription }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>