<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;


// Interface será implementado dentro do EloquentSeriesRepository
interface SeriesRepository
{
    public function add(SeriesFormRequest $request): Series;

}