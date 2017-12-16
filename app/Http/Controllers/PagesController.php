<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function good()
    {
        return view('good');
    }

    public function bad()
    {
        return view('bad');
    }
}
