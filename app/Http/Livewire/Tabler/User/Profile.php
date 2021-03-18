<?php

namespace App\Http\Livewire\Tabler\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.tabler.user.profile',[
            'user' => Auth::user(),
        ])->extends('0 tabler.layout.layout')->section('content');
    }
}
