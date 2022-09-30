<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>My Data | Profil</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">
    <!-- Custom CSS -->
    <link href="./monster-html/css/style.min.css" rel="stylesheet">
    <link rel="shortcut icon" href=".../myassets/images/fav.jpg">
    <link rel="stylesheet" href=".../myassets/css/bootstrap.min.css">
    <link rel="stylesheet" href=".../myassets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href=".../myassets/css/style.css" />
    <link href="../myassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    .warna{
		color:red;
    }
        .avatar {
        vertical-align: middle;
        width: 200px;
        height: 200px;
        border-radius: 200%;
        }
        .avatarform {
        vertical-align: middle;
        width: 100px;
        height: 100px;
        border-radius: 100%;
        }
        .avatar2 {
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        }

</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <!-- Logo -->
                    <a class="navbar-brand" href="profile-user">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../myassets/images/Data1.png" style="width: 40px;" alt="homepage" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../myassets/images/mydata1.png" style="width: 150px;" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                    <!-- End Logo -->

                    <!-- toggle and nav items -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- toggle and nav items -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                            </form>
                        </li>
                    </ul>

                    <!-- Right side toggle and nav items -->
                    <ul class="navbar-nav">

                            <!-- User profile and search -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="login-reg.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" class="avatar2 me-1">{{ Auth::user()->name }}
                                </a>
                            </li>
                        </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('dashboard')}}" aria-expanded="false"><i class="me-3 far  fas fa-home"
                                aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('profil')}}" aria-expanded="false"><i class="me-3 fa fas fa fa-user"
                                aria-hidden="true"></i><span class="hide-menu">Profil</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('kategori')}}" aria-expanded="false"><i class="me-3 mdi mdi-diamond"
                                aria-hidden="true"></i><span class="hide-menu">Kategori</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="data-supplier" aria-expanded="false"><i class="me-3 mdi mdi-account-multiple"
                            aria-hidden="true"></i><span class="hide-menu">Data Supplayer</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('barang')}}" aria-expanded="false"><i class="me-3 mdi mdi-cart-outline"
                                aria-hidden="true"></i><span class="hide-menu">Data Produk</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('pemesan')}}" aria-expanded="false"><i class="me-3 mdi mdi-cart-plus"
                                aria-hidden="true"></i><span class="hide-menu">Data Pemesan</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('datarekap')}}" aria-expanded="false"><i class="me-3 mdi mdi-chart-line"
                                aria-hidden="true"></i><span class="hide-menu">Data Rekap Bulanan</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('keuntungan')}}" aria-expanded="false"><i class="me-3 mdi mdi-chart-bar"
                                aria-hidden="true"></i><span class="hide-menu">Data Keuntungan</span></a></li>

                                <hr>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" data-id="{{$user->id}}"
                        href="#" aria-expanded="false"><i class="me-3 mdi mdi-logout-variant logout"
                            aria-hidden="true"></i><span class="hide-menu">Keluar</span></a></li>

                         </ul>
                    </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Profil</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Kembali</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <div class="container">
                <div class="main-body">

                      <div class="row gutters-sm">
                        <div class="col-md-12 col-mp-10 mb-3 ml-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" alt="your photo" class="avatar" width="200">
                                <div class="mt-3">
                                  <h4>{{ Auth::user()->name }}</h4>
                                </div>
                              </div>

                                <center><a href="/profile-user" type="button" class="btn btn-outline-danger btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#modelpopup">
                                      Edit</a></center>

                              <hr>
                              <div class="row">
                                <div class="col-sm-12">


                                <!--form edit-->
                                  <!-- Modal -->

                                    <div class="modal fade" id="modelpopup" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Edit Foto Profil</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                  <div class="modal-body">

                                    <form action="/updateprofil" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <strong>Foto Profil</strong>
                                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                                        @error('foto')
                                            <div class="warna">{{ $message }}</div>
                                        @enderror
                                            <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" alt="your photo" class="avatarform" width="150">
                                        </div>
                                      </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                        class="btn btn-outline-secondary btn-sm"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit"
                                        class="btn btn-outline-success btn-sm">Simpan</button>
                                    </form>

                                </div>
                              </div>
                            </div>
                                </div>
                         <!--end form edit-->
                                </div>
                                    </div>

                                        <!-- Modal -->
                                <h5 class="page-title mb-0 p-0 mb-2">Ganti Password</h5>
                                    {{-- <div class="card">
                                        <div class="card-body"> --}}

                                    <div class="row">
                                        <div class="col-sm-12">
                                         <form methode="post" action="{{ URL::to('update-password') }}">
                                          @csrf

                                            <div class="form-group mb-3 mt-3">
                                                <strong>Password Lama</strong>
                                                <input type="password" name="old_password" class="form-control  @error('old_password') is-invalid @enderror">
                                            @error('old_password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>

                                            <div class="form-group mb-3">
                                                <strong>Password Baru</strong>
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                            <div class="form-group mb-3">
                                                <strong>Konfirmasi Password</strong>
                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div>
                                    <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                                    </div>
                                        </form>
                                    </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!--end form edit-->
                            </div>
                                  </div>
                                        </div>


                        <footer class="footer text-center">
                          © 2022 Rekapitulasi Data Oleh My Data
                      </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

              <script src="../myassets/plugins/jquery/dist/jquery.min.js"></script>
              <!-- Bootstrap tether Core JavaScript -->
              <script src="../myassets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
              <script src="./monster-html/js/app-style-switcher.js"></script>
              <!--Wave Effects -->
              <script src="./monster-html/js/waves.js"></script>
              <!--Menu sidebar -->
              <script src="./monster-html/js/sidebarmenu.js"></script>
              <!--Custom JavaScript -->
              <script src="./monster-html/js/custom.js"></script>
              <script src="./monster-html/js/profile-user.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

            <script>
              $('.logout').click(function() {

            var logoutid = $(this).attr('data-id');

            swal({
                    title: "Apakah Anda Yakin?",
                    text: "Kamu Akan Keluar Dari Halaman Ini "  + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/logout" + ""
                        swal("Berhasil Keluar", {
                            icon: "success",
                        });
                    } else {
                        swal("Tidak Jadi Keluar?!");
                    }
                });

        })
        </script>


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

</body>
</html>
