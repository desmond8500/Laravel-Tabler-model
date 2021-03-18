<?php

namespace App\Http\Livewire\Tabler\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.tabler.layout.sidebar', [
            'user' => Auth::user(),
            'menus' => $this->menus(),
        ]);
    }
    public function menus()
    {
        return json_decode('[
            {
                "name": "menu",
                "icon": "",
                "submenus": [
                    {
                        "name": "menu1",
                        "route": null
                    },
                    {
                        "name": "menu2",
                        "route": null
                    },
                    {
                        "name": "menu3",
                        "route": null
                    }
                ]
            }
        ]
        ');
    }
}
