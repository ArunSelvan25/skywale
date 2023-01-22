<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\SubAdmin;
class SubAdminAuthConroller extends Controller
{
    private $subAdmin;
    public function __construct(SubAdmin $subAdmin){
        $this->subAdmin = $subAdmin;
    }
    public function getLogin(){
        return view('sub-admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $subAdmin = $request->only('email', 'password');
        if (Auth::guard('sub-admin')->attempt($subAdmin)) {
            return redirect()->intended('/sub-admin/dashboard')->with('success','Login successful');
        }

        return redirect("/sub-admin/login")->with('error','Login details are not valid');
    }

    public function getRegister(){
        return view('sub-admin.auth.register');
    }

    public function postRegister(Request $request){
        $this->subAdmin->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("/sub-admin/dashboard")->with('Login with your credenttials');
    }

    public function dashboard()
    {
        if(Auth::guard('sub-admin')->check()){
            return view('sub-admin.welcome')->with('success','Login successful');
        }

        return redirect("/sub-admin/login")->with('error','Login to access dashboard');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/sub-admin/login')->with('success','Logout successful');
    }
}
