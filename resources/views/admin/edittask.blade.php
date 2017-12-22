@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <h2>Изменение Статуса Заявки:</h2>
      
      <form action="{{route('tasks.update', $task)}}"  method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <h3>Номер Заявки</h3>
          <h4>#{{$task->id}}</h4>
        </div>
        
        <div class="form-group">
          <h3>Процесс</h3>
          <h4>{{$task->service->name}}</h4>
        </div>

        <div class="form-group">
          <h3>Статус</h3>
          <h4>{{$task->status->name}}</h4>
        </div>

        <div class="form-group">
          <label for="status_id">Новый Статус</label>
          <select class="form-control" id="status_id" name="status_id">
          @foreach ($statuses as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>
          @endforeach
          </select>
        </div>


        
        <button type="submit" class="btn btn-primary">Подтвердить</button>

      </form>
    </div>
  </div>
</div>
@endsection
