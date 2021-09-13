<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gruposController extends Controller
{
    public function grupos(){
        return view('empleados.grupos');
    }
}
