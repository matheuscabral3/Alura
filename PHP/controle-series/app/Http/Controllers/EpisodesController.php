<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodesController
{
    public function index(Season $season)
    {
        return view(
            'episodes.index',
            [
                'episodes' => $season->episodes,
                'mensagemSucesso' => session('mensagem.sucesso')
            ]
        );
    }


    public function update(Request $request, Season $season)
    {
        $watchedEpisodes = $request->episodes;

        // Percorrer o Array de Episódios
        $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
            // Marcar como ASSISTIDO (true), caso o ID seja informado na requisição
            $episode->watched = in_array($episode->id, $watchedEpisodes);
            // $episode->save();
        });

        // Salvar a model em questão.
        // Juntamente com todos os seus relacionamentos.
        $season->push();


        return to_route('episodes.index', $season->id)
            ->with('mensagem.sucesso', 'Episódios marcados como assistidos.');
    }
}