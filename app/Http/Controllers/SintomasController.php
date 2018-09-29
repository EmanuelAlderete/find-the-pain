<?php

namespace App\Http\Controllers;

use App\Sintoma;
use Illuminate\Http\Request;

class SintomasController extends Controller
{
    public function show() {
        $sintomas = Sintoma::all();

        return view('adm.sintomas', [
            'sintomas' => $sintomas
        ]);
    }

    public function store(Request $request) {
        $sintoma = Sintoma::create([
            'nome' => $request->get('nome'),
            'helper' => $request->get('helper')
        ]);

        return redirect()->route('home');
    }

    public function edit() {

    }

    public function delete() {

    }
}
