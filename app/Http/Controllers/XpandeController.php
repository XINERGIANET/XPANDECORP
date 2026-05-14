<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XpandeController extends Controller
{
    public function index(){
        return view('xpande.index');
    }
}
