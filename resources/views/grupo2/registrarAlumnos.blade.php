@extends('master')

@section('titulo')
	<h2>Resgistro de Alumno</h2>
@stop

@section('contenido')
	<div class="col-xs-12">
		<form action="#">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre" required>
			</div>
			<div class="form-group">
				<label for="edad">Edad:</label>
				<input name="edad" type="number" class="form-control" placeholder="Teclea la edad" required>
			</div>
			<div class="form-group">
				<label for="sexo">Sexo:</label>
				<select name="sexo" class="form-control" required>
					<option value="" selected>Selecciona Sexo</option>
					<option value="0">Femenino</option>
					<option value="1">Masculino</option>
				</select>
			</div>
			<div class="form-group">
			<label for="carrera">Carrera:</label>
				<select name="carrera" class="form-control" required>
					<option value="" selected>Selecciona Carrera</option>
					<option value="Ing. Sistemas">Ing. Sistemas</option>
					<option value="Ing. Industrial">Ing. Industrial</option>
					<option value="Ing. Electrónica">Ing. Electrónica</option>
				</select>
			</div>
			<div class="form-group">
				<label for="correo">Correo:</label>
				<input name="correo" type="email" class="form-control" placeholder="Teclea correo" required>
			</div>
			<button type="submit" class="btn btn-primary">Registrar</button>
			<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
		</form>
	</div>	
@stop









