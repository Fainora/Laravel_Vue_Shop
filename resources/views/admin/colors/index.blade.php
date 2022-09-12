@extends('admin.layouts.main')

@section('title') {{'Colors'}} @endsection

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Цвета</h1>
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
                    <div class="card-header">
                        <a href="{{ route('colors.create') }}" class="btn btn-primary">Добавить</a>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Номер цвета</th>
                                    <th>Цвет</th>
                                    <th width="200px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($colors as $color)
                                    <tr>
                                        <td>{{ $color->id }}</td>
                                        <td>{{ $color->title }}</td>
                                        <td>{{ $color->color_hex }}</td>
                                        <td><div style="width: 16px; height: 16px; background: {{ $color->color_hex }}"></div></td>
                                        <td>
                                            <form action="{{ route('colors.destroy',$color->id) }}" method="Post">
                                                <a class="btn btn-primary" href="{{ route('colors.edit',$color->id) }}"><i class="far fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
