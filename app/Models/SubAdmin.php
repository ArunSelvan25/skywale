<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class SubAdmin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'sub-admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
    ];
}