<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index(Category $category, Product $product)
    {
        $selectValue = Input::get('material');
        if (!empty ($selectValue)) {
            $products = Product::where('material_id', 'like', "$selectValue")->where('category_id', '=', $category->id)
                ->get();
        } else {
            $products = Product::where('category_id', '=', $category->id)
                ->get();
        }
        return view('product.products', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}
