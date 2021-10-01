@props(['options' => []])

<div 
    x-data='rangeSlider({
        options: {!! json_encode($options) !!},
        model: "{{ $attributes->get('wire:model') }}"
    })'
    x-init="init()"
    wire:ignore
>
    <div x-ref="range"></div>
    <div class="mt-4">
        <button type="button" class="inline-flex justify-center w-36 rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" @click="getValues">
            Apply
        </button>
    </div>
</div>