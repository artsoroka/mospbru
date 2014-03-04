@extends('admin.base')


@section('suppliers_list')
	<table class="table table-bordered table-striped">
		<thead>
			<th>id</th>
			<th>title</th>
			<th>controll</th>
		</thead>
		<tbody>
			@foreach($suppliers as $supplier)
				<tr>
					<td>{{ $supplier->id }}</td>	
					<td>{{ $supplier->description }}</td>	
					<td width="20%">
						<a href="/admin/suppliers/{{ $supplier->id }}/edit" class="btn btn-small btn-success">Редактировать</a>
					 	<a href="/admin/suppliers/{{ $supplier->id }}/delete" class="btn btn-small btn-danger">Удалить</a>
					 
                </td>	
				</tr>
			@endforeach
		</tbody>
	</table>
@stop 

@section('main')
	<h1>List all suppliers: </h1>

	@if( ! empty( $suppliers ) ) 
		@yield('suppliers_list')
	@elseif 
		"seems to be no suppliers yet" 
	@endif

@stop
