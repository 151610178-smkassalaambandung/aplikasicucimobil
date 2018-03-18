@extends('layouts.index')
@section('content')
<div class="container">
<div class=-"row">
<font color ="#0000FF"><center><h1>Data Transaksi</h1></center></font>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Transaksi
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>
	<div class="panel body">
		<form action="{{route('tran.update',$tran->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
			</div>

			
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
				<input type="text" name="t" value="{{$tran->tanggal }}" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">Harga : </label>
				<input type="text" name="e" value="{{$tran->harga }}" class="form-control" required="">
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