<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function save(Request $request)
    {
        if (Cart::content()->count() == 0) {
            Session::flash('error-msg', 'hien tai ko co san pham nao');
            return redirect('/product');
        }
        $order = new Order();
        $order->totalPrice = Cart::total();
        $order->customerId = 1;
        $order->shipName = 'thuan';
        $order->shipPhone = '0929427881';
        $order->shipAddress = 'so 20 ho tung mau';
        $order->note = 'test order';
        $order->isCheckout = false;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();
        $order->status = 1;
        $order->save();
        foreach (Cart::content() as $item) {
            $order_detail = new Order_detail();
            $order_detail->orderId = $order->id;
            $order_detail->productId = $item->id;
            $order_detail->unitPrice = $item->price;
            $order_detail->quantity = $item->qty;
            $order_detail->save();
        }
        $cart_count = Cart::content()->count();
        $lists = Product::all();
        Cart::destroy();
        return redirect('product')->with(['lists' => $lists, 'cart_count' => $cart_count ,'status' =>' dat hang thanh cong']);


    }
}
