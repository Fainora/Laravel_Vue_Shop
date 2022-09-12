@extends('admin.layouts.main')

@section('title') {{'Show ' . $category->title}} @endsection

@section('content')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Категория</h1>
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

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th width="200px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>
                                            <form action="{{ route('categories.destroy',$category->id) }}" method="Post">
                                                <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}"><i class="far fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
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
