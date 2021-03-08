<?php

namespace App\Http\Livewire\Tabler\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tabler.pages.index')->extends('0 tabler.layout.layout')->section('content');
    }
}
