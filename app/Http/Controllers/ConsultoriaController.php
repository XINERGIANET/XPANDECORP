<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultoriaController extends Controller
{
    public function index(){
        return view('consultoria.index');
    }

    public function nosotros(){
        return view('consultoria.nosotros');
    }

    public function productividad(){
        return view('consultoria.servicios.productividad');
    }

    public function higiene(){
        return view('consultoria.servicios.higiene');
    }

    public function seguridad(){
        return view('consultoria.servicios.seguridad');
    }

    public function ecosistema(){
        return view('consultoria.servicios.ecosistema');
    }
    
}
