<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $img = Image::make($file);
            $webpImage = $img->encode('webp', 90);

            $fileName = 'uploads/' . uniqid() . '.webp';
            $path = Storage::disk('r2')->put($fileName, $webpImage);

            if ($path) {

                $url = env('R2_URL') . '/' . $fileName;

                return response()->json([
                    'message' => 'Upload successful',
                    'uploadedUrl' => $url,
                ]);
            }
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }
}
