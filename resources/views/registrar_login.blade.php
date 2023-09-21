

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <link href="{{ asset('dist/assets/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/assets/css/bootstrap.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        Proyecto De Grado
                        <h3>Registrar</h3>
                        <!--
                                    <p>Please sign in to continue to Voler.</p>
                                -->
                    </div>
                    @if (session('status'))
                    <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
                    @endif
                    <form action="{{ url('agregar_especialista') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Nombres</label>
                                    <input type="text" id="first-name-column" class="form-control"  name="nombres">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Apellidos</label>
                                    <input type="text" id="last-name-column" class="form-control"  name="apellidos">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column">CI</label>
                                    <input type="number" id="username-column" class="form-control" name="ci">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Celular</label>
                                    <input type="number" id="country-floating" class="form-control" name="celular">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Correo</label>
                                    <input type="email" id="company-column" class="form-control" name="correo">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Contraseña</label>
                                    <input type="password" id="email-id-column" class="form-control" name="password">
                                </div>
                            </div>
                        </diV>

                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-block mb-2 btn-primary"> Registrar</button>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ url('login') }}" class="btn btn-block mb-2 btn-secondary">Ingresar</a>
                                
                            </div>
                        </div>

                                
                       
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{ asset('dist/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/app.js') }}"></script>
    <script src="{{ asset('dist/assets/js/main.js') }}"></script>
</body>

</html>


