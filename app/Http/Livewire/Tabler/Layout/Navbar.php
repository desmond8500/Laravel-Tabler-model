<?php

namespace App\Http\Livewire\Tabler\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.tabler.layout.navbar', [
            'user' => Auth::user()
        ]);
    }
}
