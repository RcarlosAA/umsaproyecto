<?php

namespace App\Models;
//namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class Especialista extends Model
{
    //use HasFactory;
    
    //protected $database;
    
    public function __construct()
    {
        $this->database = app('firebase.database');
        $this->tablename = 'especialistas';
    }
    
    
    //protected $database = app('firebase.database');
    
    public function prueba($nombre)
    {
        //$database = App::make('proyecto-9793e-default-rtdb.database');
        
        $especialistas = $this->database
        ->getReference($this->tabla)
        ->orderByChild('nombres')
        ->equalTo($nombre)
        ->getValue();
        
        return $especialistas;
        
    }
    
    
    public function listar()
    {
        //$database = App::make('proyecto-9793e-default-rtdb.database');
        return $this->database->getReference($this->tablename='especialistas')->getValue();
        //return $especialistas;
    }
    
    public function crear($postData)
    {
        //$database = App::make('proyecto-9793e-default-rtdb.database');
        return $this->database->getReference($this->tablename)->push($postData);
        //return $especialistas;
    }
    
    public function editar($key)
    {
        //$database = App::make('proyecto-9793e-default-rtdb.database');
        return $this->database->getReference($this->tablename)->getChild($key)->getValue();
        //return $especialistas;
    }
    
    public function actualizar($key,$updateData)
    {
        //$database = App::make('proyecto-9793e-default-rtdb.database');
        return $this->database->getReference($this->tablename.'/'.$key)->update($updateData);
        //return $especialistas;
    }
    
    public function eliminar($key)
    {
        return $this->database->getReference($this->tablename.'/'.$key)->remove();
    }
    
    public function validar_correo($correo)
    {
        $validacion = $this->database
        ->getReference($this->tablename)
        ->orderByChild('correo')
        ->equalTo($correo)
        ->getValue();
        
        
        return $validacion;
    }
    
    
    public function validar_login($datos)
    {
        
        //return $datos;
        $validacion = $this->database
        ->getReference($this->tablename)
        ->orderByChild('correo')
        ->equalTo($datos['correo'])
        ->getValue();
        
        //return $firstRecord = reset($validacion);
        
        if (!empty($validacion)) {
            $firstRecord = reset($validacion);
            
            if (Hash::check($datos['password'], $firstRecord['password'])) {
                
                /*$firstRecord = reset($validacion); // Obtén el primer registro que coincide
                $recordId = key($validacion); // Obtiene el ID (clave) del registro
                
                // Quita el campo de contraseña del registro
                unset($firstRecord['password']);
                
                // Almacena todo excepto la contraseña en la sesión*/
                session(['datos_usuario' => $firstRecord]);
                
                return true;
            }else{
                
                return false;
            }
        } else {
            return false;
        }
    }
    
    
    
    
    
    
}
