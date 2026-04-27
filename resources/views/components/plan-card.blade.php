@props([
    'name',
    'price',
    'subtitle',
    'features' => [],
    'popular' => false,
])

<article {{ $attributes->merge(['class' => 'relative rounded-3xl border border-forest/15 bg-white p-6 shadow-sm']) }}>
    @if ($popular)
        <p class="absolute -top-3 left-6 rounded-full bg-sunset px-3 py-1 text-xs font-bold uppercase tracking-wide text-cream">Most Popular</p>
    @endif

    <h3 class="font-display text-2xl font-extrabold text-forest">{{ $name }}</h3>
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

    <x-button href="#domains" variant="primary" class="mt-6 w-full">Request This Plan</x-button>
</article>