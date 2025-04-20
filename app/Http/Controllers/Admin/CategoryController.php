<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sortField = $request->input('sortField') ?? "id";
        $sortDirection = $request->input('sortDirection') ?? "desc";

        $categories = Category::query()
            ->when(
                $request->input('Category') || $request->input('Category') != "",
                fn($query) => $query->where('name', 'like', '%' . $request->input('Category') . '%')
            )
            ->orderBy($sortField, $sortDirection)
            ->paginate(5);

        // Check if results are empty
        if ($categories->isEmpty()) {
            // No results found
            return Inertia::render('admin/Categories/Categories', [
                'categories' => $categories->items(),
                'filters' => $request->only('Category'),
                'message' => 'No categories found.',
                'sort' => [
                    'sortField' => 'id',
                    'sortDirection' => 'desc'
                ],
                'pagination' => [
                    'currentPage' => 1,
                    'totalPages' => 1,
                    'totalItems' => 0,
                ]
            ]);
        }

        // Results found
        return Inertia::render('admin/Categories/Categories', [
            'categories' => $categories->items(),
            'filters' => $request->only('Category'),
            'sort' => [
                'sortField' =>  $sortField,
                'sortDirection' => $sortDirection
            ],
            'pagination' => [
                'currentPage' => $categories->currentPage(),
                'totalPages' => $categories->lastPage(),
                'totalItems' => $categories->total(),
            ],
        ]);
    }

    public function create()
    {
        return Inertia::render('admin/Categories/AddCategory');
    }

    public function edit(Category $category)
    {
        return Inertia::render(
            'admin/Categories/UpdateCategory',
            [
                'category' => $category
            ]
        );
    }

    public function store(Request $request)
    {
        Category::create([
            ...$request->validate([
                'name' => 'required|string|min:2|max:100',
                'description' => 'required|string|min:2|max:100'
            ]),
            'slug' => Str::slug($request->input('name'))
        ]);

        return redirect()->route('admin.category')->with('success', 'Category was successfully created!');
    }

    public function update(Request $request, Category $category)
    {
        try {
            if (!$category) {
                return redirect()->back()->with('error', 'Category not found.');
            }

            if($category->name != $request->input('name') && Category::query()
                ->where('slug', '=', Str::slug($request->input('name')))
                ->where('id', '!=', $category->id)
                ->exists())
            {
                return redirect()->back()->with('error', 'there is a same product in system.');
            }

            $category->update([
                ...$request->validate([
                    'name' => 'required|string|min:2|max:100',
                    'description' => 'required|string|min:2|max:100',
                ]),
                'slug' => Str::slug($request->input('name'))
            ]);

            return redirect()->route('admin.category')->with('success', 'Category was successfully updated!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Happened: ' . $e->getMessage());
        }
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success', 'Category was successfully deleted!');
    }
}
