@extends('layouts.app')

@section('content')
  @if (Route::has('login'))
    @auth
      <div class="container">
        <div class="row">
        <a class="btn btn-primary" href="{{ url('/userboard') }}">В интерфейс пользователя</a>
        <a class="btn btn-primary" href="{{ url('/tasks') }}">Просмотр и изменение Заявок</a>
        <a class="btn btn-primary" href="{{ url('/mebel') }}">Просмотр и изменение Мебели</a>
        </div>
      </div>
    @else
      <div class="container">
        <div class="row">
          <h1>Пожалуйста войдите или зарегистрируйтесь</h1>    
          <a class="btn btn-primary" href="{{ url('/login') }}">Вход</a>
          <a class="btn btn-primary" href="{{ url('/register') }}">Регистрация</a>
        </div>
      </div>
    @endauth
  @endif

@endsection
