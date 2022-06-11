<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;


    protected $table = 'articulos';

    protected $fillable=
    ['titulo',
    'anyo',
    'num_paginas',];

    public function monografias()
    {
        return $this->belongsToMany(Monografia::class);
    }

    /**
     * The roles that belong to the Articulo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function autores()
    {
        return $this->belongsToMany(Autor::class);
    }

}
