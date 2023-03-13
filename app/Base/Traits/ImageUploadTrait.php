<?php

namespace App\Base\Traits;

use Illuminate\Support\Facades\Storage;

/**
 * Common image upload in disks
 */
trait ImageUploadTrait {

    /**
     * @param $attachment
     * @param $type
     * @param $id
     * @return string
     */
    public function imageUpload($attachment = '', $type = '', $id = '') {
        // Image extension
        $attachmentExtension = $attachment->getClientOriginalExtension();
        $attachment->getClientMimeType();
        $attachment->getClientOriginalName();
        $attachment->getSize();
        // Set folder path
        $folderName = 'hrm-'.$type . '-' . $id;
        // Set image name
        $imageName = 'hrm-'.$type . '-' . $id .'-' . time() .'.'.$attachmentExtension ;

        Storage::disk($type)->putFileAs($folderName,$attachment,$imageName);
        return $imageName;
    }

}
