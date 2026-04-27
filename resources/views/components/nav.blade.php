<header class="sticky top-0 z-30 border-b border-forest/10 bg-cream/95 backdrop-blur">
    <div class="section-shell py-4">
        <div class="flex items-center justify-between gap-4">
            <a href="/" class="inline-flex items-center gap-3" aria-label="Hippie Host home">
                <span class="flex h-10 w-10 items-center justify-center rounded-full border border-forest/30 bg-gradient-to-br from-sage to-forest text-cream">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <circle cx="12" cy="12" r="8"></circle>
                        <path d="M8.5 12h7M12 8.5v7"></path>
                        <path d="M7 15c1.4 1.2 2.9 1.8 5 1.8s3.6-.6 5-1.8"></path>
                    </svg>
                </span>
                <span class="font-display text-lg font-extrabold tracking-tight text-forest">HIPPIE HOST</span>
            </a>

            <button type="button" data-mobile-menu-toggle aria-expanded="false" aria-controls="mobile-menu" class="inline-flex items-center rounded-lg border border-forest/25 p-2 text-forest md:hidden">
                <span class="sr-only">Toggle navigation</span>
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>

            <nav class="hidden items-center gap-6 text-sm font-medium text-charcoal md:flex" aria-label="Primary">
                <a href="#" class="hover:text-forest">Home</a>
                <a href="#hosting" class="hover:text-forest">Hosting</a>
                <a href="#domains" class="hover:text-forest">Domains</a>
                <a href="#website-care" class="hover:text-forest">Website Care</a>
                <a href="#support" class="hover:text-forest">Support</a>
            </nav>

            <div class="hidden items-center gap-3 md:flex">
                <x-button variant="secondary" href="#">Client Login</x-button>
                <x-button href="#hosting">Get Started</x-button>
            </div>
        </div>

        <div id="mobile-menu" data-mobile-menu class="mt-4 hidden rounded-2xl border border-forest/15 bg-white p-4 md:hidden">
            <nav class="grid gap-3 text-sm font-medium text-charcoal" aria-label="Mobile Primary">
                <a href="#" class="rounded-lg px-3 py-2 hover:bg-cream">Home</a>
                <a href="#hosting" class="rounded-lg px-3 py-2 hover:bg-cream">Hosting</a>
                <a href="#domains" class="rounded-lg px-3 py-2 hover:bg-cream">Domains</a>
                <a href="#website-care" class="rounded-lg px-3 py-2 hover:bg-cream">Website Care</a>
                <a href="#support" class="rounded-lg px-3 py-2 hover:bg-cream">Support</a>
                <div class="mt-2 grid gap-2">
                    <x-button variant="secondary" href="#">Client Login</x-button>
                    <x-button href="#hosting">Get Started</x-button>
                </div>
            </nav>
        </div>
    </div>
</header>