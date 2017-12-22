@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <h2>Добавление Мебели:</h2>

      <form action="{{route('mebel.store')}}"  method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="mebel_name">Название</label>
          <input name="mebel_name" type="text" class="form-control" placeholder="Например: Диван" aria-label="mebel_name" aria-describedby="mebel_name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
  </div>
</div>
@endsection
