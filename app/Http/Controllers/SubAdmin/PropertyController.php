<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{

    public function __construct(Property $property) {
        $this->property = $property;
    }

    public function index() {
        $records = $this->property->where('sub_admin_id',Auth::guard('sub-admin')->user()->id)->orderBy('created_at','desc')->paginate(10);
        return view('property.property',compact('records'));
    }

    public function propertyStore(Request $request) {
        $this->property->firstOrCreate([
            'sub_admin_id' => Auth::guard('sub-admin')->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'size' => $request->size,
            'facilities' => $request->facilities,
            'rent' => $request->rent,
            'address' => $request->address,
        ]);
        return back()->with('success','Property created successfully');
    }

    public function propertyupdate(Request $request) {
        $this->property->updateOrCreate([
                'id' => $request->id
            ],
            [
                'sub_admin_id' => Auth::guard('sub-admin')->user()->id,
                'name' => $request->name,
                'description' => $request->description,
                'size' => $request->size,
                'facilities' => $request->facilities,
                'rent' => $request->rent,
                'address' => $request->address,
        ]);
        return back()->with('success','Property updated successfully');
    }

    public function propertyDelete(Request $request) {
        $data = $this->property->where('id',$request->id)->first();
        if($data) {
            $data->delete();
        } else {
            return back()->with('error','Property delete failed');
        }
        return back()->with('success','Property deleted successfully');
    }
}
