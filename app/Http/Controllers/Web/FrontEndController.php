<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Http\Request;
use Vanguard\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}
