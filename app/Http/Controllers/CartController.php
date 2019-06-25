<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use Session;

class CartController extends Controller
{
    private $cart;

    public function __construct(){
        $this->cart = new Cart();
    }

    public function getCart()
    {

        return view('shop.shopping-cart',[
            'products' => $this->cart->getItems(),
            'totalQty' => $this->cart->GetTotalItemCount(),
            'totalPrice' => $this->cart->GetTotalPrice()
        ]);
    }

    public function addCart(Request $request)
    {
        $id = $request->get('product');
        $product = Product::find($id);

        $this->cart->add($product, $product->id);

        return redirect()->back(); 
    }


    /**
     * Empties the cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function kill(Request $request) {

        session()->put('cart', null);
        return redirect()->route('viewCart');
    }

    public function killOne(Request $request){
        $productId = $request->get('product');

        $oldQuantity = $this->cart->items[$productId]['quantity'];
        $this->cart->totalQty = $this->cart->totalQty - $oldQuantity;

        unset($this->cart->items[$productId]);
        session()->put('cart', $this->cart);

        return redirect()->route('viewCart');

    }
}
