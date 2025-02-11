<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        // 1º Modelo para retornar uma View com informações - Documentação Laravel...
        // return view('listar-series', [
        //     'series' => $series
        // ]);

        // 2º Modelo para retornar uma View com informações - Documentação Laravel...
        // return view('listar-series', compact('series'));

        // 3º Modelo para retornar uma View com informações - Documentação Laravel...
        return view('series.index')->with('series', $series);
    }


    public function create()
    {
        // Passo a passo
        // 1º Criar View (resources/views/series/create.blade.php);

        // ========== 2º Criar a rota (routes/web.php) ==========
        // Route::get('/series/criar', [SeriesController::class, 'create']);

        // 3º Retornar a View desejada.
        return view('series.create');
    }


}
