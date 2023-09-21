@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
                @endif


                <div class="card">
                    <div class="card-header">
                        <h4>Lsita
                        <a href="{{ url('agregar_especialista') }}" class="btn btn-sm btn-primary float-end">Agregar</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>CI</th>
                                    <th>Celular</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1
                                @endphp
                                @forelse ($especialistas as $key=>$item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item['nombres'] }}</td>
                                        <td>{{ $item['apellidos'] }}</td>
                                        <td>{{ $item['ci'] }}</td>
                                        <td>{{ $item['celular'] }}</td>
                                        <td>{{ $item['correo'] }}</td>
                                        <td> <a href="{{ url('editar_especialista/'.$key) }}" class="btn btn-sm btn-success">Editar </a> 
                                            <a href="{{ url('eliminar_especialista/'.$key) }}" class="btn btn-sm btn-danger"> Eliminar</a>  </td>
                  
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Hay Datos que mostrar</td>
                                </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection