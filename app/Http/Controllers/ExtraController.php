<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function coming_soon()
    {
        return view('extra.coming_soon');
    }
}
