@extends('layouts.main')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Создать пользователя</h1>
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
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Имя">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" placeholder="Фамилия">
                    @error('surname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="patronymic " value="{{ old('patronymic') }}" class="form-control" placeholder="Отчество">
                    @error('patronymic')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Пароль">
                    @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Повторите пароль">
                    @error('password_confirmation')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="age" value="{{ old('age') }}" class="form-control" placeholder="Возраст">
                    @error('age')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Адрес">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    Пол
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_f" value='1' {{ old('gender') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_f">
                          Женский
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_m" value='2' {{ old('gender') == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_m">
                          Мужской
                        </label>
                      </div>
                    @error('gender')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" placeholder="Добавить">
                </div>
            </form>
          </div>
        </div>
    </section>

@endsection
