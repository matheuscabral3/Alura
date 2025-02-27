<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{

    // Referencia apenas o ID...
    // public function index(int $id)
    // {
    //     $seasons = Season::query()->where('series_id', $id)->get();
    //     return view('seasons.index')
    //         ->with('episodes')
    //         ->with('seasons', $seasons);
    // }

    // Referencia o objeto inteiro.
    public function index(Series $series)
    {
        // EAGER LOADING - Exibir já com os relacionamentos.
        $seasons = $series->seasons()->with('episodes')->get();

        return view('seasons.index')
            ->with('seasons', $seasons)
            ->with('series', $series);  
    }
}
