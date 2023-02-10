<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminHouseOwnerController extends Controller
{
    public function houseOwnerRegister() {
        return view('admin.house_owner.house_owner_register');
    }
}
