<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use App\Base\Traits\ImageUploadTrait;
use App\Models\SubAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 *
 */
class SubAdminProfileController extends Controller
{
    use ImageUploadTrait;

    /**
     * @param SubAdmin $subAdmin
     */
    public function __construct(SubAdmin $subAdmin) {
        $this->subAdmin = $subAdmin;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profileView() {
        $subAdminId = Auth::guard('sub-admin')->user()->id;
        $subAdminUser = $this->subAdmin->where('id',$subAdminId)->first();
        $profileImagePath = asset('storage/sub-admin/profile/hrm-profile-'.$subAdminUser->id.'/'.$subAdminUser->profile);
        $profileImage = $subAdminUser->profile;
        return view('sub-admin.profile',compact('profileImagePath','profileImage'));
    }

    /**
     * @param Request $request
     * @return true
     */
    public function profileImageUpload(Request $request) {
        $subAdminId = Auth::guard('sub-admin')->user()->id;
        $subAdminUser = $this->subAdmin->where('id',$subAdminId)->first();
        $imageName = $this->imageUpload($request->file,'profile',$subAdminId);
        $getProfileToDelete = $subAdminUser->profile;
        $this->subAdmin->where('id',$subAdminId)->update([
            'profile' => $imageName,
        ]);
        if (Storage::disk('profile')->exists('hrm-profile-'.$subAdminId.'/'.$getProfileToDelete)) {
                Storage::disk('profile')->delete('hrm-profile-'.$subAdminId.'/'.$getProfileToDelete);
        }
        return true;
    }

    public function profileImageView() {
        dd(1);
    }
}
