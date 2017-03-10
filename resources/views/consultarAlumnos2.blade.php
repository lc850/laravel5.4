@extends('master')

@section('titulo')
	<h2>Consultar Alumnos</h2>
@stop

@section('contenido')
<div class="col-xs-12">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Carrera</th>
				<th>Correo</th>
				<th>
					<a href="{{url('registrarAlumnos')}}" class="btn btn-success">
						Registrar
					</a>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alumnos as $a)
				<tr>
					<td>{{$a->id}}</td>
					<td>{{$a->nombre}}</td>
					<td>{{$a->edad}}</td>
					<td>{{$a->sexo}}</td>
					<td>{{$a->carrera}}</td>
					<td>{{$a->correo}}</td>
					<td>
						<a href="#" class="btn btn-primary btn-xs">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						<a href="#" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{{$alumnos->links()}}
	</div>
</div>
@stop











