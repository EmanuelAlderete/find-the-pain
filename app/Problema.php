<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    public function sintomas() {
        return $this->belongsToMany(Sintoma::class, 'problema_sintoma');
    }

    public function subparte() {
        return $this->belongsTo(SubParte::class, 'subparte_id');
    }

    protected $fillable = [
        'nome',
        'helper',
        'image',
        'subparte_id'
    ];
}
