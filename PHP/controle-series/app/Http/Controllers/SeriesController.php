<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Serie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {
        // ====================
        // $series = ['Punisher', 'Lost', 'Grey\'s Anatomy'];
        // $series = DB::select('SELECT nome FROM series;');

        // Exibir DEBUG -> var_dump($series);
        // dump and die (executa um var_dump, encerra a conexão e não exibe a View - Utilizado para Debug).
        // Exibir DEBUG -> dd($series);
        // ====================


        // $series = Serie::all();
        // $series = Serie::where('nome', 'Lost')->orderBy('nome')->get();        
        // $series = Serie::where('nome', 'Lost')->orderBy('nome')->take(10)->get();


        $series = Serie::query()->orderBy('nome')->get();
        // dd($series);


        // ====================
        // 1º Modelo para retornar uma View com informações - Documentação Laravel...
        // return view('listar-series', ['series' => $series]);

        // 2º Modelo para retornar uma View com informações - Documentação Laravel...
        // return view('listar-series', compact('series'));

        // 3º Modelo para retornar uma View com informações - Documentação Laravel...
        return view('series.index')->with('series', $series);
        // ====================
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


    public function store(Request $request)
    {
        // 1º Modelo - Manual
        // $nomeSerie = $request->input('txtnome');
        // DB::insert('INSERT INTO series (nome) VALUES (?);', [$nomeSerie]);

        // 2º Modelo - Eloquent
        $nomeSerie = $request->input('txtnome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();


        return redirect('/series');


    }

}
