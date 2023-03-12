<?php

namespace Modules\Home\Http\Livewire\Layouts;

use Livewire\Component;
use Modules\School\Entities\SchoolSession;

class Header extends Component
{
    public $latest_school_session;
    public $current_school_session_name;

    public function render() {
        $this->latest_school_session = SchoolSession::query()->latest()->first();
        if ($this->latest_school_session) {
            $this->current_school_session_name = $this->latest_school_session->session_name;
        }
        return view('home::livewire.layouts.header', ['current_school_session_name' => $this->current_school_session_name]);
    }
}
