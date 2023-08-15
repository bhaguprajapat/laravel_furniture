<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function dashboard(Request $reequst)
    {
        if(Auth::guard('admin')->check())
        {
            return view("admin.dashboard");
        }
        else
        {
            return redirect("admin/login");
        }
    }
}
