<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::paginate(3);
        return view('category.categories')->with('categories', $categories);
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createCategory(CategoryRequest $request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return redirect(route('categories'));
    }

    /**
     * @param Category $category
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit(Category $category, CategoryRequest $request)
    {
        $category->fill($request->all());
        $category->update();
        return redirect(route('categories'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('categories'));
    }
}
