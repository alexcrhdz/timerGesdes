<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statusController extends Controller
{
    public function status(){
        return view('empleados.status');
    }
}
