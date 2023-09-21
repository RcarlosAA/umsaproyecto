

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
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                Proyecto De Grado
                                <h3>Iniciar Session</h3>
                                <!--
                                    <p>Please sign in to continue to Voler.</p>
                                -->
                                
                            </div>
                            <form action="{{ url('loginvalidacion') }}" method="POST">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Correo</label>
                                    <div class="position-relative">
                                        <input type="email" class="form-control" id="username" required name="correo">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Contraseña</label>
                                        
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" required name="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-block mb-2 btn-primary">Ingresar</button>
                                    </div>
                                    
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ url('registrar_login') }}" class="btn btn-block mb-2 btn-secondary">Registrarse</a>
                                </div>
                                
                            </div>

                            
                            
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
