@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <h2>Справочник Мебели:</h2>
      <a href="{{route('mebel.create')}}" class="btn btn-primary">Добавить Мебель</a>

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
							<td><a href="/mebel/{{$mebel->id}}/edit" class="btn btn-default">Изменить</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
    </div>
  </div>
</div>
@endsection
