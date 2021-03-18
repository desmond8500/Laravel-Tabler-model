<?php

namespace App\Http\Livewire\Tabler\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.tabler.layout.header',[
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
                        "route": ""
                    },
                    {
                        "name": "menu2",
                        "route": ""
                    },
                    {
                        "name": "menu3",
                        "route": ""
                    }
                ]
            }
        ]
        ');
    }
}
