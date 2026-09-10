@props(['variant' => 'primary', 'type' => 'button'])

@php
    $classes = match($variant) {
        'primary' => 'bg-emerald-600 hover:bg-emerald-700 text-white focus:ring-emerald-500',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white focus:ring-gray-500',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white focus:ring-red-500',
        default => 'bg-emerald-600 hover:bg-emerald-700 text-white focus:ring-emerald-500',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "min-h-[44px] min-w-[44px] inline-flex items-center justify-center px-4 py-2 rounded-lg font-medium text-sm transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 active:scale-95 {$classes}"]) }}>
    {{ $slot }}
</button>