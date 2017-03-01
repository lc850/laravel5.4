@extends('master')

@section('titulo')
<h2>Consulta de Alumnos</h2>
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
					<a href="{{url('/registrarAlumnos')}}" class="btn btn-success btn-xs">Registrar</a>
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
					<a href="#" class="btn btn-xs btn-primary">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal">
					  <span class="glyphºicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Deseas eliminar el Alumno?</h4>
      </div>
      <div class="modal-body">
        ¡No se podrá recuperar el registro!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>
@stop









