@extends('admin.layouts.main')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Продукт</h1>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="mr-3">
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Редактировать</a>
                        </div>
                            <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $product->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <td>Контент</td>
                                    <td>{!! $product->content !!}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <td>Кол-во на складе</td>
                                    <td>{{ $product->count }}</td>
                                </tr>
                                <tr>
                                    <td>Изображение</td>
                                    <td><img src="{{ Storage::url($product->preview_image ?? 'images/nophoto.jpg') }}" style='width: 100px'></td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $product->category_id }}</td>
                                </tr>
                                <tr>
                                    <td>Теги</td>
                                    <td>{{ $product->category_id }}</td>
                                </tr>
                                <tr>
                                    <td>Опубликован?</td>
                                    <td>{{ $product->is_published }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
