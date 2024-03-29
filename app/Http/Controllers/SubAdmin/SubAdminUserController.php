<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;

class SubAdminUserController extends Controller
{
    public function __construct(User $user, Property $property) {
        $this->user = $user;
        $this->property = $property;
    }
    public function index() {
        $properties = $this->property->where('sub_admin_id',Auth::guard('sub-admin')->user()->id)->orderBy('created_at','desc')->get();
          $users = $this->user->with('property')->whereHas('property', function($query) {
             $query->where('sub_admin_id',Auth::guard('sub-admin')->user()->id);
          })->get();
        return view('auth.register',compact('users','properties'));
    }
}
