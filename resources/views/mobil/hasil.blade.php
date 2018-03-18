@extends('layouts.index')
@section('content')
<div class="container">

<div class=-"row">
		<div class="panel panel-primary">
		<div class ="panel-heading">Data Mobil
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
		<form id="searchForm">
			<center>
				<h2>Pencarian Atas Nama : {{$query}}</h2>
			</center>

		</form>
		
		<div class="panel-body"></div>
		<table class="table">
			
				<thead>
			<tr>
				<th>Nama Konsumen/Pemilik</th>
				<th>Merek Mobil</th>
				<th>Nama mobil</th>
				<th>Warna Mobil</th>
				<th>Jumlah</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
			<body>
					@foreach($mobil as $data)
					<tr>
						<td>{{$data->nama}}</td>
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
			</body>

		

		
		</div>
</div>


@endsection