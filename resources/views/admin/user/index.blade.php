@extends('admin.partials.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h3 class="rounded-top card-header  indigo lighten-0 white-text text-center py-4">
            <strong>Usuarios Registradas </strong><a class="btn btn-warning btn-sm m-0 waves-effect" href="{{ route('adm-create-user') }}"><i class="fas fa-plus"></i></a>
          </h3>
       
    </div>
    
    <div class="page">
        
        <div class=" table-responsive">
            <table class="table table-borderedless table-hover">
                <thead>
                    <tr>
                        <th>Editar</th>
                        
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Correo</th>
                        <th>Contacto</th>
                        <th>Tipo</th>
                        <th>Activo</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <a href="{{ route('adm-edit-user', $user) }}" class="btn btn-primary btn-sm m-0 waves-effect">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                            </td>
                            
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->ci }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                            <td>
                                {!! Form::open(['route' => ['adm-delete-user', $user]]) !!}
                                 <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger btn-sm m-0 waves-effect">
                                <i class="far fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <hr>
        
        <?php echo $users->render(); ?>
        
    </div>
</div>

@endsection