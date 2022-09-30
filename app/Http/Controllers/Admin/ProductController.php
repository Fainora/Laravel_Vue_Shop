<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Category;
use App\Models\ColorProduct;
use App\Models\ProductTag;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        //$category = Product::find(2)->category;

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();

        return view('admin.products.create', compact('tags', 'colors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if(isset($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        } else {
            $data['preview_image'] = '/images/nophoto.png';
        }

        if(isset($data['tags'])) {
            $tagsIds = $data['tags'];
            unset($data['tags']);
        }

        if(isset($data['colors'])) {
            $colorsIds = $data['colors'];
            unset($data['colors']);
        }

        $product = Product::firstOrCreate($data);

        if(isset($tagsId)) {
            $product->tags()->attach($tagsIds);
        }

        foreach($tagsIds as $tagsId) (
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ])
        );

        foreach($colorsIds as $colorsId) (
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorsId,
            ])
        );

        return redirect()->route('products.index')->with('success','Product has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'tags', 'colors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Product $product)
    {
        // if(isset($product->preview_image)) {
        //     Storage::disk('public')->delete('images', $product->preview_image);
        // }

        $data = $request->validated();

        if(isset($data['preview_image'])) {
            Storage::disk('public')->delete('images', $product->preview_image);
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        } else {
            // $data['preview_image'] = '/images/nophoto.png';
            $data['preview_image'] = $product->preview_image;
        }

        if(isset($data['tags'])) {
            $tagsIds = $data['tags'];
            unset($data['tags']);
        }

        if(isset($data['colors'])) {
            $colorsIds = $data['colors'];
            unset($data['colors']);
        }

        foreach($tagsIds as $tagsId) (
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tagsId,
            ])
        );

        foreach($colorsIds as $colorsId) (
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $colorsId,
            ])
        );
        $product->update($data);

        if(isset($tagsId)) {
            $product->tags()->attach($tagsIds);
        }

        return view('admin.products.show', compact('product'))->with('success','product Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if(isset($product->preview_image)) {
            Storage::disk('public')->delete('images', $product->preview_image);
        }
        $product->tags()->detach();

        return redirect()->route('products.index')->with('success','Product has been deleted successfully');
    }
}
