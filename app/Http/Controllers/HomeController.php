<?php

namespace App\Http\Controllers;

use App\Parte;
use App\Problema;
use App\Sintoma;
use App\SubParte;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partes = Parte::all();
        $subpartes = SubParte::all();
        $problemas = Problema::all();
        $sintomas = Sintoma::all();

        return view('home', [
            'subpartes' => $subpartes,
            'problemas' => $problemas,
            'sintomas'  => $sintomas,
            'partes'    => $partes,
        ]);
    }
}
