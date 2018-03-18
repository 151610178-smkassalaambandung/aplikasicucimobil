@extends('layouts.index')
@section('content')
<div class="container">
<div class=-"row">
		<font color ="#0000FF"><marquee><h1>Data Karyawan</h1></marquee></font>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('karyawan.update',$karya->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
			
			<div class="form-group">	
				<label class="control-label">Nama : </label>
				<input type="text" name="a" value="{{$karya->nama }}" class="form-control" required="">
			</div>

			<div class="form-group">	
				<label class="control-label">E-mail : </label>
				<input type="text" name="b" value="{{$karya->status }}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Jenis Kelamin : </label>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="c" value="{{$karya->email }}" required="" value="Laki-Laki">Laki-Laki
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="c" value="{{$karya->email }}" required="" value="Perempuan">Perempuan
			</div>
			<div class="form-group">
				<label class="control-label">No Telpon : </label>
				<input type="text" name="d" value="{{$karya->no_hp }}"class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat : </label>
				<textarea type="text" name="e" value="{{$karya->alamat }}"class="form-control" required=""></textarea>
			</div>
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
	</div>
</div>
</div>
@endsection