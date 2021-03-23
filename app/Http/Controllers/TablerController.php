<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablerController extends Controller
{
    public function pdf()
    {
        $data = [ 'test'=> 'test'];
        $pdf = \PDF::loadView('pdf', $data);

        return $pdf->stream();
    }
}
