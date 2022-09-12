<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $product =  Product::find($id);
        if(!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found'
            ])->setStatusCode(404);
        }
        return $product;
    }
}
