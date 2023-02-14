<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubAdmin;
use App\Models\User;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_admin_id','name','description','address','size','facilities','rent'
    ];

    public function subAdmin(){
        return $this->belongsTo(SubAdmin::class,'sub_admin_id',id);
    }

    public function user() {
        return $this->hasOne(User::class,'property_id',id);
    }
}
