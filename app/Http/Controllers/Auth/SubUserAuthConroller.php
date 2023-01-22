<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\SubUser;
class SubUserAuthConroller extends Controller
{
    private $admin;
    public function __construct(SubUser $subUser){
        $this->subUser = $subUser;
    }
    public function getLogin(){
        return view('sub-user.auth.login');
    }

    public function postLogin(Request $request)
    {
        $subUser = $request->only('email', 'password');
        if (Auth::guard('sub-user')->attempt($subUser)) {
            return redirect()->intended('/sub-user/dashboard')->with('success','Login successful');
        }

        return redirect("/sub-user/login")->with('error','Login details are not valid');
    }

    public function getRegister(){
        return view('sub-user.auth.register');
    }

    public function postRegister(Request $request){
        $this->subUser->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("/sub-user/dashboard")->with('Login with your credenttials');
    }

    public function dashboard()
    {
        if(Auth::guard('sub-user')->check()){
            return view('sub-user.welcome')->with('success','Login successful');
        }

        return redirect("/sub-user/login")->with('error','Login to access dashboard');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/sub-user/login')->with('success','Logout successful');
    }
}
