@props(['title', 'body'])

<div {{ $attributes->merge(['class' => 'rounded-2xl border border-forest/10 bg-white/80 p-5 shadow-sm']) }}>
    <h3 class="font-display text-lg font-bold text-forest">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-relaxed text-charcoal/80">{{ $body }}</p>
</div>