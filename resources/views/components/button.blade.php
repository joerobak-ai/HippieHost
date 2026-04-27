@props([
    'href' => '#',
    'variant' => 'primary',
    'type' => 'link',
    'buttonType' => 'button',
])

@php
$styles = [
    'primary' => 'bg-forest text-cream hover:bg-[#1a3224] border border-forest',
    'secondary' => 'bg-white text-forest hover:bg-cream border border-forest/40',
    'light' => 'bg-cream text-forest hover:bg-sand/50 border border-forest/20',
];
$classString = 'inline-flex items-center justify-center rounded-xl px-5 py-3 text-sm font-semibold transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-forest';
@endphp

@if ($type === 'button')
    <button type="{{ $buttonType }}" {{ $attributes->merge(['class' => $classString.' '.($styles[$variant] ?? $styles['primary'])]) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classString.' '.($styles[$variant] ?? $styles['primary'])]) }}>
        {{ $slot }}
    </a>
@endif