<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use Excel;
use App\Exports\ReporteClientes;
use App\Exports\Reportepedidos;
use App\Exports\ReportepedidosCliente;
use Maatwebsite\Excel\ExcelServiceProvide;
class ReportsController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
    }
    public function show()
    {
        return view('admin.reports.index');
    }
    public function store(Request $request){
$fini=$request->get('finicial') ;
$ffin=$request->get('ffinal')  ;  
$hoy = date("m.d"); 
          return Excel::download(new Reportepedidos($fini,$ffin), $hoy.'ProductosCantidades.xlsx');
    }
    public function store2(Request $request){
        $fini=$request->get('finicial2') ;
        $ffin=$request->get('ffinal2')  ; 
        $hoy = date("m.d"); 
                  return Excel::download(new ReportepedidosCliente($fini,$ffin), $hoy.'Productoscliente.xlsx');
            }

    public function store3(){
        $hoy = date("m.d");
        
        return Excel::download(new ReporteClientes(), $hoy.'ListadoDeclientes.xlsx');
    }
}
