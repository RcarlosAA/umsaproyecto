<?php

namespace App\Models;
use Kreait\Firebase\Contract\Database;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public function __construct()
    {
        $this->database = app('firebase.database');
        $this->tablename = 'paciente';
    }


    public function crear($postData)
    {
        //$database = App::make('proyecto-9793e-default-rtdb.database');
        return $this->database->getReference($this->tablename)->push($postData);
        //return $especialistas;
    }
}
