<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    // Modelo:
    // View > Controller > Action ...
    // Instalar o DEBUG do laravel:
    // composer require barryvdh/laravel-debugbar --dev

    public function __construct(private SeriesRepository $repository)
    {
    }

    // MÉTODO EQUIVALENTE AO "SELECT" NA BASE...
    public function index(Request $request)
    {
        // ====================
        // $series = ['Punisher', 'Lost', 'Grey\'s Anatomy'];
        // $series = DB::select('SELECT nome FROM series;');

        // dump and die (executa um var_dump, encerra a conexão e não exibe a View - Utilizado para Debug).
        // Exibir DEBUG -> dd($series);
        // ====================

        $series = Series::all();
        // Removido as ordenações por conta do ESCOPO GLOBAL da Model -> boosted
        // $series = Serie::active();
        // $series = Serie::with(['temporadas'])->get();

        // $series = Serie::where('nome', 'Lost')->orderBy('nome')->get();        
        // $series = Serie::where('nome', 'Lost')->orderBy('nome')->take(10)->get();
        // $series = Serie::query()->orderBy('nome')->get();

        // ====================
        // Modelo para gravar um dado na session.
        // session(['mensagem.sucesso' => 'Série Removida com Sucesso.']);

        // 1º Modelo para obter os dados da session.
        // $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        // 2º Modelo para obter os dados da session.
        $mensagemSucesso = session('mensagem.sucesso');

        // Ao utilizar Flash -> $request->session()->flash()
        // Será "esquecido" automaticamente, sem a necessidade do Forget.
        // $request->session()->forget('mensagem.sucesso'); 
        // ====================


        // ====================
        // 1º Modelo para retornar uma View com informações - Documentação Laravel...
        // return view('listar-series', ['series' => $series]);

        // 2º Modelo para retornar uma View com informações - Documentação Laravel...
        // return view('listar-series', compact('series'));

        // 3º Modelo para retornar uma View com informações - Documentação Laravel...
        return view('series.index')
            ->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
        // ====================
    }


    public function create()
    {
        // Passo a passo
        // 1º Criar View (resources/views/series/create.blade.php);

        // ========== 2º Criar a rota (routes/web.php) ==========
        // Route::get('/series/criar', [SeriesController::class, 'create']);

        // 3º Retornar a View desejada.
        return view("series.create");
    }


    // MÉTODO EQUIVALENTE AO "INSERT" NA BASE...
    public function store(SeriesFormRequest $request)
    {

        $serie = $this->repository->add($request);

        // return redirect('/series');
        // return redirect(route('series.index'));
        // return redirect()->route(route('series.index'));
        return to_route("series.index")->with("mensagem.sucesso", "Série '$serie->nome' Adicionada com Sucesso.");

    }


    // MÉTODO EQUIVALENTE AO "DELETE" NA BASE...
    // public function destroy(Request $request)
    // public function destroy(Serie $series, Request $request)
    public function destroy(Series $series)
    {
        // DEBUG - O que está sendo passado como parâmetro.
        // dd($series);

        // $serie = Serie::find($request->series);    // SELECT FROM series WHERE id = $request->series
        //Serie::destroy($request->series);           // DELETE FROM series WHERE id = $request->series
        $series->delete();


        // Utilizado para guardar na sessão a mensagem.
        // $request->session()->put('mensagem.sucesso', 'Série Removida com sucesso!');

        // Utilizado para guardar apenas 1 request. Será "esquecido" automaticamente.
        // $request->session()->flash('mensagem.sucesso', 'Série Removida com sucesso!');
        // $request->session()->flash('mensagem.sucesso', "Série {$series->nome} Removida com sucesso!");


        return to_route('series.index')
            ->with('mensagem.sucesso', "Série {$series->nome} Removida com sucesso!");
    }


    public function edit(Series $series)
    {
        // dd($series->temporadas);                             // Acessar a Propriedade
        // dd($series->temporadas());                           // Acessar o Método/Relacionamento
        // dd($series->temporadas()->get());                    // Filtrar ... Funciona como um ORDER BY.
        // dd($series->temporadas()->whereIn()->get());         // Filtrar ... Funciona como um ORDER BY.

        return view("series.edit")->with("serie", $series);
    }


    // MÉTODO EQUIVALENTE AO "UPDATE" NA BASE...
    // Sem a necessidade de passar parâmetros,
    // pois atribui tudo automatico através do ELOQUENT
    public function update(Series $series, SeriesFormRequest $request)
    {
        // $series->nome = $request->nome;
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com Sucesso.");
    }

}
