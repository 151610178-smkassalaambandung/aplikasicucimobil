@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <font color ="#B22222"><center><h1>ANDA BERHASIL LOGIN</h1></center></font>
                   <center> <img alt="gambar koala" src="images.jpg" height="400" width="400"/></center>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
