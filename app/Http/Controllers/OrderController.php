<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Session;
use Cart;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = json_decode(Order::all('product_id')[0]);
        var_dump($orders);
        return view('orders', ['orders' => $orders]);
    }

    /**
     * goes to cart with resource
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function addOrder(Request $request,Order $order)
    {
        if (empty(Session::get('cart')->items)) {
            return redirect()->back();
        }
        $user = auth()->user();
        $order = new Order([
            'order_number' => rand(1, 15000),
            'user_id'=> $user->id,
            'order'=> json_encode(Session::get('cart'))
        ]);
        $order->save();
        session()->put('cart', null);
        return redirect()->route('orders');
    }
   /**
     * retrieves orders and goes to orders
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function getOrder(Order $order)
    {
        $orders = json_decode(Order::all('order'));
        //  var_dump($orders);
        // exit;
        return view('orders', ['orders' => $orders]);
    }

}
