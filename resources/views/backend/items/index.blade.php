@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	
	<a href="{{route('items.create')}}" class="btn btn-warning float-right">ADD item</a>
	<table class="table tavle-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>codeno</th>
				<th>name</th>
				<th>Price</th>
				<th>actions</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>00001
					<a href="{{route('items.show',1)}}">
					<span class="badge badge-primary badge-pill">detail</span></td></a>
				<td>mgmg</td>
				<td>1233</td>
				<td>
					
					<a href="{{route('items.edit',1)}}" class="btn btn-primary">edit</a>
					<a href="" class="btn btn-primary">delete</a>

				</td>
				<td></td>

			</tr>
			

		</tbody>
	</table>
</div>
@endsection