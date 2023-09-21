@extends('layouts.base2')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pacientes</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Panel</li>
                        <li class="breadcrumb-item active" aria-current="page">Pacientes</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title section-title  mt-0">Datos del Paciente</h4>
                    </div>
                    
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form"  action="{{ url('agregar_paciente') }}" method="POST">
                                @csrf
                                <div class="row">
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nombres</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Nombres"
                                            name="nombres" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Apellidos</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Apellidos"
                                            name="apellidos" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">CI</label>
                                            <input type="number" id="city-column" class="form-control" placeholder="Carnet" name="ci" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Celular</label>
                                            <input type="number" id="country-floating" class="form-control" name="celular"
                                            placeholder="Celular">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Correo</label>
                                            <input type="email" id="country-floating" class="form-control" name="correo"
                                            placeholder="Correo" >
                                        </div>
                                    </div>
                                    
                                     
                                    <h4 class="card-title section-title  mt-4">Datos de la lesion</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fecha</label>
                                                <input type="date" id="first-name-column" class="form-control" placeholder="Fecha"
                                                name="fecha" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Puntuacion de Dolor (1 - 10)</label>
                                                <input type="number" max="10" min="1" id="last-name-column" class="form-control" value="1"
                                                name="dolor" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Angulo Flexion</label>
                                                <input type="number" min="0" max="160" class="form-control" placeholder="Angulo Flexion" name="angulo_flexion" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Angulo Extension</label>
                                                <input type="number" min="0" max="160" class="form-control" name="angulo_extension"
                                                placeholder="Angulo Extension" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Tratamiento</label>
                                                <textarea class="form-control" name="tratamiento" id="label-textarea" rows="3" placeholder="Tratamiento"></textarea>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group col-md-6 col-12">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input class="form-check-input" type="radio" name="Primary" id="Primary" checked="">
                                                    <label for="checkbox5">El acceso a la aplicacion sera con su Carnet</label>
                                                </div>
                                            </div>        
                                        </div> 
                                        
                                        
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Registrar</button>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection