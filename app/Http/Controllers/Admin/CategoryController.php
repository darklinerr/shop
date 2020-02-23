<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index')->with(['categories' => $categories]);
    }

    public function add(){
        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();

        return view('admin.category.add')->with(['categories' => $categories]);
    }

    public function create(Request $request){

        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];

        $this->validate($request, $rules);

        Category::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,

        ]);

        return redirect()->route('admin.category');

    }

    public function show(Category $category){
        $categories = Category::whereNull('category_id')->with('childrenCategories')->get();

        return view('admin.category.show')->with(['category' => $category, 'categories' => $categories]);
    }

    public function edit(Request $request, Category $category){

        $rules = [
            'name' => 'required',
            'description' => 'required'
        ];

        $this->validate($request, $rules);

        if(optional($category)){
            $category->update($request->all());
            return redirect()->route('admin.category');
        }else{
            return redirect()->route('admin.category');
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
