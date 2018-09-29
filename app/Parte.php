<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
    public function subpartes() {
        return $this->hasMany(SubParte::class);
    }

    protected $fillable = [
        'nome',
        'helper',
        'image'
    ];
}
