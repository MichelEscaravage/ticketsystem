<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function events()
    {
        return view('pages/events');
    }

    public function testroute()
    {
        return view('pages/testroute');
    }
}
