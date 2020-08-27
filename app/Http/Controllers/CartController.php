<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\OrderItem;
class CartController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart',array());
    }
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show()
    {
        $cart=\Session::get('cart');
        $total=$this->total();
        return view('store.cart',compact('cart','total'));
    }
    //anadir item al carrito
    public function add(Product $product)
    {
        $cart =\Session::get('cart');
        $product->quantity=1;
        $cart[$product->slug]=$product;
        \Session::put('cart',$cart);
        return redirect()->route('carrito');
    }
    public function add2(Product $product,$quantity)
    {
        $cart= \Session::get('cart');
        $product->quantity=$quantity;
       $cart[$product->slug]=$product;
        \Session::put('cart',$cart);
        return redirect()->route('carrito');
    }

    public function delete(Product $product)
    {
        $cart =\Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }
    public function trash()
    {
       
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }
    public function update(Product $product,$quantity)
    {
        $cart= \Session::get('cart');
       $cart[$product->slug]->quantity=$quantity;
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }
  
    private function total()
    {
        $cart =\Session::get('cart');
       $total=0;
        foreach ($cart as $item) {
            $total+=$item->price * $item->quantity;
        }
    return $total;
    }
    public function detail(){
        if(count(\Session::get('cart'))<=0) return redirect()->route('carrito');
        $cart= \Session::get('cart');
        $total=$this->total();
        return view('store.order-detail',compact('cart','total'));
    }
    public function orderDetail()
    {
        if(count(\Session::get('cart'))<=0) return redirect()->route('carrito');
        $cart= \Session::get('cart');
        $shipping = 0;
        $total=$this->total();
        $order = Order::create([
            'subtotal' => $total,
        'shipping'=>$shipping,
			'user_id' => \Auth::user()->id
        ]);
        foreach($cart as $producto){
			$this->saveOrderItem($producto, $order->id);
		}
        \Session::forget('cart');
        return redirect()->route('carrito');
    }
    
	protected function saveOrderItem($producto, $order_id)
	{
		OrderItem::create([
			'price' => $producto->price,
			'quantity' => $producto->quantity,
			'product_id' => $producto->id,
			'order_id' => $order_id
		]);
	}
     
}
