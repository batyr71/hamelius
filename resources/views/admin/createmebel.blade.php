@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h2>Добавление Мебели:</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-8">  
      <form action="{{'/mebel'}}"  method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="mebel_name">Наименование:</label>
          <input name="mebel_name" type="text" class="form-control" placeholder="Например: Диван" aria-label="mebel_name" aria-describedby="mebel_name">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>

      </form>
    </div>
  </div>
</div>
@endsection
