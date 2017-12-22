@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-4 offset-2 mb-2">
      <h2>Справочник Мебели:</h2>
		</div>
    <div class="col-4 offset-2 mb-2">
      <a href="{{'/mebel/create'}}" class="btn btn-primary">Добавить Мебель</a>
		</div>
	</div>
	<div class="row justify-content-center">
	<div class="col-8 ">
      <table class="table">
					<thead>
						<tr>
							<th scope="col">Номер</th>
							<th scope="col">Наименование</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($mebel as $mebel)
						<tr>
							<th scope="row">{{$mebel->id}}</th>
							<td>{{$mebel->name}}</td>
							<td><a href="/mebel/{{$mebel->id}}/edit" class="btn btn-secondary">Изменить</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
    </div>
  </div>
</div>
@endsection
