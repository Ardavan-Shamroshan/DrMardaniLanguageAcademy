<?php

namespace Modules\School\Http\Livewire\Student;

use Livewire\Component;

class Students extends Component
{
    public function render()
    {
        return view('school::livewire.student.students')
            ->layout('home::layouts.master');
    }
}
