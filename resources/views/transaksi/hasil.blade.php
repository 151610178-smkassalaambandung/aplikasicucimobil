@extends('layouts.index')
@section('content')
<div class="container">

<div class=-"row">
		<div class=-"row">
		<div class="panel panel-primary">
		<div class ="panel-heading">Data transaksi
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
		<form id="searchForm">
			<center>
				<h2>Pencarian Atas Nama : {{$query}} </h2>
			</center>

		</form>
		
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
					<th>Nama Konsumen/Pemilik</th>
					<th>Nama Karyawan</th>
					<th>Merek mobil</th>
					<th>Nama Mobil</th>
					<th>Tanggal Transaksi</th>
					<th>Harga</th>
					<th>Total</th>
					</tr>
				</thead>
					<tbody>
						@foreach($tran as $data)
						<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->kar}}</td>
						<td>{{$data->kon}}</td>
						<td>{{$data->tanggal}}</td>
						<td>{{$data->harga}}</td>
						<td>{{$data->total}}</td>
						<th colspan="2">Action</th>

						<td>
							<a class="btn btn-warning" href="/cucimobil/transaksi/{{$data->id}}/edit">Edit</a>
						</td>

					
						<td>
						<form action="{{route('tran.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</tbody>

		
			</table>
		</div>

		</div>
	</div>
</div>
</div>
@endsection