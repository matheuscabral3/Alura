<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;


// A CLASSE é responsável por lidar com detalhes do banco de dados.

class EloquentSeriesRepository implements SeriesRepository
{

    public function add(SeriesFormRequest $request): Series
    {
        // 1º Modelo - Manual
        // $nomeSerie = $request->input('nome');
        // DB::insert('INSERT INTO series (nome) VALUES (?);', [$nomeSerie]);
        // ====================

        // 2º Modelo - Eloquent
        // $nomeSerie = $request->input('nome');
        // $nomeSerie = $request->nome;
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();
        // ====================

        // 2.1º Modelo - Eloquent -> Utiliza todos os parâmetros da requisição ao mesmo tempo.
        // Disponível por causa da Model -> '$fillable'
        // Serie::create($request->only(['nome']));         // Obter apenas 1 variável da requisição.
        // Serie::create($request->except(['_token']));     // Obter todas as variáveis da requisição, exceto 1.

        // Realizar a validação, antes da Inclusão de uma nova série.
        // $request->validate([
        //     'nome' => ['required', 'min:3']
        // ]);
        // Disponível também em "App\Http\Request\SeriesFormRequest.rules() & SeriesFormRequest.messages() "

        // ===================================
        // Exemplo 1
        // Modelo para gravar um dado na session.
        // $serie = Series::create($request->all());
        // $request->session()->flash("mensagem.sucesso", "Série '$serie->nome' Adicionada com Sucesso.");

        // $seasons = [];
        // for ($i = 1; $i <= $request->seasonsQty; $i++) {
        // Modelo mais longo. Possui a necessidade de informar as chaves...
        // Season::create([
        //     'series_id' => $serie->id
        // ]);

        // Modelo Simplificado.
        // $season = $serie->seasons()->create([ 
        //     'number' => $i,
        // ]);

        // Inserção dos Episódios.
        // for ($j = 0; $j <= $request->episodesPerSeason; $j++) {
        //     # code...
        //     $season->episodes()->create([
        //         'number' => $j,
        //     ]);
        // }
        // }
        // =================

        // Exemplo 2
        // $episodes = [];
        // O foreach serve para pegar os ID's respectivos das Temporadas: T1, T2
        // foreach ($serie->seasons as $season) {
        //     for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
        //         // $season->episodes()->create([
        //         //     'season_id' => $season->id,
        //         //     'number' => $j
        //         // ]);
        //     }
        // }
        // ===================================

        // Exemplo 3 - Utilizando Transaction
        // try {
        //     DB::beginTransaction();
        //     // Execução SQL aqui dentro.
        //     DB::commit();
        // } catch (\Throwable $e) {
        //     DB::rollback();
        // }


        // ===================================
        // Exemplo 4 - Utilizando Transaction
        return DB::transaction(function () use ($request) {
            $serie = Series::create($request->all());

            $seasons = [];
            for ($i = 1; $i <= $request->seasonsQty; $i++) {
                $seasons[] = [
                    'series_id' => $serie->id,
                    'number' => $i
                ];
            }
            Season::insert($seasons);
            // =====
            $episodes = [];
            foreach ($serie->seasons as $season) {
                for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $j
                    ];
                }
            }
            Episode::insert($episodes);

            return $serie;
        });
    }

}