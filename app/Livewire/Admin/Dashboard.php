<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
