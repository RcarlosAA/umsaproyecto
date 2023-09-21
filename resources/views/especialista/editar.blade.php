@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar
                        <a href="{{ url('index') }}" class="btn btn-sm btn-info float-end">Volver</a></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('actualizar_especialista/'.$key) }}" method="POST">

                            @csrf
                            @method('PUT')
                            <div class="form-group-mb-3">
                                <label>Nombres</label>
                                <input type="text" name="nombres" value="{{ $editdato['nombres'] }}" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Apellidos</label>
                                <input type="text" name="apellidos" value="{{ $editdato['apellidos'] }}" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>CI</label>
                                <input type="number" name="ci" value="{{ $editdato['ci'] }}" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Celular</label>
                                <input type="number" name="celular" value="{{ $editdato['celular'] }}" class="form-control"> 
                            </div>
                            <div class="form-group-mb-3">
                                <label>Correo</label>
                                <input type="email" name="correo" value="{{ $editdato['correo'] }}" class="form-control"> 
                            </div>
                            

                            <div class="form-group mb-3">
                                <button class="btn btn-primary" type="submit">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection