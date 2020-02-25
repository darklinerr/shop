<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DemeterChain\C;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $categories = Category::WhereNull('category_id')->pluck('id');

        $products = Product::whereIn('category_id', $categories)->paginate(11);

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

    public function cart(){

        return view('cart');

    }
}
