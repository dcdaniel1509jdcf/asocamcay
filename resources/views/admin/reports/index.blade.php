@extends('admin.partials.template')

@section('content')
<div class="container ">
<div class="div">
    <h3 class=" text-center">Descargar Reportes <i class="fas fa-download"></i></h3>
    </div>    
      


        <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="true"
          aria-controls="collapse96">
          Reporte de Productos y cantidades
        </a>
      </h5>
    </div>
    <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96"
      data-parent="#accordionEx23">
      <div class="card-body">
        {!! Form::open(['action'=>'Admin\ReportsController@store']) !!}
        <div class="row">
        <div class="col">
          <div class="col-auto col-sm-8">
              <label for="finicial">Fecha Inicial</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
        {!!
            Form::text(
                'finicial',
                null,
                array(
                    'class'=>'form-control',
                    'data-provide'=>'datepicker',
                    'data-date-format'=>'yyyy-mm-dd 00:00:00',
                    'readonly' => 'true'
                    
                )
            )
            !!}
          </div>
      </div>
        </div>
        
        <div class="col">
          <div class="col-auto col-sm-8">
              <label for="ffinal">Fecha Final</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
                {!!
                  Form::text(
                      'ffinal',
                      null,
                      array(
                          'class'=>'form-control',
                          'data-provide'=>'datepicker',
                          'data-date-format'=>'yyyy-mm-dd 23:59:59',
                          'readonly' => 'true'
                      )
                  )
                  !!}
              </div>
            </div>
            </div>
            <div class="col">
                <p></p>
            {!! Form::submit('Generar Reporte',array('class'=>'btn btn-primary')) !!}
        </div>
        
          </div>
          {!! Form::close() !!}  
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse97"
          aria-expanded="false" aria-controls="collapse97">
         Reporte de Pedidos y Clientes
        </a>
      </h5>
    </div>
    <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97"
      data-parent="#accordionEx23">
      <div class="card-body">
        
        {!! Form::open(['action'=>'Admin\ReportsController@store2']) !!}
        <div class="row">
        <div class="col">
          <div class="col-auto col-sm-8">
              <label for="finicial">Fecha Inicial</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
        {!!
            Form::text(
                'finicial2',
                null,
                array(
                    'class'=>'form-control',
                    'data-provide'=>'datepicker',
                    'data-date-format'=>'yyyy-mm-dd 00:00:00',
                    'readonly' => 'true'
                    
                )
            )
            !!}
          </div>
      </div>
        </div>
        
        <div class="col">
          <div class="col-auto col-sm-8">
              <label for="ffinal">Fecha Final</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
                {!!
                  Form::text(
                      'ffinal2',
                      null,
                      array(
                          'class'=>'form-control',
                          'data-provide'=>'datepicker',
                          'data-date-format'=>'yyyy-mm-dd 23:59:59',
                          'readonly' => 'true'
                      )
                  )
                  !!}
              </div>
            </div>
            </div>
            <div class="col">
                <p></p>
            {!! Form::submit('Generar Reporte',array('class'=>'btn btn-primary')) !!}
        </div>
        
          </div>
          {!! Form::close() !!}
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse98"
          aria-expanded="false" aria-controls="collapse98">
          Listado de Clientes 
        </a>
      </h5>
    </div>
    <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
            <h2 class="font-weight-bold mb-3 black-text">Descargar listado de Clietes. </h2>
            <a class="btn btn-primary" href="{{ route('listClient')}}">descargar</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--Accordion wrapper-->
    </div>
    
      @endsection