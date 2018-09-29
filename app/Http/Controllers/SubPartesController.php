<?php

namespace App\Http\Controllers;

use App\Parte;
use App\SubParte;
use Illuminate\Http\Request;

class SubPartesController extends Controller
{
    public function show() {
        $subpartes = SubParte::all();

        return view('adm.subpartes', [
            'subpartes' => $subpartes
        ]);
    }

    public function store(Request $request) {
        $subparte = SubParte::create([
            'nome' => $request->get('nome'),
            'helper' => $request->get('helper'),
            'parte_id' => $request->get('parte')
        ]);

        return redirect()->route('home');

    }

    public function edit() {

    }

    public function delete() {

    }
}
