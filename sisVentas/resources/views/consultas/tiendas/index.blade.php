@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Tiendas <a href="tienda/create"><button class="btn btn-success">Reportes</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Letra Electrodomesticos</th>
					<th>Letra Oro</th>
					
				</thead>
               @foreach ($tienda as $cat)
				<tr>
					<td>{{ $cat->idtienda}}</td>
					<td>{{ $cat->nombre}}</td>
					<td>{{ $cat->letrae}}</td>
					<td>{{ $cat->letrao}}</td>
					
				</tr>
				
				@endforeach
			</table>
		</div>
		{{$tienda->render()}}
	</div>
</div>

@endsection