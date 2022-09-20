<?php

namespace App\Http\Controllers\API\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\Category\CategoryResource;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }
}
