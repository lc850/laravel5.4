<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Alumnos</title>
	<style>
		.fondo{
			background-color: blue;
		}
	</style>
</head>
<body>
	<h1>Lista de Alumnos</h1>
	<hr>
	<table>
		<tr class="fondo">
			<td>ID</td>
			<td>Nombre</td>
			<td>Edad</td>
			<td>Sexo</td>
			<td>Carrera</td>
			<td>Correo</td>
		</tr>
		@foreach($alumnos as $a)
			<tr>
				<td>{{$a->id}}</td>
				<td>{{$a->nombre}}</td>
				<td>{{$a->edad}}</td>
				<td>{{$a->sexo}}</td>
				<td>{{$a->carrera}}</td>
				<td>{{$a->correo}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>