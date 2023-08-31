<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    protected $listeners = [
        'show' => 'show'
    ];

    public function show()
    {
        $this->show = true;
    }

    public function unShow()
    {
        $this->show = false;
    }
}
