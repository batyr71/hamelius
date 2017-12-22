@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="row">
    <div class="col-4 offset-2 mb-2">
      <h2>Мои заявки</h2>
    </div>
    <div class="col-4 offset-2">
      <a href="{{ route('createtask') }}" class="btn btn-primary">Создать заявку</a>
    </div>
  </div>
  <div class="row justify-content-center">
  <div class="col-8">
  <table class="table table-bordered ">
    <thead></thead>
      <tr class="table-active">
        <th scope="col">Номер</th>
        <th scope="col">Процесс</th>
        <th scope="col">Мебель</th>
        <th scope="col">Статус</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
        @if ($task->status->id === 1)
        <tr class="table-danger">
        @elseif ($task->status->id === 2)
        <tr class="table-warning">
        @else
        <tr class="table-info">
        @endif
          <th scope="row">{{$task->id}}</th>
          <td>{{$task->mebel->name}}</td>
          <td>{{$task->service->name}}</td>
          <td>{{$task->status->name}}</td>	 
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
</div>
@endsection
             
 
