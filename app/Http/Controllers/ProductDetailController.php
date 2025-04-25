<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductDetailController extends Controller
{
    public function __invoke(Product $product)
    {
        return View('detail', ['htmlGrapesJs' => $product->htmlContent]);
    }
}
