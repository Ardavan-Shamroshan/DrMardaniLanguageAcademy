<?php

namespace Modules\School\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait Base64ToFile
{
    /**
     * @param string $request
     *
     * @return string
     */
    public function convert($request): string {
        try {
            $photo = $request;  // your base64 encoded
            $photo = str_replace(array('data:image/png;base64,', 'data:image/jpeg;base64,', 'data:image/jpg;base64,', ' '), array('', '', '', '+'), $photo);
            $photoPath = '/photos/' . time() . Str::random(10) . '.' . 'png';
            Storage::disk('public')->put($photoPath, base64_decode($photo));

            return $photoPath;
        } catch (\Exception $e) {
            throw new \Exception('Failed to save Photo. ' . $e->getMessage());
        }

    }
}