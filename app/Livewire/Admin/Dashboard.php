<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $title = "Dashboard";
    
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
