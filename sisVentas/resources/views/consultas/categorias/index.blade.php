@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías <a href="categoria/create"><button class="btn btn-success">Reporte</button></a></h3>
		
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Interes</th>
					<th>Mora</th>
					
				</thead>
               @foreach ($categorias as $cat)
				<tr>
					<td>{{ $cat->nombre}}</td>
					<td>{{ $cat->descripcion}}</td>
					<td>{{ $cat->interes}}</td>
					<td>{{ $cat->mora}}</td>
					
						
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection