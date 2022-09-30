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
    <title>My Data | Beranda</title>

    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">
    <!-- Custom CSS -->
    <link href="./myassets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./monster-html/css/style.min.css" rel="stylesheet">
    <link href="./monster-html/css/font-face.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="./monster-html/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="./monster-html/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./monster-html/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./monster-html/css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <style>
        .avatar {
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        }
        .border{
            border-radius: 2%;
        }
    </style>
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="../myassets/images/Data1.png" style="width: 40px;" alt="homepage" class="dark-logo" />
                        </b>
                        <span class="logo-text">
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="login-reg.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" class="avatar me-1">{{ Auth::user()->name }}
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
                            <h2 class="page-title mb-0 p-0">Beranda</h2>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
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

            <div class="container">
                <div class="row">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div style="background: linear-gradient(to top, #0099ff 0%, #ffffff 100%)" class="card bg-gradient-danger card-img-holder text-white border">
                            <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Total Supplayer <i class="mdi mdi-account-multiple mdi-36px float-right"></i>
                            </h4>
                        <h2 class="mb-5">{{ $suppliercount }}</h2>
                    <h6 class="card-text mdi mdi-menu-right">My Data</h6>
                </div>
                    </div>
                        </div>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div style="background: linear-gradient(to top,#ffffff  0%, #0099ff 100%)" class="card bg-gradient-info card-img-holder text-white border">
                                    <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Total Pemesan<i class="me-3 mdi mdi-cart-plus mdi-36px float-right"></i>
                            </h4>
                        <h2 class="mb-5">{{ $pemesancount }}</h2>
                    <h6 class="card-text mdi mdi-menu-right">My Data</h6>
                </div>
                    </div>
                        </div>
                            <div class="col-md-4 stretch-card grid-margin">
                                <div style="background: linear-gradient(to top, #0099ff 0%, #ffffff 100%)" class="card bg-gradient-success card-img-holder text-white border">
                                    <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Total Produk<i class="mdi mdi-cart-outline mdi-36px float-right"></i>
                            </h4>
                        <h2 class="mb-5">{{ $barangcount }}</h2>
                    <h6 class="card-text mdi mdi-menu-right">My Data</h6>
                </div>
                    </div>
                        </div>
                            </div>
                                </div>
                      <!--chartjs-->
                            <div class="container">
                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                            <div>
                                                <canvas id="myChart"  class="chart-holder ml-3 mr-3" width="1000" height="350"></canvas>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                    <!--endchartjs-->
                    </div>
                </div>
            </div>
            <!-- End Container fluid  -->

            <!-- footer -->
            <footer class="footer text-center">
                © 2022 Rekapitulasi Data by My Data
            </footer>
            <!-- End footer -->
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- All Jquery -->
    <!-- ============================================================== -->
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
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="./myassets/plugins/flot/jquery.flot.js"></script>
    <script src="./myassets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="./monster-html/js/pages/dashboards/dashboard1.js"></script>
    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="./monster-html/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="./monster-html/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="./monster-html/vendor/slick/slick.min.js"></script>
    <script src="./monster-html/vendor/wow/wow.min.js"></script>
    <script src="./monster-html/vendor/animsition/animsition.min.js"></script>
    <script src="./monster-html/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="./monster-html/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="./monster-html/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="./monster-html/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./monster-html/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./monster-html/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="./monster-html/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!--chartjs-->
        <script>
        const labels = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
        ];
        const data = {
        labels: labels,
        datasets: [{
            label: 'Grafik Keuntungan',
            backgroundColor: ['red','#300C17','orange','#3BEE0B','#0A3BE0','#E107F7','#0FBFE2','#62686E','#F96803','#A7F903','#DA558C','#F40000','#F3FF00',],
            borderColor: ['#2B2A76'],
            data: [{{ $msk_jan }}, {{ $msk_feb }}, {{ $msk_mar }}, {{ $msk_apr }}, {{ $msk_mei }}, {{ $msk_jun }}, {{ $msk_jul }}, {{ $msk_agu }}, {{ $msk_sep }}, {{ $msk_okt }}, {{ $msk_nov }}, {{ $msk_des }} ],
        }
        ]
        };


        const config = {
        type: 'bar',
        data: data,
        options: {}
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
        </script>
        <!--endchartjs-->

        <!--swal alert-->
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
</body>

</html>
