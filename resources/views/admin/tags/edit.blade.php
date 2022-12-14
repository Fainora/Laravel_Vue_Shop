@extends('admin.layouts.main')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать категории</h1>
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
            <form action="{{ route('tags.update', $tag->id) }}" method="POST">
                @csrf {{-- Предотвращение запросов CSRF --}}
                @method('patch')
                <div class="form-group">
                    <input type="text" name="title" value="{{ $tag->title }}" class="form-control" placeholder="Наименование">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" placeholder="Сохранить">
                </div>
            </form>
          </div>
        </div>
    </section>

@endsection
