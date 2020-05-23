<?php

namespace App\Exports;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Excel;
use Illuminate\Http\Request;

use App\User;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReporteClientes implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    
    public function __construct()
    {
       
    }
    public function headings(): array
    {
        return [['Datos de Facturacion de Clientes'
    ],
          ['id','CI','Apellido','Nombre','Ci', 'Ccorreo','Contacto','Direccion']

            
        ];
    }
    public function collection()
    {

            $users=DB::table('users')
            ->select('id','ci','last_name','name','email','contact','address')
            ->orderBy('id', 'DESC')
            ->get();
            
      return $users;
    }
}