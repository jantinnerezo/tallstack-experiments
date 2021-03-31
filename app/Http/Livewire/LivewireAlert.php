<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LivewireAlert extends Component
{
    public $text;

    protected $listeners = [
        'confirmed',
        'cancelled'
    ];

    public function doConfirm()
    {
        $this->confirm('Do you love Livewire Alert?', [
            'input' => 'textarea',
            'inputAttributes' => [
                "wire:model" => 'text'
            ],
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function confirmed($attributes)
    {
        dd($attributes);
        return;
    }

    public function cancelled()
    {
        return;
    }

    public function render()
    {
        return view('livewire.livewire-alert');
    }
}
