<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // Criar uma modal, já com o migrate:
    // php artisan make:model NomeModel -m

    protected $fillable = ['number'];
    public $timestamps = false;
    // protected $casts = ['watched' => 'boolean'];

    public function season()
    {
        // Criação do relacionamento.
        // Cada Episódio "PERTENCE" a uma temporada.
        // belongsTo -> PERTENCE a X Model.
        return $this->belongsTo(Season::class);
    }

    // public function scopeWatched(Builder $query)
    // {
    //     $query->where('watched', true);
    // }

}
