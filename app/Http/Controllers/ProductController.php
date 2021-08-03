<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $cart_count = Cart::content()->count();
        $lists = Product::all();
        return view('product/index',[
            'lists'=>$lists,
            'cart_count'=>$cart_count
        ]);
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        $floatVar = (float) $product->price;
        Cart::add($product->id, $product->name, 1, $floatVar ,['thumbnail' => $product->thumbnail]);
    }
    public function show()
    {   $cart_count = Cart::content()->count();
        $lists = Product::all();
        if (Cart::content()->count()==0){
            return redirect('product')->with(['lists'=>$lists, 'cart_count'=>$cart_count]);
        }
       return view('product/list');
    }
    public function delete()
    {
        Cart::destroy();
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/product/show');
    }
    public function update(Request $request)
    {
        $id = $request->rowId;
        $quantity = $request->qty;
    }

}
