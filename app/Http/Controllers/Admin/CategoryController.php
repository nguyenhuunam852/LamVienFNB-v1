<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::query()
            ->when(
                $request->input('Category') || $request->input('Category')!="",
                fn($query) => $query->where('name', 'like', '%' . $request->input('Category') . '%')
            )
            ->paginate(5);

        // Check if results are empty
        if ($categories->isEmpty()) {
            // No results found
            return Inertia::render('admin/Categories', [
                'categories' => $categories->items(),
                'filters' => $request->only('Category'),
                'message' => 'No categories found.',
                'pagination' => [
                    'currentPage' => 1,
                    'totalPages' => 1,
                    'totalItems' => 0,
                ]
            ]);
        }

        // Results found
        return Inertia::render('admin/Categories', [
            'categories' => $categories->items(),
            'filters' => $request->only('Category'),
            'pagination' => [
                'currentPage' => $categories->currentPage(),
                'totalPages' => $categories->lastPage(),
                'totalItems' => $categories->total(),
            ],
        ]);
    }
}
