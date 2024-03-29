<?php


namespace App\traits;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait UploadTrait
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
//        $name = !is_null($filename) ? $filename : Str::random(25);
//
//        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
//
//        return $file;
        $path = Storage::disk('s3')->put('images', $uploadedFile);
        $path = Storage::disk('s3')->url($path);
        return $path;
    }
}
