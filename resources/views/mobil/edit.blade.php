@extends('layouts.index')
@section('content')
<div class="container">
<div class=-"row">
<font color ="#0000FF"><center><h1>Data Mobil</h1></center></font>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Mobil
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('mobil.update',$mobil->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			
			<div class="form-group">
				<label class="control-label">Merek Mobil : </label>
				<input type="text" name="m" value="{{$mobil->mk}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Nama Mobil : </label>
				<input type="text" name="a" value="{{$mobil->nk}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Warna Mobil : </label>
				<input type="text" name="w" value="{{$mobil->warna}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Plat Nomer : </label>
				<input type="text" name="plat" value="{{$mobil->plat_nomer}}" class="form-control" required="">
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