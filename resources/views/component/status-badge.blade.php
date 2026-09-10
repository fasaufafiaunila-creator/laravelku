@props(['status' => 'pending'])

@php
    $classes = match(strtolower($status)) {
        'success', 'completed', 'siap' => 'bg-emerald-100 text-emerald-800 border-emerald-300',
        'warning', 'pending', 'memasak' => 'bg-amber-100 text-amber-800 border-amber-300',
        'danger', 'cancelled', 'batal' => 'bg-red-100 text-red-800 border-red-300',
        default => 'bg-gray-100 text-gray-800 border-gray-300',
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold border {$classes}"]) }}>
    {{ ucfirst($status) }}
</span>