@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h2 class="mb-3">Изменение Статуса Заявки:</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-8 offset-2"> 
      <form action="{{route('taskupdate', $task)}}"  method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="input-group mb-3">
            <span class="input-group-addon col-2" id="basic-addon1">Номер Заявки:</span>
            <input type="text" class="form-control col-8"  aria-describedby="basic-addon1" value="#{{$task->id}}" readonly>
          </div>
        </div>

        <div class="row">
          <div class="input-group mb-3">
            <span class="input-group-addon col-2" id="basic-addon1">Процесс:</span>
            <input type="text" class="form-control col-8"  aria-describedby="basic-addon1" value="{{$task->service->name}}" readonly>
          </div>
        </div>

        <div class="row">
          <div class="input-group mb-3">
            <span class="input-group-addon col-2" id="basic-addon1">Статус:</span>
            <input type="text" class="form-control col-8"  aria-describedby="basic-addon1" value="{{$task->status->name}}" readonly>
          </div>
        </div>
  
        <div class="row">
          <div class="input-group mb-3">
            <span class="input-group-addon col-2" id="basic-addon1">Новый Статус:</span>
            <select class="form-control col-8" id="status_id" name="status_id">
              @foreach ($statuses as $status)
                <option value="{{$status->id}}">{{$status->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>

      </form>
    </div>
  </div>
</div>
@endsection
