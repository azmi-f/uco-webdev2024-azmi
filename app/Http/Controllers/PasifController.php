<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasifController extends Controller
{
    function about ()
    {
        return view('pasif.about');
    }

    function term ()
    {
        return view('pasif.term');
    }

    function privacy ()
    {
        return view('pasif.privacy');
    }
}
