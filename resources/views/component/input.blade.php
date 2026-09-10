@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'min-h-[44px] px-3 py-2 border-gray-300 focus:border-red-600 focus:ring-red-600 rounded-md shadow-sm w-full text-sm']) }}>