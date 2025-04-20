<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Admin\CommonController;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends CommonController
{
    const RESOURCE  = 'products';

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $file = $request->file('file');

            $img = Image::make($file);
            $webpImage = $img->encode('webp', 90);

            // $filename = time() . '_' . $file->getClientOriginalName();

            $fileName = 'uploads/'. uniqid() . '.webp';
            $path = Storage::disk('r2')->put($fileName, $webpImage);

            // Manually construct the public URL
            $url = env('R2_URL') . '/' . $fileName;

            return response()->json([
                'message' => 'Upload successful',
                'uploadedUrl' => $url,
            ]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

    public function index(Request $request)
    {
        return $this->commonIndex(
            $request,
            self::RESOURCE,
            'admin/Products/Products',
            Category::class
        );
    }

    public function create()
    {
        return Inertia::render('admin/Products/AddProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
