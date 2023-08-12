<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $reequst)
    {
        return view("admin.dashboard");
    }
}
