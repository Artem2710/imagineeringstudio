<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.11.2018
 * Time: 19:00
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public static function getAllProduct(Category $category)
    {
//        $category = Category::find($category->id);
//        return Product::where('category_id', '=', $category->id)->get();

//        return $products = Product::where('category_id', '=', 23);
//                return $products = Product::all();


    }

//    public function category()
//    {
//        return $this->belongsTo('App\Category');
//    }

//    public function material()
//    {
//        return $this->hasOne('App\Material');
//    }

    public function material()
    {
        return $this->belongsTo('App\Material');
    }
}