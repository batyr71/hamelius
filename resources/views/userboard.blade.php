@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
        <div class="col-md">
          <h2>Мои заявки</h2>
        </div>
			  <div class="col-md">
          <a href="{{ route('createtask') }}" class="btn btn-primary">Создать новую заявку</a>
        </div> 
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Номер</th>
            <th scope="col">Процесс</th>
            <th scope="col">Мебель</th>
            <th scope="col">Статус</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
            @if ($task->status->id === 1)
              <tr class="bg-danger">
            @elseif ($task->status->id === 2)
              <tr class="bg-info">
            @else
              <tr class="bg-success">
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
             
 
