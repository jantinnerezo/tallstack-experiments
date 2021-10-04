<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UiComponents extends Component
{
    public $rangeOptions = [
        'sample_1' => [
            'options' => [
                'start' => [40, 80, 90, 95],
                'range' => [
                    'min' =>  [1],
                    'max' => [100]
                ],
            ],
            'values' => []
        ],
        'sample_2' => [
            'options' => [
                'start' => [20, 60],
                'range' => [
                    'min' =>  [1],
                    'max' => [100]
                ],
            ],
            'values' => []
        ],
        // With pips
        'sample_3' => [
            'options' => [
                'start' => [10, 40],
                'range' => [
                    'min' =>  [1],
                    'max' => [100]
                ],
            ],
            'values' => []
        ],
    ];

    public function render()
    {
        return view('livewire.ui-components');
    }
}
