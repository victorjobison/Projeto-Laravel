@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-md shadow-sm']) !!}>
