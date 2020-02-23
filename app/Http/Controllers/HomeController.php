<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(7);
        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return view('home')->with(['products' => $products, 'categories' => $categories]);
    }

    public function category(Category $category){

        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();
        return view('category')->with(['products' => $category->products()->paginate(3), 'categories' => $categories]);

    }

    public function product(Product $product){

        return view('product')->with(['product' => $product]);

    }
}