@props([
    'name',
    'price',
    'subtitle',
    'features' => [],
    'popular' => false,
    'audience' => null,
    'ctaLabel' => 'Choose This Plan',
])

<article {{ $attributes->merge(['class' => 'relative flex h-full flex-col rounded-3xl border bg-white p-7 shadow-[0_14px_38px_rgba(35,65,47,0.08)] transition hover:-translate-y-0.5 hover:shadow-[0_18px_42px_rgba(35,65,47,0.14)] '.($popular ? 'border-sunset/60 ring-2 ring-sunset/25' : 'border-forest/15')]) }}>
    @if ($popular)
        <p class="absolute -top-3 left-6 rounded-full bg-sunset px-3 py-1 text-xs font-bold uppercase tracking-wide text-cream">Most Popular</p>
    @endif

    @if ($audience)
        <p class="text-xs font-semibold uppercase tracking-wider text-sunset">{{ $audience }}</p>
    @endif

    <h3 class="mt-2 font-display text-2xl font-extrabold text-forest">{{ $name }}</h3>
    <p class="mt-3 text-3xl font-extrabold text-charcoal">{{ $price }}<span class="text-base font-semibold text-charcoal/70">/mo</span></p>
    <p class="mt-2 text-sm text-charcoal/80">{{ $subtitle }}</p>

    <ul class="mt-5 space-y-2 text-sm text-charcoal/90">
        @foreach ($features as $feature)
            <li class="flex items-start gap-2">
                <span class="mt-1 inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-sage/30 text-forest">&#10003;</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button href="#consultation" variant="primary" class="mt-6 w-full rounded-full">{{ $ctaLabel }}</x-button>
</article>