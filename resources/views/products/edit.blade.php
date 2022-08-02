@extends('layouts.main')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать продукт</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Главная</li>
              </ol>
            </div>
          </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <form action="{{ route('products.update', $product->id) }}" class="w-50" method="POST" enctype="multipart/form-data">
                @csrf {{-- Предотвращение запросов CSRF --}}
                @method('patch')

                <div class="form-group">
                    <input type="text" name="title" value="{{ $product->title }}" class="form-control" placeholder="Наименование">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="Описание">
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea name="content" id="summernote">
                        {{ $product->content }}
                    </textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Цена">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" name="count" value="{{ $product->count }}" class="form-control" placeholder="Количество на складе">
                    @error('count')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <img src="{{ Storage::url($product->preview_image ?? 'images/nophoto.jpg') }}" alt="preview_image" class="w-25">
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                    @error('preview_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="form-group">
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                      <option selected="selected" disabled>Выберите категорию</option>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $product->category_id ? 'selected' : '' }}
                            >{{ $category->title }}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="form-group">
                    <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                {{ is_array($product->tags->pluck('id')->toArray()) && in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                >{{ $tag->title }}</option>
                        @endforeach
                    </select>
                    @error('tags[]')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}"
                                {{ is_array($product->colors->pluck('id')->toArray()) && in_array($color->id, $product->colors->pluck('id')->toArray()) ? 'selected' : '' }}
                                >{{ $color->title }}</option>
                        @endforeach
                    </select>
                    @error('colors[]')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" placeholder="Сохранить">
                </div>
            </form>
          </div>
        </div>
    </section>

@endsection
