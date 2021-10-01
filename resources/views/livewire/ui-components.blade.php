<div>
    <div class="prose mx-auto container">
        <x-display title="Range Sliders">
            <p class="text-gray-600"> Livewire values: @json($rangeOptions['sample_1']['values']) </p>
            <x-range-slider 
                :options="$rangeOptions['sample_1']['options']" 
                wire:model="rangeOptions.sample_1.values"
            />
            <div class="my-6 border-b border-gray-200"></div>
            <p class="text-gray-600"> Livewire values: @json($rangeOptions['sample_2']['values']) </p>
            <x-range-slider 
                :options="$rangeOptions['sample_2']['options']" 
                wire:model="rangeOptions.sample_2.values"
            />
            <div class="my-6 border-b border-gray-200"></div>
            <p class="text-gray-600"> Livewire values: @json($rangeOptions['sample_3']['values']) </p>
            <x-range-slider 
                :options="$rangeOptions['sample_3']['options']" 
                wire:model="rangeOptions.sample_3.values"
            />
        </x-display>
    </div>
</div>
