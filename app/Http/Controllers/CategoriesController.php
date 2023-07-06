<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    public function index(): View
    {
        return view('categories.index', [
            'categoriesList' => $this->getCategories(),
        ]);
    }

    public function show(int $id): View
    {
        return view('categories.show', [
            'categories' => $this->getCategories($id),
        ]);
    }
}
