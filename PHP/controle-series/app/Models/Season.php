<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    // Criar uma modal, já com o migrate:
    // php artisan make:model NomeModel -m

    // Criação do relacionamento dentro da MODEL.

    protected $fillable = ['number'];


    // Cada 'Temporada' -> "PERTENCE" a uma 'Serie'.
    // belongsTo -> PERTENCE a X Model.
    // PK - Primary Key
    public function series()
    {
        return $this->belongsTo(Serie::class);
    }


    // Cada Temporada "POSSUI" X episódios.
    // hasMany -> POSSUI a X Model.
    // FK - Foreign Key
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function numberOfWatchedEpisodes(): int
    {
        return $this->episodes->filter(fn($episode) => $episode->watched)->count();
    }
}
