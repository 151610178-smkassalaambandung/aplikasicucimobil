@extends('layouts.index')
@section('content')
<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
<div class="container">

<div class=-"row">
		<font color ="#0000FF"><center><h1>Data User</h1></center></font>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data User
		<div class="panel-title pull-right"><a href="{{route('user.create')}}"> Tambah Data </a></div></div>
		<body>
		<div class="panel-body"></div>
		<table class="table table-hover table-bordered">
			
				<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
			<tbody>
	@foreach ($user as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td>
						<form action="{{route('user.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					
					</td>


					</tr>
					@endforeach
					</table>
					
</div>
			</tbody>

		</body>

		

		
		</div>
</div>


@endsection
