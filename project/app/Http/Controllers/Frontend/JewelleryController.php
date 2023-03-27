<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JewelleryController extends Controller
{
    public function index()
    {
        return view('Frontend.latest');
    }
}
