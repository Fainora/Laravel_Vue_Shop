<?php

namespace App\Http\Controllers\API\Color;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Http\Resources\Color\ColorResource;

class IndexController extends Controller
{
    public function __invoke()
    {
        $colors = Color::all();
        return ColorResource::collection($colors);
    }
}
