<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>My Data | Sampah Data Supplayer</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">
    <link href="./monster-html/css/font-face.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="./monster-html/css/theme.css" rel="stylesheet" media="all">
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./monster-html/css/style.min.css" rel="stylesheet">
    <link href="./monster-html/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../myassets/extra-libs/multicheck/multicheck.css" />
    <link href="../myassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .warna{
		color:red;
	}
    .avatar {
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
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="data-barang">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="../myassets/images/Data1.png" style="width: 40px;" alt="homepage"
                                class="dark-logo" />
                        </b>
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../myassets/images/mydata1.png" style="width: 150px;" alt="homepage"
                                class="dark-logo" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" class="avatar me-1">{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{route('dashboard')}}" aria-expanded="false"><i class="me-3 far  fas fa-home"
                                aria-hidden="true"></i><span class="hide-menu">Beranda</span></a></li>

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
                        <h3 class="page-title mb-0 p-0">Sampah Data Supplayer</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('supplier')}}">Kembali</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Supplayer</li>
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
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">

                    <div class="card">
                    <div class="card-body">

                        <a href="kembalikan_semua_sampahsup" class="btn btn-info mb-4 btn-sm">Pulihkan Semua Data</a>

                        <a href="hapus_permanen_semua_sampahsup" class="btn btn-warning mb-4 btn-sm">Hapus Permanen Semua Data</a>

                            <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>KODE SUPPLAYER</th>
                                                <th>NAMA SUPPLAYER</th>
                                                <th>NO TELEPON</th>
                                                <th>ALAMAT</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $row->kodesupplayer }}</td>
                                                <td>{{ $row->namasupplayer }}
                                                <td>{{ $row->notelpon }}</td>
                                                <td>{{ $row->alamat }}</td>
                                                <td>
                                                    <a href="/kembalikan_sampahsup/{{ $row->id }}" class="btn btn-success btn-sm">Pulihkan</a>
                                                    <a href="/hapus_permanen_sampahsup/{{ $row->id }}" class="btn btn-danger btn-sm"
                                                        data-id="{{ $row->id }}">Hapus Permanen</a>
                                                </td>
                                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
                <!--endtable-->
                <!-- End PAge Content -->
            </div>
        </div>
    </div>
    <!-- End Container fluid  -->

    <!-- footer -->
    <footer class="footer text-center">
        ?? 2022 Rekapitulasi Data Oleh My Data
    </footer>
    <!-- End footer -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
    <script src="../myassets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../myassets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../myassets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../myassets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../myassets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../myassets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../myassets/extra-libs/DataTables/datatables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>

<script>
    $('.delete').click(function() {
        var dataid = $(this).attr('data-id');

        swal({
                title: "Yakin?",
                text: "Kamu Akan Menghapus Data di Nomor " + dataid + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/hapus_permanen_sampahh/" + dataid + ""
                    swal("Data Berhasil Di Hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data Tidak Jadi Di Hapus");
                }
            });

    })
</script>

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
