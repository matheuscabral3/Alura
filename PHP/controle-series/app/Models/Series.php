<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{

    // Criar uma modal, já com o migrate (base de dados):
    // php artisan make:model NomeModel -m


    protected $fillable = ['nome'];
    // protected $with = ['temporadas'];
    // protected $with = ['seasons'];

    // ========== Criação do relacionamento. ==========
    // Cada Serie "POSSUI" X Temporadas.
    // hasMany -> POSSUI a X Model.
    // PK - Primary Key
    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }


    // Escopo GLOBAL -> Utilizado por STATIC
    // Será executado sempre que a index for 'chamada'.
    // Este modelo é apenas para Ordenar as consultas.
    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            // $queryBuilder->orderBy('nome', 'desc');
            $queryBuilder->orderBy('nome', 'asc');
        });
    }


    // Escopo Local
    // public function scopeActive(Builder $queryBuilder)
    // {
    //     return $queryBuilder->where('active', true);
    // }
}
