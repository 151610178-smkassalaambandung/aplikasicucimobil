<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Cuci Mobil</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>ambangkurniawan@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+857-2472-1671
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                               
                                    <div class="media-body">
                                        <h4 class="media-heading">CUCI MOBIL</h4>

                                    </div>
                              
                                <hr />
                               <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                        </form>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">

                            <li><a href="{{ url('/home') }}">Dashboard</a></li>
                                @role('admin')
                            <li><a href="{{ route('user.index') }}">DATA USER</a></li>
                            @endrole
                            <li><a href="{{ route('konsumen.index') }}">DATA KOSUMEN</a></li>
                             <li><a href="{{ route('mobil.index') }}"> DATA MOBIL</a></li>
                                 <li><a href="{{ route('tran.index') }}">DATA TRANSAKSI</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
   @yield('content')

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 Aplikasi Pencucian Mobil | By : Ambang Kurniawan</a> <td>Buana Giri Harja (BARAPATI)</td>
                </div>

            </div>
        </div>
    </footer>
  
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="{{asset('/js/jquery-1.11.1.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('/js/bootstrap.js')}}"></script>
</body>
</html>
