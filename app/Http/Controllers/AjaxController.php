<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class AjaxController extends Controller
{
    public function addToCart(Request $request){

        if(!Session::has('cart')){
            Session::put('cart', []);
        }

        $cart = Session::get('cart');

        if(array_key_exists($request->id, $cart)){
            foreach ($cart as $key => $value) {
                if($key == $request->id){
                    $value += 1;
                    $cart[$key] = $value;
                }
            }
        }else{
            $cart[$request->id] = 1;
        }

        Session::put('cart', $cart);
        Session::save();

//        Session::forget('cart');
    }

    public function changeCart(Request $request){

        $cart = Session::get('cart');

        $cart[$request->id] = $request->quantity;

        Session::put('cart', $cart);
        Session::save();
    }

    public function deleteCart(Request $request){
        Session::forget('cart.' . $request->id);

        $id = array_keys(Session::get('cart'));

        $products = Product::whereIn('id', $id)->get();

        $quantity = Session::get('cart');
        $total = 0;
        return view('ajax.cart')->with(['products' => $products, 'quantity' => $quantity, 'total' => $total]);


    }

    public function showCart(Request $request){
        if(Session::has('cart')){
            $id = array_keys(Session::get('cart'));

            $products = Product::whereIn('id', $id)->get();

            $quantity = Session::get('cart');
            $total = 0;
            return view('ajax.cart')->with(['products' => $products, 'quantity' => $quantity, 'total' => $total]);
        }else{
            return view('ajax.cart')->with(['products' => [], 'quantity' => [], 'total' => 0]);
        }


    }

}
