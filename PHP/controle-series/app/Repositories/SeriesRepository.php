<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;


// Interface será implementado dentro do EloquentSeriesRepository
interface SeriesRepository
{
    // Interface:
    // Define os métodos que o repositório deve ter.
    public function add(SeriesFormRequest $request): Series;

}