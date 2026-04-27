<x-layout title="Hippie Host | Managed Website & Email Hosting" description="Friendly managed website and email hosting for small businesses. Reliable hosting, real support, SSL, WordPress help, and simple plans.">
    <x-nav />

    <main>
        <section class="section-shell py-14 lg:py-20">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div>
                    <p class="mb-4 inline-flex rounded-full bg-sage/20 px-3 py-1 text-xs font-semibold uppercase tracking-widest text-forest">Good Vibes. Great Uptime.</p>
                    <h1 class="font-display text-4xl font-extrabold tracking-tight text-forest sm:text-5xl">Web Hosting With Good Vibes</h1>
                    <p class="mt-5 max-w-xl text-lg leading-relaxed text-charcoal/85">Fast, secure, human-supported hosting for websites, email, and small businesses that want peace of mind.</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <x-button href="#hosting">View Hosting Plans</x-button>
                        <x-button href="#domains" variant="secondary">Request Service</x-button>
                    </div>
                    <ul class="mt-8 flex flex-wrap gap-4 text-sm text-charcoal/80">
                        <li class="rounded-full bg-white px-4 py-2 shadow-sm">99.9% Uptime Guarantee</li>
                        <li class="rounded-full bg-white px-4 py-2 shadow-sm">Free SSL Included</li>
                        <li class="rounded-full bg-white px-4 py-2 shadow-sm">30-Day Money Back Guarantee</li>
                    </ul>
                    <div class="mt-5 rounded-2xl border border-forest/15 bg-white/90 p-4 text-sm text-charcoal/80 shadow-sm">
                        <p class="font-semibold text-forest">Reliable managed platform with branded DNS infrastructure</p>
                        <p class="mt-1">
                            Nameservers:
                            <span class="font-semibold text-forest">ns1.hippiehost.com</span>
                            and
                            <span class="font-semibold text-forest">ns2.hippiehost.com</span>
                        </p>
                    </div>
                </div>

                <div class="grain-overlay relative overflow-hidden rounded-3xl border border-forest/15 bg-gradient-to-br from-[#eaf2e8] via-[#f5f1e8] to-[#edd9bc] p-6 shadow-xl">
                    <div class="absolute -top-20 right-8 h-44 w-44 rounded-full bg-mustard/25 blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 h-48 w-48 rounded-full bg-sage/30 blur-3xl"></div>

                    <div class="relative space-y-4">
                        <div class="rounded-2xl border border-forest/15 bg-white/90 p-4">
                            <p class="text-xs font-semibold uppercase tracking-wide text-charcoal/60">Website Overview</p>
                            <div class="mt-3 flex items-center justify-between">
                                <div>
                                    <p class="text-3xl font-extrabold text-forest">99.9%</p>
                                    <p class="text-xs text-charcoal/70">Uptime</p>
                                </div>
                                <span class="rounded-full bg-sage/20 px-3 py-1 text-xs font-semibold text-forest">All Systems Operational</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-3 text-sm">
                            <div class="rounded-xl border border-forest/10 bg-white/90 p-3"><p class="font-semibold text-forest">Security</p><p class="text-charcoal/70">SSL Active</p></div>
                            <div class="rounded-xl border border-forest/10 bg-white/90 p-3"><p class="font-semibold text-forest">Email</p><p class="text-charcoal/70">12 Active</p></div>
                            <div class="rounded-xl border border-forest/10 bg-white/90 p-3"><p class="font-semibold text-forest">Backups</p><p class="text-charcoal/70">Daily</p></div>
                        </div>

                        <div class="rounded-2xl border border-forest/10 bg-gradient-to-r from-forest to-[#355f45] p-4 text-cream">
                            <p class="text-xs uppercase tracking-wide text-cream/70">WordPress</p>
                            <p class="mt-1 text-lg font-semibold">Up to date and running smoothly</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-shell pb-14">
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                <x-feature-card title="Managed Hosting" body="We handle the technical setup so you can focus on your business." />
                <x-feature-card title="Business Email" body="Professional email that fits your domain and builds trust fast." />
                <x-feature-card title="Secure & Reliable" body="Enterprise-grade security, daily backups, and stable uptime." />
                <x-feature-card title="Real Human Support" body="Talk to a real person who knows your account and your goals." />
            </div>
        </section>

        <section id="website-care" class="section-shell pb-16">
            <div class="grid gap-8 rounded-3xl border border-forest/10 bg-white p-8 lg:grid-cols-[1.25fr_1fr]">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wide text-sunset">Why Choose Hippie Host</p>
                    <h2 class="mt-3 font-display text-3xl font-extrabold text-forest">Hosting You Can Feel Good About</h2>
                    <p class="mt-4 max-w-2xl text-charcoal/80">Hippie Host keeps website and email hosting simple, stable, and supported. No confusing dashboards, no mystery fees, and no bot-run support maze.</p>
                </div>
                <ul class="space-y-3 text-sm">
                    <li class="rounded-xl bg-cream px-4 py-3">Easy WordPress hosting</li>
                    <li class="rounded-xl bg-cream px-4 py-3">Email hosting support</li>
                    <li class="rounded-xl bg-cream px-4 py-3">SSL included</li>
                    <li class="rounded-xl bg-cream px-4 py-3">Real help from a real person</li>
                    <li class="rounded-xl bg-cream px-4 py-3">Built for small businesses</li>
                </ul>
            </div>
        </section>

        <section id="hosting" class="section-shell pb-16">
            <div class="mb-8 text-center">
                <p class="text-sm font-semibold uppercase tracking-wide text-sunset">Simple, Transparent Plans</p>
                <h2 class="mt-2 font-display text-3xl font-extrabold text-forest">Pick the setup that fits your vibe</h2>
            </div>
            <div class="grid gap-6 lg:grid-cols-3">
                <x-plan-card name="Peaceful Start" price="$14.99" subtitle="For simple websites" :features="['1 website','SSL included','basic email support','WordPress-ready','managed setup']" />
                <x-plan-card name="Groovy Business" price="$29.99" subtitle="Best for small businesses" :features="['website hosting','business email support','SSL included','backups','priority help','WordPress support']" :popular="true" class="ring-2 ring-sunset/35" />
                <x-plan-card name="Cosmic Care" price="$59.99" subtitle="Hosting plus maintenance" :features="['hosting + email','WordPress updates','security checks','uptime monitoring','priority support']" />
            </div>
        </section>

        <section class="section-shell pb-16">
            <div class="rounded-3xl bg-gradient-to-r from-forest to-[#2f5a41] p-8 text-cream">
                <h2 class="font-display text-3xl font-extrabold">Smart Support, Human Backup</h2>
                <p class="mt-4 max-w-3xl text-cream/85">Our future client portal will include Sage, an AI-assisted support guide for common website, email, WordPress, and hosting questions - with real human help when it matters.</p>
                <x-button href="#" variant="light" class="mt-6">Learn About Sage</x-button>
            </div>
        </section>

        <section id="domains" class="section-shell pb-20">
            <div class="rounded-3xl border border-forest/15 bg-white p-8 lg:flex lg:items-center lg:justify-between lg:gap-10">
                <div class="max-w-2xl">
                    <h2 class="font-display text-3xl font-extrabold text-forest">Need a Domain or Hosting Setup?</h2>
                    <p class="mt-3 text-charcoal/80">Tell us what you need and we'll help you get the right setup without the upsell circus.</p>
                </div>
                <form class="mt-6 flex w-full max-w-xl flex-col gap-3 sm:flex-row lg:mt-0" action="#" method="post" onsubmit="event.preventDefault();">
                    <label for="domainRequest" class="sr-only">Domain or business name</label>
                    <input id="domainRequest" name="domainRequest" type="text" placeholder="Enter your domain or business name" class="w-full rounded-xl border border-forest/25 px-4 py-3 text-sm focus:border-forest focus:outline-none focus:ring-2 focus:ring-sage/40" />
                    <x-button type="button">Request Help</x-button>
                </form>
            </div>
        </section>
    </main>

    <x-footer />
</x-layout>