@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <h2>Создание Новой Заявки:</h2>
      <form action="{{route('addtask')}}"  method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="service_id">Выберите Процесс:</label>
          <select class="form-control" id="service_id" name="service_id">
          @foreach ($data[0] as $service)
            <option value="{{$service->id}}">{{$service->name}}</option>
          @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="mebel_id">Выберите Мебель:</label>
          <select class="form-control" id="mebel_id" name="mebel_id">
          @foreach ($data[1] as $mebel)
            <option value="{{$mebel->id}}">{{$mebel->name}}</option>
          @endforeach
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Создать</button>

      </form>
    </div>
  </div>
</div>
@endsection
