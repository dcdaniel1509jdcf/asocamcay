<?php

namespace App\Exports;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Excel;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;


use App\User;
use App\Product;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Reportepedidos implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $data;
    private $data1;

    public function __construct($data,$data1)
    {
        $this->data = $data;
        $this->data1 = $data1;
    }
    public function headings(): array
    {
        return [
            'Producto',
            'cantidad',
            
        ];
    }
    public function collection()
    {

            $users=DB::table('order_items')
            ->join('products','order_items.product_id','=','products.id')
            ->join('orders','order_items.order_id','=','orders.id')
            ->select('products.name',DB::raw('sum(order_items.quantity) as  num',))
            ->whereBetween('orders.created_at',array($this->data , $this->data1))
            ->groupBy('products.name')
            ->get();
            
      return $users;
    }
}