@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar
                        <a href="{{ url('index') }}" class="btn btn-sm btn-info float-end">Volver</a></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('agregar_especialista') }}" method="POST">
                            @csrf
                            <div class="form-group-mb-3">
                                <label>Nombres</label>
                                <input type="text" name="nombres" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Apellidos</label>
                                <input type="text" name="apellidos" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>CI</label>
                                <input type="number" name="ci" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Celular</label>
                                <input type="number" name="celular" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Correo</label>
                                <input type="email" name="correo" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Contraseña</label>
                                <input type="password" name="password" class="form-control"> 
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection