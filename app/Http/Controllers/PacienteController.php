<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //
    public function __construct()
    {
        $this->paciente = new Paciente();
    }

    public function crear(){
        $usuario=session('datos_usuario');
        return view('paciente/crear',compact('usuario'));
    }

    public function almacenar(Request $request){
        $usuario=session('datos_usuario');
        $postData = [
            'ci_especialista'=>$usuario['ci'],
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'ci'=>$request->ci,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
            'fecha'=>$request->fecha,
            'dolor'=>$request->dolor,
            'angulo_flexion'=>$request->angulo_flexion,
            'angulo_extension'=>$request->angulo_extension,
            'tratamiento'=>$request->tratamiento,            
        ];


        if($postData['ci_especialista']!=null){
            $crear = $this->paciente->crear($postData);
            if($crear){
                return view('paciente/crear',compact('usuario'));
            }else{
                return 'no se creo';
            }
        }


        
    }
}
