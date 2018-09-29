<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    public function sintomas() {
        return $this->belongsToMany(Sintoma::class, 'problema_sintoma');
    }

    public function subparte() {
        return $this->belongsTo(SubParte::class, 'sub_parte_id');
    }

    protected $fillable = [
        'nome',
        'helper',
        'image',
        'sub_parte_id'
    ];

    public function sintomasToString($problema_id) {
        $sintomas = Problema::find($problema_id)->sintomas()->get();
        $string = [];

        foreach ($sintomas as $sintoma) {
            array_push($string, $sintoma->nome);
        }

        $string = implode(', ', $string);

        return $string;
    }
}
