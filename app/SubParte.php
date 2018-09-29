<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubParte extends Model
{
    public function parte() {
        return $this->belongsTo(Parte::class, 'parte_id');
    }

    public function problemas() {
        return $this->hasMany(Problema::class);
    }

    protected $fillable = [
        'nome',
        'helper',
        'image',
        'parte_id'
    ];
}
