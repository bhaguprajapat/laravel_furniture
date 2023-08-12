<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Auth;

class AdminAuthController extends Controller
{
    public function create_registrion(Request $request)
    {
        return view("admin.Auth.registrion");
    }
    public function registrion(Request $request)
    {
       
    }
    public function create_login(Request $request)
    {
        return view("admin.Auth.login");
    }
    public function login(Request $request)
    {
        
    }
}
