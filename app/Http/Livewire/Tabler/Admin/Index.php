<?php

namespace App\Http\Livewire\Tabler\Admin;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tabler.admin.index')->extends('0 tabler.layout.layout-admin')->section('content');
    }
}
