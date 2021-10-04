<div>
    <div class="prose mx-auto container">
        <x-display title="Range Sliders">
            <p class="text-gray-600"> Livewire values: @json($rangeOptions['sample_1']['values']) </p>
            <x-livewire-range-slider::range-slider  
                :options="$rangeOptions['sample_1']['options']" 
                wire:model="rangeOptions.sample_1.values"
                handling="immediate"
            />
            <p class="text-gray-600"> Livewire values: @json($rangeOptions['sample_2']['values']) </p>
            <x-livewire-range-slider::range-slider  
                :options="$rangeOptions['sample_2']['options']" 
                wire:model="rangeOptions.sample_2.values"
                handling="immediate"
            />
        </x-display>
    </div>
</div>
