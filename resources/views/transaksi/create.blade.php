@extends('layouts.index')
@section('content')
<div class="container">
<div class="row">
	<font color ="#0000FF"><center><h1>Transaksi</h1></center></font>
	<div class="panel panel-primary">
		<div class="panel-heading"> Transaksi
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		
			<form action="{{route('tran.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			
			<div class="form-group">
				<label class="control-label">Merk Mobil : </label>
				<select name="id_mobil" class="form-control">
					@foreach($mobil as $data)
					<option value="{{$data->id}}">{{$data->mk}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Tanggal Transaksi : </label>
				<input type="text" name="t" class="form-control" required="">
			</div>
			

			<div class="form-group">
				<label class="control-label">Harga : </label>
				<input type="number" name="e" class="form-control" required="">
			</div>

			<div><button type="submit" class="btn btn-success">simpan</button>
			<button type="reset" class="btn btn-danger">reset</button></div>
			</form>
		</div>
		</div>
		</div>
		@endsection