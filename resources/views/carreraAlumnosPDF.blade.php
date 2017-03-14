<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alumnos de la carrera {{$carrera->nombre}}</title>
	<style>
		table {
    		width: 100%;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
		th, td {
			border-bottom: 1px solid #ddd;
		}
		th{
			text: bold;
			background-color: #4CAF50;
    		color: white;
		}
	</style>
</head>
<body>
	<h1>Lista de Alumnos de {{$carrera->nombre}}</h1>
	<hr>
	<table>
		<tr class="fondo">
			<th>ID</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Sexo</th>
			<th>Carrera</th>
			<th>Correo</th>
		</tr>
		@foreach($alumnos as $a)
			<tr>
				<td>{{$a->id}}</td>
				<td>{{$a->nombre}}</td>
				<td>{{$a->edad}}</td>
				<td>{{$a->sexo}}</td>
				<td>{{$carrera->nombre}}</td>
				<td>{{$a->correo}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>