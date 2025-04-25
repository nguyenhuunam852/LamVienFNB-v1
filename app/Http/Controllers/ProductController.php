<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Request $request)
    {
        $slug = $request->query('category');

        $items = Product::query()
        ->with('category')
        ->when($slug, function ($query) use ($slug) {
            $query->whereHas('category', function ($q) use ($slug) {
                $q->where('slug', $slug);
            });
        })->orderBy('id', 'desc')
        ->get();
        ;

        $categories = Category::orderBy('name', 'asc')->get();

        return View('product', ['items' => $items, 'categories'=> $categories, 'selected'=> $slug]);
    }
}
