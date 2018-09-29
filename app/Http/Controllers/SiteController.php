<?php

namespace App\Http\Controllers;

use App\Parte;
use App\Problema;
use App\Sintoma;
use App\SubParte;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function parte($nome) {

        if (Parte::where('nome', $nome)) {
            return view('site.parte.'.$nome);
        }

        return redirect()->route('/');
    }

    public function subparte($sub_parte_id) {
        $array = array();
        $id = array();


        $problemas = Problema::where('sub_parte_id', $sub_parte_id)->get();
        foreach ($problemas as $problema) {
            foreach ($problema->sintomas()->get() as $sintoma) {
                if (!in_array($sintoma->id, $id)) {
                    array_push($array, $sintoma);
                    array_push($id, $sintoma->id);
                }
            }
        }

        return view('site.parte.sintomas', [
            'sintomas' => $array,
            'subparte_id' => $sub_parte_id
        ]);
    }

    public function resultado(Request $request) {

        $problemas_ids = array();
        $sintomas_ids = $request->get('sintomas');
        $array = array();

        foreach ($sintomas_ids as $id) {
            $sintoma = Sintoma::find($id);
            $sintoma->problemas()->get();

            foreach ($sintoma->problemas()->get() as $problema) {
                if (!in_array($problema->id, $problemas_ids)) {
                    array_push($array, $problema);
                    array_push($problemas_ids, $problema->id);
                }
            }
        }

        return view('site.parte.resultado', [
            'problemas' => $array
        ]);
    }
}


