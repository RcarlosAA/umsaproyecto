<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use App\Models\Especialista;
use Illuminate\Support\Facades\Hash;
class EspecialistaController extends Controller
{

    public function __construct()
    {
        $this->especialista = new Especialista();
    }




    //
    public function index(){

        //return '<h1>hola</h1>';
        $especialistas = $this->especialista->listar();
        //$especialistas = $this->database->getReference($this->tablename='especialistas')->getValue();
        return view('especialista/index',compact('especialistas'));
    }


    
    public function create(){
        return view('especialista/crear');
    }

    public function store(Request $request){
        $postData = [
            
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'ci'=>$request->ci,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
            'password'=>Hash::make($request->password),
        ];

        $val = $this->especialista->validar_correo($postData['correo']);

        if(!$val){
            $postRef = $this->especialista->crear($postData);

            //$postRef = $this->database->getReference($this->tablename)->push($postData);
            if($postRef){
                #return redirect('especialista')->with('status','Especialsita creado exitosamente!');
                return redirect('login')->with('status','Cuenta creada exitosamente!');
            }else{
                return redirect('registrar_login')->with('status','Error al crear');
            }
        }else{
            return redirect('registrar_login')->with('status','Correo existente');
        }

        
    }

public function edit($id){

    $key=$id;
    $editdato=$this->especialista->editar($key);
    //return $editdato;
    //$editdato= $this->database->getReference($this->tablename)->getChild($key)->getValue();
    if($editdato){
        return view('especialista/editar',compact('editdato','key'));
    }else{
        return redirect('especialista')->with('status','Especialsita no encontrado');
    }
    
}

public function actualizar(Request $request, $id){
    $key=$id;
    $updateData = [
        'nombres'=>$request->nombres,
        'apellidos'=>$request->apellidos,
        'ci'=>$request->ci,
        'celular'=>$request->celular,
        'correo'=>$request->correo,
    ];

    $resp_update=$this->especialista->actualizar($key,$updateData);
    
    //$resp_update=$this->database->getReference($this->tablename.'/'.$key)->update($updateData);
    if($resp_update){
        return redirect('especialista')->with('status','Especialsita actualizado correctamente');
    }
    else{
        return redirect('especialista')->with('status','Especialsita NO actualizado');
    }

}

public function eliminar($id){

    $key=$id;

    //$del_data=$this->database->getReference($this->tablename.'/'.$key)->remove();
    $del_data=$this->especialista->eliminar($key);

    if($del_data){
        return redirect('especialista')->with('status','Especialsita eliminado correctamente'); 
    }else{
        return redirect('especialista')->with('status','Especialsita NO eliminado');
    }
}


//// para validacion de login
public function index_login(){
    return view('index_login');
}

public function login_validacion(Request $request){
    $datos = [
        'correo'=>$request->correo,
        'password'=>$request->password,
    ];

    $validar=$this->especialista->validar_login($datos);

    //return $validar;


    
    if($validar){
        return redirect('panel');
    }else{
        return view('index_login');
    }
    //return view('especialista/index',compact('especialistas'));
}






}
