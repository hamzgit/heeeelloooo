<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function dashboard()
    {
        return view('Backend.dashboard');
    }

    public function profile() {
        return view ('Backend.profile');
    }
}
