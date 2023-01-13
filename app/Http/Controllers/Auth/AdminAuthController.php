<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    private $admin;
    public function __construct(Admin $admin){
        $this->admin = $admin;
    }
    public function getLogin(){
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $admin = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($admin)) {
            return redirect()->intended('/admin/dashboard')->with('success','Login successful');
        }
  
        return redirect("/admin/login")->with('error','Login details are not valid');
    }

    public function getRegister(){
        return view('admin.auth.register');
    }

    public function postRegister(Request $request){
        $this->admin->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("/admin/dashboard")->with('Login with your credenttials');
    }

    public function dashboard()
    {
        if(Auth::guard('admin')->check()){
            return view('admin.welcome')->with('success','Login successful');
        }
  
        return redirect("/admin/login")->with('error','Login to access dashboard');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/admin/login')->with('success','Logout successful');
    }
}
