@extends('master')

@section('titulo')
	<h2>Editar Alumno</h2>
	<hr>
@stop

@section('contenido')
<div class="col-xs-12">
	<form action="{{url('actualizarAlumno')}}/{{$alumno->id}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input name="nombre" type="text" placeholder="Teclea nombre" class="form-control" value="{{$alumno->nombre}}" required>
		</div>
		<div class="form-group">
			<label for="edad">Edad:</label>
			<input name="edad" type="number" placeholder="Teclea Edad" class="form-control" value="{{$alumno->edad}}" required>
		</div>
		<div class="form-group">
			<label for="sexo">Sexo:</label>
			<select name="sexo" class="form-control" required>
				<option value="">Selecciona sexo</option>
				@if($alumno->sexo==0)
				<option value="0" selected>Femenino</option>
				<option value="1">Masculino</option>
				@else
				<option value="0">Femenino</option>
				<option value="1" selected>Masculino</option>
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="carrera">Carrera:</label>
			<select name="carrera" class="form-control" required>
				<option value="{{$alumno->carrera}}" selected>{{$alumno->carrera}}</option>
				<option value="Ing. en Sistemas Computacionales">Ing. en Sistemas Computacionales</option>
				<option value="Ing. Industrial">Ing. Industrial</option>
				<option value="Ing. Electrónica">Ing. Electrónica</option>
				<option value="Ing. Bioquímica">Ing. Bioquímica</option>
			</select>
		</div>
		<div class="form-group">
			<label for="correo">Correo:</label>
			<input name="correo" type="email" placeholder="Teclea e-mail" class="form-control" value="{{$alumno->correo}}" required>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/consultarAlumnos')}}" class="btn btn-danger">Cancelar</a>
	</form>
</div>
@stop




