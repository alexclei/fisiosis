<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteJsonController extends Controller
{
    public function index()
    {
    	$arr = ['id' => 1, 'nome' => 'alex'];
    	return response()->json($arr);
    }
}
