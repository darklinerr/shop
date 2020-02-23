<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index')->with(['products' => $products]);
    }

    public function add(){
        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();

        return view('admin.product.add')->with(['categories' => $categories]);
    }

    public function create(Request $request){

        $rules = [
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'description' => 'required'
        ];

        $this->validate($request, $rules);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'description' => $request->description,

        ]);

        return redirect()->route('admin.product');

    }

    public function show(Product $product){
        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();

        return view('admin.product.show')->with(['product' => $product, 'categories' => $categories]);
    }

    public function edit(Request $request, Product $product){

        $rules = [
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'description' => 'required'
        ];

        $this->validate($request, $rules);

        if(optional($product)){
            $product->update($request->all());
            return redirect()->route('admin.product');
        }else{
            return redirect()->route('admin.product');
        }

    }

    public function delete($id){

        Category::where('id', $id)->delete();
        Category::where('category_id', $id)->update([
            'category_id' => null
        ]);

        return redirect()->back();
    }
}
