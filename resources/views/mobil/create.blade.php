@extends('layouts.index')
@section('content')
<div class="container">
<div class="row">
	<font color ="#0000FF"><center><h1>Mobil</h1></center></font>
	<div class="panel panel-primary">
		<div class="panel-heading"> Mobil
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		
			<form action="{{route('mobil.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">Merek Mobil : </label>
				<input type="text" name="m" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Nama Mobil : </label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Warna Mobil : </label>
				<input type="text" name="w" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Plat Nomer : </label>
				<input type="text" name="d" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Nama Konsumen/Pemilik : </label>
				<select name="id_konsumen" class="form-control">
					@foreach($konsumen as $data)
					<option value="{{$data->id}}">{{$data->nama}}</option>
					@endforeach
				</select>
			</div>

			

			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection