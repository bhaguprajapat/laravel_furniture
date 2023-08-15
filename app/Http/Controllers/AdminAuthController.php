<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function create_registrion(Request $request)
    {
        return view("admin.Auth.registrion");
    }
    public function registrion(Request $request)
    {
       $admin=new Admin();
       $admin->username=$request->username;
       $admin->email=$request->email;
       $admin->password=md5($request->password);
    //    dd($login);
       $admin->save();
       if($admin==true)
       {
            $adminL = new admin();
            $adminL->id = $request->id;
            $adminL->email = $request->email;
            $adminL->password = $request->password;
            $login=Auth::guard('admin')->login($adminL);
            // $adminL=new Admin();
            // $adminL->username=$request->username;
            // $adminL->email=$request->email;
            // $adminL->password=$request->password;
            // $login=Auth::guard('admin')->login($adminL);
            return redirect("admin")->withSuccess("you have registred successfully !");
       }
       else
       {
        return back()->withError("Something went wrong !");
       }
    }
    public function create_login(Request $request)
    {
        return view("admin.Auth.login");
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->Password;
        $user = Admin::where('email',$email)->where('password',md5($password))->first();
        if($user !=null)
        {
            if ($user) 
            {
                $adminL = new admin();
                $adminL->id = $user->id;
                $adminL->email = $user->email;
                $adminL->password = $user->password;
                $login=Auth::guard('admin')->login($adminL);
                return redirect("admin")->withSuccess("you have Logged in successfully !");
            }
            else
            {
                return back()->withError("Something went wrong !");
            }
        }
        else
        {
            return back()->withError("Something went wrong !");
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect("admin/login")->withSuccess("Session destroyed");
    }
}
