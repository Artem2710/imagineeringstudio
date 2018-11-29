<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.categories')->with('categories', $categories);
    }

    public function createCategory(CategoryRequest $request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return redirect(route('categories'));
    }

    public function update(Category $category)
    {

        return view('edit', [
            'category' => $category,
        ]);
    }

    public function edit(Category $category, CategoryRequest $request)
    {

        $category->fill($request->all());
        $category->update();
        return redirect(route('categories'));
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('categories'));
    }
}
