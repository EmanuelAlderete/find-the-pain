<?php

namespace App\Http\Controllers;

use App\Problema;
use App\SubParte;
use Illuminate\Http\Request;

class ProblemasController extends Controller
{
    public function show() {
        $problemas = Problema::all();

        return view('adm.problema', [
            'problemas' => $problemas
        ]);
    }

    public function store(Request $request) {
        $problema = Problema::create([
            'nome' => $request->get('nome'),
            'helper' => $request->get('helper'),
            'sub_parte_id' => $request->get('subparte')
        ]);

        $problema->sintomas()->attach($request->get('sintomas'));
        $problema->save();

        return redirect()->route('home');
    }

    public function edit() {

    }

    public function delete() {

    }
}
