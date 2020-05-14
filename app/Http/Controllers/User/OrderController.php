<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\User;
class OrderController extends Controller
{
    public function index($user_id){
        $orders = Order::all()->where('user_id', $user_id)->sortByDesc('id');
       
     
        return view('user.order.index',compact('orders'));
        
    }
    public function show($user_id){
        $orders = Order::all()->where('user_id', $user_id->id)->sortByDesc('id');
       
      
        return view('user.order.index',compact('orders'));
    }
   
    public function getItems(Request $request)
    {
    $items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
    return json_encode($items);
    }
    public function destroy($id)
    {
        $order=Order::findOrFail($id);
        $deleted = $order->delete();
       
   // $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';
        
    return redirect()->route('adm-order');//->with('message', $message);
}
}
