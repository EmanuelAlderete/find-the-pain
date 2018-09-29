<?php

namespace App\Http\Controllers;

use App\Parte;
use Illuminate\Http\Request;

class PartesController extends Controller
{
    public function show() {

        $partes = Parte::all();

        return view('adm.partes', [
            'partes' => $partes
        ]);

    }

    public function store(Request $request) {
        $parte = Parte::create([
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
