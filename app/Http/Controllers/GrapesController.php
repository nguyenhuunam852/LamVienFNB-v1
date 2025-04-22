<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GrapesController extends Controller
{
    public function saveHtmlToPublic(Request $request)
    {
        $html = $request->input('html');

        $path = public_path('grapes-output.html'); // You can customize the filename
        File::put($path, $html);

        return response()->json(['url' => asset('grapes-output.html')]);
    }

    public function grapesPreview(Request $request)
    {
        return view('preview', [
            'htmlFromGrapesJs' => $request->input('html'),
            'cssFromGrapesJs' => $request->input('css'),
        ]);
    }

    public function grapesTemplate(Product $product)
    {
        $contentHtml = $product->htmlContent;
        return view('grapes-template',[
            'contentHtml' => $contentHtml
        ]);
    }
}
