<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
class OrderController extends Controller
{
    public function index(){
        $orders=Order::orderBy('id','desc')->paginate(5);
        //dd($orders);
        return view('admin.order.index',compact('orders'));
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
