<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public $menu;

    public function mount()
    {
        $this->getMenu();
    }

    public function getMenu()
    {
        $this->menu = [
            ['text' => 'Home', 'icon' => 'home', 'route' => route('dashboard')],
            ['text' => 'User', 'icon' => 'user', 'route' => '#'],
            ['text' => 'Settings', 'icon' => 'cog', 'route' => '#'],
        ];
    }

    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
