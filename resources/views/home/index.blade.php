<x-layout title="Hippie Host | Premium Managed Hosting for Businesses" description="Premium managed hosting with real human support, daily backups, and peace of mind for businesses tired of bad support.">
    <x-nav />

    <main>
        <section class="section-shell pb-8 pt-12 lg:pt-18">
            <div data-reveal class="reveal relative overflow-hidden rounded-3xl border border-forest/15 shadow-[0_18px_42px_rgba(35,65,47,0.17)]">
                <div class="absolute inset-0 bg-gradient-to-r from-[#1f2d23]/86 via-[#2b3d2f]/60 to-[#2b3d2f]/12"></div>
                <img src="{{ asset('images/hero-coastal-cabin.png') }}" alt="Warm coastal workspace with laptop dashboard and vintage van" class="h-[680px] w-full object-cover object-[68%_center] sm:h-[620px] lg:h-[560px] lg:object-center" />

                <div class="absolute inset-0 flex items-center">
                    <div class="w-full px-6 py-10 sm:px-10 lg:w-3/5 lg:px-12">
                        <p class="mb-4 inline-flex rounded-full border border-cream/30 bg-cream/10 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-cream">Good Vibes. Great Uptime.</p>
                        <h1 class="font-display text-4xl font-extrabold tracking-tight text-cream sm:text-5xl lg:text-6xl">Premium Hosting for Free Spirits & Smart Businesses</h1>
                        <p class="mt-5 max-w-2xl text-lg leading-relaxed text-cream/90">Fast, secure, human-powered hosting for people who want more than another faceless hosting company.</p>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <x-button href="#hosting" class="rounded-full px-6 shadow-lg shadow-black/20 transition hover:-translate-y-0.5 hover:shadow-xl">View Hosting Plans</x-button>
                            <x-button href="#consultation" variant="secondary" class="rounded-full border-cream/60 bg-cream/95 px-6 text-forest transition hover:bg-cream">Talk to a Human</x-button>
                        </div>
                        <ul class="mt-8 flex flex-wrap gap-3 text-sm text-cream/95">
                            <li class="rounded-full border border-cream/30 bg-black/15 px-4 py-2">99.9% Uptime</li>
                            <li class="rounded-full border border-cream/30 bg-black/15 px-4 py-2">Free SSL</li>
                            <li class="rounded-full border border-cream/30 bg-black/15 px-4 py-2">Daily Backups</li>
                            <li class="rounded-full border border-cream/30 bg-black/15 px-4 py-2">Real Human Support</li>
                            <li class="rounded-full border border-cream/30 bg-black/15 px-4 py-2">Free Migration Available</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-shell pb-12" aria-label="Trust indicators">
            <div data-reveal class="reveal grid gap-3 rounded-2xl border border-forest/10 bg-white p-4 shadow-sm sm:grid-cols-2 lg:grid-cols-6">
                <p class="rounded-xl bg-cream px-4 py-3 text-sm font-semibold text-charcoal">99.9% Uptime</p>
                <p class="rounded-xl bg-cream px-4 py-3 text-sm font-semibold text-charcoal">Free SSL</p>
                <p class="rounded-xl bg-cream px-4 py-3 text-sm font-semibold text-charcoal">Free Migration</p>
                <p class="rounded-xl bg-cream px-4 py-3 text-sm font-semibold text-charcoal">Real Human Support</p>
                <p class="rounded-xl bg-cream px-4 py-3 text-sm font-semibold text-charcoal">Daily Backups</p>
                <p class="rounded-xl bg-cream px-4 py-3 text-sm font-semibold text-charcoal">Fast Hosting</p>
            </div>
        </section>

        <section id="why-switch" class="section-shell pb-16">
            <div data-reveal class="reveal surface-card p-8 lg:p-10">
                <div class="grid gap-8 lg:grid-cols-2">
                    <div>
                        <p class="section-kicker">Why Switch to Hippie Host</p>
                        <h2 class="mt-3 section-title">From corporate ticket queues to boutique managed care</h2>
                        <p class="mt-4 text-charcoal/80">You should not have to chase support just to keep your business online. We combine reliability, transparent pricing, and real ownership when issues show up.</p>
                    </div>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <div class="rounded-2xl border border-red-200 bg-red-50 p-4">
                            <p class="text-xs font-semibold uppercase tracking-wide text-red-700">Corporate Hosting</p>
                            <ul class="mt-2 space-y-1 text-sm text-red-900/80"><li>Confusing dashboards</li><li>Hidden fees</li><li>Outsourced support</li><li>Downtime with no real help</li></ul>
                        </div>
                        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-4">
                            <p class="text-xs font-semibold uppercase tracking-wide text-emerald-700">The Hippie Host Way</p>
                            <ul class="mt-2 space-y-1 text-sm text-emerald-900/80"><li>Managed setup and migration</li><li>Transparent plans</li><li>Real human support team</li><li>Reliable uptime and backups</li></ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section-shell pb-16">
            <div class="mb-8 text-center" data-reveal>
                <p class="reveal text-sm font-semibold uppercase tracking-wide text-sunset">Managed Services</p>
                <h2 class="reveal mt-2 section-title">Everything your business needs to stay online</h2>
            </div>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                <x-feature-card class="reveal" data-reveal title="Managed Hosting" body="Performance-tuned hosting handled by people who actually monitor it." />
                <x-feature-card class="reveal" data-reveal title="Business Email" body="Reliable inboxes tied to your domain with setup help included." />
                <x-feature-card class="reveal" data-reveal title="WordPress Hosting" body="WordPress-ready environment with updates and stability support." />
                <x-feature-card class="reveal" data-reveal title="Website Care" body="Monthly website support options available to keep things healthy." />
                <x-feature-card class="reveal" data-reveal title="DNS & Domain Help" body="Branded DNS infrastructure and practical domain guidance." />
                <x-feature-card class="reveal" data-reveal title="Real Support" body="Talk to people who understand small business websites and urgency." />
            </div>
        </section>

        <section id="hosting" class="section-shell pb-16">
            <div class="mb-8 text-center" data-reveal>
                <p class="reveal section-kicker">Simple, Transparent Pricing</p>
                <h2 class="reveal mt-2 section-title">Support-focused plans built for peace of mind</h2>
            </div>
            <div class="grid gap-6 lg:grid-cols-3">
                <x-plan-card class="reveal" data-reveal audience="Starter / Solo Business" name="Peaceful Start" price="$14.99" subtitle="Ideal for solo operators and simple business sites that need reliable support." :features="['1 primary domain','3 subdomains','3 email accounts','SSL included','Daily backups','Basic support']" ctaLabel="Get Peaceful Start" />
                <x-plan-card class="reveal" data-reveal audience="Most Popular / Growth Business" name="Groovy Business" price="$29.99" subtitle="Best for established businesses that need stronger reliability and responsive support." :features="['1 primary domain','5 subdomains','5 email accounts','Priority support','WordPress-ready','Migration help','Daily backups']" :popular="true" ctaLabel="Choose Groovy Business" />
                <x-plan-card class="reveal" data-reveal audience="Full Service / White Glove" name="Cosmic Care" price="$59.99" subtitle="White-glove hosting care for teams who want proactive protection and peace of mind." :features="['1 primary domain','10 subdomains','10 email accounts','Priority support','Uptime monitoring','Daily backups','1 small monthly content update','Additional email accounts available as paid add-ons']" ctaLabel="Start Cosmic Care" />
            </div>
            <p class="mt-6 text-center text-sm text-charcoal/75">Need more? Add extra email accounts, DNS help, migrations, website edits, and care services as needed.</p>
        </section>

        <section class="section-shell pb-16">
            <div class="surface-card p-8" data-reveal>
                <p class="reveal section-kicker">Trusted by Service Businesses</p>
                <h2 class="reveal mt-2 section-title">Built for owners who cannot afford website downtime</h2>
                <div class="mt-6 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div class="reveal rounded-2xl bg-cream p-4" data-reveal><p class="font-semibold text-forest">Trusted by small businesses</p><p class="mt-2 text-sm text-charcoal/80">Local companies rely on Hippie Host for dependable uptime.</p></div>
                    <div class="reveal rounded-2xl bg-cream p-4" data-reveal><p class="font-semibold text-forest">Built by real operators</p><p class="mt-2 text-sm text-charcoal/80">We run businesses too, so support is practical and human.</p></div>
                    <div class="reveal rounded-2xl bg-cream p-4" data-reveal><p class="font-semibold text-forest">Managed by Mad Town team</p><p class="mt-2 text-sm text-charcoal/80">Hands-on management, not call-center roulette.</p></div>
                    <div class="reveal rounded-2xl bg-cream p-4" data-reveal><p class="font-semibold text-forest">Focused on staying online</p><p class="mt-2 text-sm text-charcoal/80">Monitoring, backups, and support workflows that reduce risk.</p></div>
                </div>
                <div class="mt-6 grid gap-4 md:grid-cols-2">
                    <blockquote class="reveal rounded-2xl border border-forest/10 bg-white p-5" data-reveal>
                        <p class="text-charcoal/85">"We switched after repeated outages. Hippie Host migrated us cleanly and support responds like a real partner."</p>
                        <cite class="mt-3 block text-sm font-semibold text-forest">Small Business Owner (placeholder)</cite>
                    </blockquote>
                    <blockquote class="reveal rounded-2xl border border-forest/10 bg-white p-5" data-reveal>
                        <p class="text-charcoal/85">"Our email and website stability improved immediately. It finally feels like managed hosting, not ticket roulette."</p>
                        <cite class="mt-3 block text-sm font-semibold text-forest">Local Professional Firm (placeholder)</cite>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="section-shell pb-16">
            <div class="reveal rounded-3xl bg-gradient-to-r from-forest to-[#2f5a41] p-8 text-cream" data-reveal>
                <h2 class="font-display text-3xl font-extrabold">Sage AI + Human Support, Together</h2>
                <p class="mt-4 max-w-3xl text-cream/85">Sage handles quick support questions instantly. Real Hippie Host humans step in whenever decisions, fixes, or escalation are needed. AI assists. Humans remain accountable.</p>
                <x-button href="#support" variant="light" class="mt-6">Learn About Sage</x-button>
            </div>
        </section>

        <section class="section-shell pb-16">
            <div class="surface-card p-8" data-reveal>
                <h2 class="reveal section-title" data-reveal>Quick answers before you switch</h2>
                <div class="mt-6 grid gap-4 md:grid-cols-2">
                    <div class="reveal rounded-2xl border border-forest/10 bg-cream/40 p-5" data-reveal><h3 class="font-semibold text-forest">Do you migrate existing websites?</h3><p class="mt-2 text-sm text-charcoal/80">Yes. Managed migration support is included so your move is planned, tested, and low-stress.</p></div>
                    <div class="reveal rounded-2xl border border-forest/10 bg-cream/40 p-5" data-reveal><h3 class="font-semibold text-forest">Can you help with business email too?</h3><p class="mt-2 text-sm text-charcoal/80">Yes. We support setup and troubleshooting for domain-based business email.</p></div>
                    <div class="reveal rounded-2xl border border-forest/10 bg-cream/40 p-5" data-reveal><h3 class="font-semibold text-forest">What if something breaks?</h3><p class="mt-2 text-sm text-charcoal/80">You get real support escalation, daily backup coverage, and clear ownership of the issue.</p></div>
                    <div class="reveal rounded-2xl border border-forest/10 bg-cream/40 p-5" data-reveal><h3 class="font-semibold text-forest">Is this built for small businesses?</h3><p class="mt-2 text-sm text-charcoal/80">Exactly. Plans and support are designed for owners who need reliability without enterprise complexity.</p></div>
                </div>
            </div>
        </section>

        <section id="consultation" class="section-shell pb-24">
            <div class="reveal rounded-3xl border border-forest/15 bg-white p-8 shadow-lg" data-reveal>
                <div class="grid gap-8 lg:grid-cols-[1.1fr_1fr]">
                    <div>
                        <p class="section-kicker">Final Step</p>
                        <h2 class="mt-3 section-title">Ready for Better Hosting?</h2>
                        <p class="mt-4 text-charcoal/80">Let us get your business set up the right way with dependable hosting, real support, and calmer operations.</p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <x-button href="#consultation" class="rounded-full px-6">Start My Free Setup</x-button>
                            <x-button href="#consultation" variant="secondary" class="rounded-full px-6">Talk to a Human</x-button>
                        </div>
                    </div>
                    <form class="grid gap-3" action="{{ route('consultation.store') }}" method="post">
                        @csrf
                        @if (session('consultation_success'))
                            <p class="rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">{{ session('consultation_success') }}</p>
                        @endif
                        <label for="name" class="text-sm font-semibold text-forest">Your name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Jane Owner" class="w-full rounded-xl border border-forest/25 px-4 py-3 text-sm focus:border-forest focus:outline-none focus:ring-2 focus:ring-sage/40" />
                        @error('name')<p class="text-xs font-medium text-red-700">{{ $message }}</p>@enderror

                        <label for="email" class="text-sm font-semibold text-forest">Best email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@business.com" class="w-full rounded-xl border border-forest/25 px-4 py-3 text-sm focus:border-forest focus:outline-none focus:ring-2 focus:ring-sage/40" />
                        @error('email')<p class="text-xs font-medium text-red-700">{{ $message }}</p>@enderror

                        <label for="business_name" class="text-sm font-semibold text-forest">Business or domain name</label>
                        <input id="business_name" name="business_name" type="text" value="{{ old('business_name') }}" placeholder="yourbusiness.com" class="w-full rounded-xl border border-forest/25 px-4 py-3 text-sm focus:border-forest focus:outline-none focus:ring-2 focus:ring-sage/40" />
                        @error('business_name')<p class="text-xs font-medium text-red-700">{{ $message }}</p>@enderror

                        <label for="service_interest" class="text-sm font-semibold text-forest">What do you need most?</label>
                        <select id="service_interest" name="service_interest" class="w-full rounded-xl border border-forest/25 px-4 py-3 text-sm focus:border-forest focus:outline-none focus:ring-2 focus:ring-sage/40">
                            <option value="">Select a service</option>
                            @foreach (['Managed Hosting', 'Business Email', 'WordPress Hosting', 'Website Care', 'Migration Help', 'General Consultation'] as $service)
                                <option value="{{ $service }}" @selected(old('service_interest') === $service)>{{ $service }}</option>
                            @endforeach
                        </select>
                        @error('service_interest')<p class="text-xs font-medium text-red-700">{{ $message }}</p>@enderror

                        <label for="details" class="text-sm font-semibold text-forest">Project details</label>
                        <textarea id="details" name="details" rows="3" placeholder="Hosting, migration timeline, current pain points..." class="w-full rounded-xl border border-forest/25 px-4 py-3 text-sm focus:border-forest focus:outline-none focus:ring-2 focus:ring-sage/40">{{ old('details') }}</textarea>
                        @error('details')<p class="text-xs font-medium text-red-700">{{ $message }}</p>@enderror
                        <x-button type="button" buttonType="submit" class="mt-2">Request Consultation</x-button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <div class="fixed inset-x-0 bottom-3 z-30 px-4 md:hidden">
        <a href="#consultation" class="mx-auto flex w-full max-w-md items-center justify-center rounded-xl bg-forest px-4 py-3 text-sm font-semibold text-cream shadow-xl">Start My Free Setup</a>
    </div>

    <x-footer />
</x-layout>