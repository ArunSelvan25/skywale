<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    private $user;
    public function __construct(User $user){
        $this->user = $user;
    }
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()->intended('dashboard')->with('success','Login successful');
        }
  
        return redirect("login")->with('error','Login details are not valid');
    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $request){
        $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("dashboard")->with('Login with your credenttials');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('welcome')->with('success','Login successful');
        }
  
        return redirect("login")->with('error','Login to access dashboard');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login')->with('success','Logout successful');
    }
}
