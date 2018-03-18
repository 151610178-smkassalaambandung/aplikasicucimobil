@extends('layouts.index')
@section('content')
<div class="container">
<div class="row">
		<font color ="#0000FF"><center><h1>Data Konsumen</h1></center></font>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Konsumen
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('konsumen.store')}}" method="post">
			{{csrf_field()}}
			
			<div class="form-group">
				<label class="control-label">Nama Konsumen/Pemilik : </label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Jenis Kelamin : </label>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="b" required="" value="Laki-Laki"> Laki-Laki
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="b" required="" value="Perempuan"> Perempuan
			</div>
			<div class="form-group">
				<label class="control-label">Alamat : </label>
				<textarea type="text" name="c" class="form-control" required=""></textarea>
			</div>
			<div class="form-group">
				<label class="control-label">No Telpon : </label>
				<input type="text" name="d" class="form-control" required="">
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