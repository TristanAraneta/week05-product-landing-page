<!-- CALL TO ACTION BANNER [components/cta-banner.blade.php] -->
<section class="w-full py-20 bg-gradient-to-r from-primary-container via-primary to-primary-container relative overflow-hidden text-on-primary">
    <!-- Ambient Overlay Accents -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-secondary/20 via-transparent to-transparent pointer-events-none"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10 bg-surface-container-lowest/5 backdrop-blur-md p-8 md:p-12 rounded-3xl border border-on-primary/10 shadow-2xl">
            
            <!-- Content & Headline -->
            <div class="flex flex-col items-start gap-4 max-w-2xl text-left">
                <!-- Annotation & Status Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-on-primary/10 text-on-primary font-label-sm text-label-sm border border-on-primary/15">
                    <span class="material-symbols-outlined text-[16px] text-secondary-fixed">event_available</span>
                    <span>2025–2026 Event Calendar Open</span>
                </div>

                <h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl tracking-tight text-on-primary font-bold">
                    Ready to bring studio-quality memories to your next event?
                </h2>

                <p class="font-body-lg text-body-lg text-on-primary/80">
                    Lock in your date with a flexible deposit. Instant online booking confirmation and customized strip designs tailored for your guests.
                </p>

                <!-- Feature Micro Highlights -->
                <div class="flex flex-wrap items-center gap-6 pt-2 font-label-md text-label-md text-on-primary/90">
                    <span class="inline-flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-emerald-400">check_circle</span>
                        Free Custom Design Template
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-emerald-400">check_circle</span>
                        Instant QR Digital Album
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-emerald-400">check_circle</span>
                        On-Site Attendant Included
                    </span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row lg:flex-col gap-4 w-full lg:w-auto shrink-0">
                <a href="#pricing" class="inline-flex items-center justify-center gap-2 h-14 px-8 rounded-2xl font-label-md text-label-md font-bold text-primary-container bg-surface-container-lowest hover:bg-surface-container-low transition-all duration-200 shadow-xl hover:-translate-y-0.5">
                    <span>Reserve Your Date Now</span>
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
                <a href="#contact" class="inline-flex items-center justify-center gap-2 h-14 px-8 rounded-2xl font-label-md text-label-md font-medium text-on-primary bg-on-primary/10 hover:bg-on-primary/20 border border-on-primary/20 transition-all duration-200">
                    <span class="material-symbols-outlined text-[20px]">mail</span>
                    <span>Request Custom Quote</span>
                </a>
            </div>

        </div>
    </div>
</section>