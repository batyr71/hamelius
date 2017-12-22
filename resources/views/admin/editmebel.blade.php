@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <h2>Редактирование Мебели:</h2>
      
      <form action="{{route('mebel.update', $mebel)}}"  method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <h3>Номер</h3>
          <h4>#{{$mebel->id}}</h4>
        </div>
        
        <div class="form-group">
          <h3>Название</h3>
          <h4>{{$mebel->name}}</h4>
        </div>

        <div class="form-group">
         <label for="mebel_name"><h3>Новое Название</h3></label>
          <input name="mebel_name" type="text" class="form-control" value="{{$mebel->name}}" aria-label="mebel_name" aria-describedby="mebel_name">
        </div>


        
        <button type="submit" class="btn btn-primary">Подтвердить</button>

      </form>
    </div>
  </div>
</div>
@endsection
