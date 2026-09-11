<x-layout>
    <main>
        {{-- Hero Banner Section --}}
        <x-hero />

        {{-- Features Grid Section --}}
        <section class="py-20 bg-surface-container-lowest">
            <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="font-label-md text-label-md uppercase tracking-widest text-primary font-bold">Why Choose Us</span>
                    <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl font-bold text-on-surface mt-2">
                        Studio Quality, Anywhere You Need It
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <x-feature-card 
                        index="01"
                        label="Printing"
                        icon="print" 
                        title="HD Dye-Sublimation Prints" 
                        description="Lab-quality lab prints that dry instantly and resist smudges or fading for a lifetime." 
                    />
                    <x-feature-card 
                        index="02"
                        label="Design"
                        icon="design_services" 
                        title="Bespoke Custom Templates" 
                        description="Tailored photo strip frames customized specifically to match your event theme and branding." 
                    />
                    <x-feature-card 
                        index="03"
                        label="Props"
                        icon="auto_awesome" 
                        title="Curated Premium Props" 
                        description="Stylish, sanitized, high-quality prop collections curated specifically for weddings and galas." 
                    />
                    <x-feature-card 
                        index="04"
                        label="Lighting"
                        icon="wb_sunny" 
                        title="Studio Ring & Flash Lighting" 
                        description="Professional softbox and diffusion lighting setups designed to flatter every single guest." 
                    />
                    <x-feature-card 
                        index="05"
                        label="Digital"
                        icon="qr_code_2" 
                        title="Instant Live QR & AirDrop" 
                        description="Instant digital downloads straight to smartphones via local QR codes or high-speed AirDrop." 
                    />
                    <x-feature-card 
                        index="06"
                        label="Staff"
                        icon="badge" 
                        title="Dedicated On-Site Technicians" 
                        description="Friendly, professional booth operators handle tech setups and guide guests smoothly throughout." 
                    />
                </div>
            </div>
        </section>

        {{-- Product Showcase Section --}}
        <x-product-showcase
            :strips="[
                ['label' => 'Vintage Luxe', 'caption' => '2x6 Strip'],
                ['label' => 'Modern Minimalist', 'caption' => '4x6 Postcard'],
                ['label' => 'Neon Party', 'caption' => '2x6 Strip'],
            ]"
            :backdrops="[
                ['name' => 'Shimmer Gold', 'tag' => 'Glamour'],
                ['name' => 'Matte Velvet', 'tag' => 'Classic'],
                ['name' => 'Botanical Wall', 'tag' => 'Rustic'],
                ['name' => 'Minimalist White', 'tag' => 'Studio'],
            ]"
        />

        {{-- Pricing Packages Section --}}
        <section id="pricing" class="py-20 bg-surface">
            <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="font-label-md text-label-md uppercase tracking-widest text-primary font-bold">Transparent Rates</span>
                    <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl font-bold text-on-surface mt-2">
                        Simple Packages for Any Event
                    </h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                    <x-pricing-card 
                        name="Essential Package" 
                        price="$350" 
                        duration="2 Hours"
                        :featured="false"
                        :features="[
                            ['label' => 'Unlimited 2x6 Photo Strips'],
                            ['label' => 'Standard Prop Station'],
                            ['label' => 'Digital Album via QR Code'],
                            ['label' => '1 On-Site Attendant'],
                        ]" 
                    />
                    <x-pricing-card 
                        name="Signature Experience" 
                        price="$600" 
                        duration="4 Hours"
                        :featured="true"
                        :features="[
                            ['label' => 'Unlimited 2x6 & 4x6 Prints'],
                            ['label' => 'Custom Branded Layout'],
                            ['label' => 'Premium Backdrop Selection'],
                            ['label' => 'Live Guest AirDrop Station'],
                            ['label' => 'Guestbook & Memory Keepsake'],
                            ['label' => '2 On-Site Attendants'],
                        ]" 
                    />
                    <x-pricing-card 
                        name="Corporate & Luxe" 
                        price="$950" 
                        duration="Full Event"
                        :featured="false"
                        :features="[
                            ['label' => 'Custom Vinyl Backdrop Wrap'],
                            ['label' => 'Instant Social Sharing Kiosk'],
                            ['label' => 'Real-Time Live Web Gallery'],
                            ['label' => 'Raw High-Res Photo Files'],
                            ['label' => 'Dedicated Tech Manager'],
                        ]" 
                    />
                </div>
            </div>
        </section>

        {{-- Testimonials Section --}}
        <section class="py-20 bg-surface-container-lowest">
            <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span class="font-label-md text-label-md uppercase tracking-widest text-primary font-bold">Client Reviews</span>
                    <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl font-bold text-on-surface mt-2">
                        Loved by Guests & Host Alike
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <x-testimonial-card 
                        name="Sophia & Marcus" 
                        event="Wedding Reception" 
                        quote="The print quality blew everyone away! Having custom templates that matched our invitation suite made the whole booth feel so premium."
                    />
                    <x-testimonial-card 
                        name="Elena Rostova" 
                        event="Annual Tech Gala" 
                        quote="The instant QR digital downloads were a hit with our corporate attendees. Setup was effortless and staff were super polite."
                    />
                    <x-testimonial-card 
                        name="David Chen" 
                        event="30th Birthday Party" 
                        quote="Hands down the favorite activity of the night. The props were top-notch and didn't look like cheap plastic stuff."
                    />
                </div>
            </div>
        </section>

        {{-- Call To Action Banner --}}
        <x-cta-banner />
    </main>

    <x-slot:footer>
        <x-footer />
    </x-slot:footer>
</x-layout>