@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h2>Редактирование Мебели:</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-8 offset-2">    
      <form action="{{route('mebelupdate', $mebel)}}"  method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="input-group mb-3">
            <span class="input-group-addon col-2" id="basic-addon1">Номер:</span>
            <input type="text" class="form-control col-8"  aria-describedby="basic-addon1" value="#{{$mebel->id}}" readonly>
          </div>
        </div>
        
        <div class="row">
          <div class="input-group  mb-3">
            <span  class="input-group-addon col-2" id="basic-addon1">Наименование:</span>
            <input  type="text" class="form-control col-8" aria-describedby="basic-addon1" value="{{$mebel->name}}" readonly>
          </div>
        </div>
         
        <div class="row">
          <div class="input-group mb-3">
            <span class="input-group-addon col-2" id="basic-addon1">Новое Название:</span>
            <input name="mebel_name" type="text" class="form-control col-8" value="{{$mebel->name}}" aria-label="mebel_name" aria-describedby="mebel_name">
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Сохранить</button>

      </form>
    </div>
  </div>
</div>
@endsection
