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
        $id = $request->input('id');
        $product = Product::find($id);
        $product->update([
            'htmlContent' => $html,
        ]);

        return response()->json(['status' => 'done']);
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
            'contentHtml' => $contentHtml,
            'productId' => $product->id
        ]);
    }
}
