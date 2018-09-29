<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sintoma extends Model
{
    public function problemas() {
        return $this->belongsToMany(Problema::class, 'problema_sintoma');
    }

    protected $fillable = [
        'nome',
        'helper',
        'image'
    ];
}
