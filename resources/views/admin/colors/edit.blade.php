@extends('admin.layouts.main')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать цвет</h1>
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
            <form action="{{ route('colors.update', $color->id) }}" method="POST">
                @csrf {{-- Предотвращение запросов CSRF --}}
                @method('patch')
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Наименование" value="{{ $color->title }}">
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="color" name="color_hex" class="form-control form-control-color" value="{{ $color->color_hex }}" title="Выбери свой цвет">
                    @error('color_hex')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
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
