<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrosController extends Controller
{
    public function registros(){
        return view('empleados.registros');
    }
}
