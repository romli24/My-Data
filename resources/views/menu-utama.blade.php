<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Halaman Login</title>

    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">

    <!-- font icons -->
    <link rel="stylesheet" href="../monster-html/vendor/themify-icons/css/themify-icons.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="../monster-html/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../monster-html/vendor/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="../monster-html/css/ollie.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
      div.a {
        text-align: center;
      }
      .warna{
		    color:#FF2800;
	    }
      .dawam {
        color:blue;
      }
      .luthfan {
        position: absolute;
        top: 50%;
        left: 60%;
        width: 68%;
        transform: translate(-50%, -70%);
      }
      .luthfan1 {
        position: absolute;
        top: -5%;
        left: 60%;
        width: 68%;
        transform: translate(-50%, 50%);
      }
      body{
        height: 100vh;
        text-align: center;
        }
        /*Trigger Button*/
        .login-trigger {
        font-weight: bold;
        color: #fff;
        background: linear-gradient(to bottom right, #B05574, #F87E7B);
        padding: 15px 30px;
        border-radius: 30px;
        position: relative;
        top: 50%;
        }

        /*Modal*/
        h4 {
        font-weight: bold;
        color: #fff;
        }
        .close {
        color: #fff;
        transform: scale(1.2)
        }
        .modal-content {
        font-weight: bold;
        background: linear-gradient(to bottom right,#03506a,#F0F8FF);
        }
        .form-control {
        margin: 1em 0;
        }
        .form-control:hover, .form-control:focus {
        box-shadow: none;
        border-color: #fff;
        }
        .username, .password {
        border: none;

        border-radius: 0;
        box-shadow: none;
        border-bottom: 2px solid #eee;
        padding-left: 0;
        font-weight: normal;
        background: transparent;
        }
        .form-control::-webkit-input-placeholder {
        color: #eee;
        }
        .form-control:focus::-webkit-input-placeholder {
        font-weight: bold;
        color: #fff;
        }
        .login {
        padding: 6px 20px;
        border-radius: 20px;
        background: none;
        border: 2px solid #FAB87F;
        color: #FFFFFF;
        font-weight: bold;
        transition: all .5s;
        margin-top: 1em;
        }
        .login:hover {
        background: #a71712;
        color: #fff;
        }
      </style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="myassets/imgs/brand.svg" alt="" class="brand-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Halaman Utama</a>

                            <li class="nav-item">
                                @auth
                                    <a class="nav-link btn btn-outline-primary" id="logout" href="{{ route('logout') }}">Keluar</a>
                                @else
                                    <a class="nav-link btn btn-outline-primary" href="#" data-target="#login" data-toggle="modal">Masuk</a>
                                @endauth
                            </li>

                        <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                        </li>
                            </ul>
                                </div>
                            </div>
                        </nav>


                    <header style="background-image: url(../myassets/images/coding.gif)" id="home" class="header">
                        <div class="overlay"></div>

                        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="container">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="carousel-title"><i>MyData</i><br>Web Rekapitulasi Data</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="carousel-title"><i>MyData</i> <br>Mempermudah Rekapan Data Anda</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="carousel-title"><i>MyData</i><br>Simple Tapi Bermanfaat</h3>
                                        </div>
                                    </div>
                                    <div class="container">
                                </div>
                            </div>
                        </div>

                    </header>

           <!--Trigger-->

        <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
            <div class="modal-body">
                <button data-dismiss="modal" class="close">&times;</button>
                <h4>MASUK</h4>
                <form action="{{ route('postlogin') }}" methode="post">
                {{ csrf_field() }}
                <input type="text" name="email" class="username form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" />
                @error('email')
                <span class="warna">{{$message}}</span>
                @enderror
                <input type="password" name="password" class="password form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="password"/>
                @error('password')
                <span class="warna">{{$message}}</span>
                @enderror
                <input class="btn login" type="submit" value="Masuk" />
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- core  -->
    <script src="../monster-html/vendor/jquery/jquery-3.4.1.js"></script>
    <script src="../monster-html/vendor/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="../monster-html/vendor/bootstrap/bootstrap.affix.js"></script>

    <!-- Owl carousel  -->
    <script src="../monster-html/vendor/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="../monster-html/js/ollie.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
      @if (Session::has('success'))
          toastr.success("{{ Session::get('success') }}")
      @endif
  </script>
  <script>
    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}")
    @endif
</script>
<script>
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
            toastr.error("{{$error}}");
        @endforeach
    @endif
</script>



</body>
</html>
