<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class areasController extends Controller
{
    public function areas(){
        return view('empleados.areas');
    }
}
