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

class ReportepedidosCliente implements FromCollection,WithHeadings
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
        return [['PEDIDOS DE USUARIOS DETALLADOS'
    ],
          ['Fecha de Compra','CI','Correo','Contacto','Nombre', 'Apellido','Producto','Cantidad']

            
        ];
    }
    public function collection()
    {

            $users=DB::table('order_items')
            ->join('orders','order_items.order_id','=','orders.id')
            ->join('users','orders.user_id','=','users.id')
            ->join('products','order_items.product_id','=','products.id')
            ->select('orders.created_at','users.ci','users.email','users.contact',DB::raw('users.name as cliente'),'users.last_name','products.name','order_items.quantity')
            ->whereBetween('orders.created_at',array($this->data , $this->data1))
            ->get();
            
      return $users;
    }
}