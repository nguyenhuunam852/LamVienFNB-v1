<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Admin\CommonController;
use App\Models\Product;

class ProductController extends CommonController
{
    const RESOURCE  = 'products';

    public function index(Request $request)
    {
        return $this->commonIndex(
            $request,
            self::RESOURCE,
            'admin/Products/Products',
            Product::class,
            ['category']
        );
    }

    public function create()
    {
        $categories = Category::all();
        return Inertia::render('admin/Products/AddProduct', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        Product::create($request->validate([
            'name' => 'required|string|min:2|max:100',
            'description' => 'required|string|min:2|max:100',
            'price' => 'required|numeric|min:0',
            'categoryId' => 'required|integer|exists:categories,id',
            'pictureUrl' => 'nullable|url|max:255'
        ]));

        return redirect()->route('admin.product')->with('success', 'Product was successfully created!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return Inertia::render(
            'admin/Products/UpdateProduct',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product->update([
            ...$request->validate([
                'name' => 'required|string|min:2|max:100',
                'description' => 'required|string|min:2|max:100',
                'price' => 'required|numeric|min:0',
                'categoryId' => 'required|integer|exists:categories,id',
                'pictureUrl' => 'nullable|url|max:255'
            ])
        ]);

        return redirect()->route('admin.category')->with('success', 'Product was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
