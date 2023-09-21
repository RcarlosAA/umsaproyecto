<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use App\Models\Especialista;



class PruebaController extends Controller
{
    //
    
    
    protected $especialista;

    public function __construct()
    {
        $this->especialista = new Especialista();
    }

    
    public function index(){
        
       
        $nombre='carlos';
        $resultado = $this->especialista->prueba('carlos');

        return $resultado;
        
        //return view('especialista/index',compact('especialistas'));
    }
}
