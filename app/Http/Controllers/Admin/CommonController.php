<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CommonController extends Controller
{
    public function commonIndex(Request $request,
    string $resource,
    string $view,
    $model)
    {
        $searchFields =  $request->input('searchFields', '');
        $searchKeys = $request->input('searchKeys', '');
        $sortField = $request->input('sortField', 'id');
        $sortDirection = $request->input('sortDirection', 'desc');

        $query = $model::query();

        $fields = array_map('trim', explode(',', $searchFields));
        $keys = array_map('trim', explode(',', $searchKeys));

        foreach ($fields as $index => $field) {
            $key = $keys[$index] ?? '';

            if (filled($key)) {
                $query->where($field, 'like', '%' . $key . '%');
                $filters[$field] = $key;
            }
        }

        $items = $query->orderBy($sortField, $sortDirection)->paginate(5)->withQueryString();

        return Inertia::render($view, [
            $resource => $items->items(),
            'filters' => [
                "searchFields" => $searchFields,
                "searchKeys" => $searchKeys
            ],
            'sort' => compact('sortField', 'sortDirection'),
            'pagination' => [
                'currentPage' => $items->currentPage(),
                'totalPages' => $items->lastPage(),
                'totalItems' => $items->total(),
            ],
            'message' => $items->isEmpty() ? 'No results found.' : null,
        ]);
    }
}
