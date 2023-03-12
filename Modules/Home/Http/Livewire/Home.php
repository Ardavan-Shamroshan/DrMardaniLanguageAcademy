<?php

namespace Modules\Home\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('home::livewire.home')
            ->layout('home::layouts.master');
    }
}
