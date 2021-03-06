<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{
    use HasFactory;

    protected $table = 'monografias';
    
    protected $fillable =
    [
        'titulo',
        'anyo',
    ];

    /**
     * The articulos the Monografia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articulos()
    {
        return $this->belongsToMany(Articulo::class);
    }
}
