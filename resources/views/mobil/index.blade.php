@extends('layouts.index')
@section('content')
<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Membuat Pagination di Laravel 5</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
<div class="container">

<div class=-"row">
		<font color ="#0000FF"><center><h1>Data Mobil</h1></center></font>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data mobil
		<div class="panel-title pull-right"><a href="/cucimobil/mobil/create"> Tambah Data </a></div></div>
		{!! Form::open(['url'=>url('mobil'),'method'=>'post','class'=>'form-horizontal','id'=>'searchForm']) !!}
		<fieldset>
			{!! Form::text('id',null,['class'=>'form-control','id'=>'s']) !!}

			{!! Form::submit('Search',['id'=>'submitButton']) !!}
		</fieldset>
		{!! Form::close() !!}
		
		

		
		<body>
		<div class="panel-body"></div>
		<table class="table table-hover table-bordered">
			
				<thead>
			<tr>
				<th>Nama Konsumen/Pemilik</th>
				<th>Merek Mobil</th>
				<th>Nama Mobil</th>
				<th>Warna Mobil</th>
				<th>Plat Nomer</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
			<tbody>
					<?php $no = $mobil->firstItem() - 1 ; ?>
	@foreach ($mobil as $data)
	<?php $no++ ;?>
					<tr>
						<td>{{$data->konsumen->nama}}</td>
						<td>{{$data->mk}}</td>
						<td>{{$data->nk}}</td>
						<td>{{$data->warna}}</td>
						<td>{{$data->plat_nomer}}</td>
											<td>
							<a class="btn btn-warning" href="/cucimobil/mobil/{{$data->id}}/edit">Edit</a></td>
						
						<td>
						<form action="{{route('mobil.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>


					</tr>
					@endforeach
					</table>
					<?php echo str_replace('/?', '?', $mobil->render()); ?>

</div>
			</tbody>

		</body>

		

		
		</div>
</div>


@endsection
