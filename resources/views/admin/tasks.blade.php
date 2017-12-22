@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h2 class="col-8">Очередь заявок</h2>
	</div>
    <div class="row justify-content-center">
  		<div class="col-8">
					<table class="table">
					<thead>
						<tr class="table-active">
							<th scope="col">Номер</th>
							<th scope="col">Процесс</th>
							<th scope="col">Мебель</th>
							<th scope="col">Статус</th>
							<th scope="col">Редактировать</th>
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
							<td><a href="/tasks/{{$task->id}}/edit" class="btn btn-light">Изменить</a></td>	 
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
    </div>
</div>
@endsection
