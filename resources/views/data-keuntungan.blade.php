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
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>My Data | Data Keuntungan</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- data icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom CSS -->
    <link href="./monster-html/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../myassets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../myassets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../myassets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../myassets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../myassets/dist/css/adminlte.min.css">
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
         .avatar {
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                    <!-- Logo -->
                    <a class="navbar-brand" href="data-keuntungan.html">
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

                   <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" class="avatar me-1">{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

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
                                aria-hidden="true"></i><span class="hide-menu">Profile</span></a></li>

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
                        <h3 class="page-title mb-0 p-0">Data Keuntungan</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Kembali</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">

                        </div>
                    </div> -->
                </div>
            </div>
            <button class="btn btn-outline-lightt ml-3">
                <form action="{{ url('filter') }}" method="GET" class="form-group">
                    {{ csrf_field() }}
                <select class="form-select" name="Tahun" id="bulanTahun" style="width: 100px">
                <?php
                    foreach($tahun as $thn){
                        echo '<option value=' . $thn . '>' . $thn . '</option>';
                    }
                    ?>
                </select>
            </button>

            <div class="container-fluid">
                <!--chartjs-->
                <form>
                    <canvas id="myChart"  width="1000" height="300" class="l-3 mr-3"></canvas>
                    {{-- <script src="{{asset('myassets/js/plugins/chart.min.js')}}"></script> --}}
                    <script>

                    </script>
                </form>
                <!--endchartjs-->

                <!--table-->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                              <table
                                   class="table table-striped table-bordered"
                                    id="example1" data-url="{{route('keuntungan.ajax')}}"
                                    data-page-length='25'>
                                    <div class="col-auto">
                                      <a href="/exportuntungpdf" id="bulanTahun-export-pdf" class="btn btn-outline-danger btn-sm mb-3 mdi mdi-file-pdf">Ekspor PDF</a>
                                      <a href="/exportuntungexcel" id="bulanTahun-export-excel" class="btn btn-outline-success btn-sm mb-3 mdi mdi-file-excel">Ekspor Excel</a>
                                    </div>

                                <thead>
                                    <tr>
                                    <th scope="col">Bulan&tahun</th>
                                    <th scope="col">Hasil Keuntungan</th>
                                </tr>
                                </thead>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer text-center">
        © 2022 Rekapitulasi Data Oleh My Data
    </footer>
    <!-- End footer -->
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./monster-html/js/custom.js"></script>

    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <script src="../myassets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../myassets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../myassets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../myassets/extra-libs/DataTables/datatables.min.js"></script>

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


<!-- Page specific script -->
<script>

    $(function () {
        var today = new Date();
        var year = today.getFullYear();
        $("#bulanTahun-export-pdf").attr("href","/exportuntungpdf/"+year);
        $("#bulanTahun-export-excel").attr("href","/exportuntungexcel/"+year);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#bulanTahun").change(function(){
                var tahun_selected = $(this).val();
                $("#bulanTahun-export-pdf").attr("href","/exportuntungpdf/"+tahun_selected);
                $("#bulanTahun-export-excel").attr("href","/exportuntungexcel/"+tahun_selected);
            })

            let datatables = $('#example1').DataTable({
                responsive: true,
                pageLength: 10,
                searching: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: $("#example1").data('url'),
                    type: "POST",
                    data: function (d) {
                        d.Tahun = $('#bulanTahun').val()
                    },
                },
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }],
                columns: [
                    {data: function(row, type, val, meta) {
                        console.log(row);
                        return row.bulans
                    }},
                    {data: function(row, type, val, meta) {
                        if(row.length < 1){
                            return 0
                        }else{
                            return formatRupiah(row.keuntungan.toString(),'Rp. ' )
                        }
                    }},
                ]
            });

            function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}


            let msk_jan = {{ $msk_jan }};
            let msk_feb = {{ $msk_feb }};
            let msk_mar = {{ $msk_mar }};
            let msk_apr = {{ $msk_apr }};
            let msk_mei = {{ $msk_mei }};
            let msk_jul = {{ $msk_jul }};
            let msk_jun = {{ $msk_jun }};
            let msk_agu = {{ $msk_agu }};
            let msk_sep = {{ $msk_sep }};
            let msk_okt = {{ $msk_okt }};
            let msk_nov = {{ $msk_nov }};
            let msk_des = {{ $msk_des }};

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
                        }]
                    };


                    const config = {
                        type: 'bar',
                        data: data,
                        options: {}
                    };

                    var myLine = new Chart(
                        document.getElementById('myChart'),
                        config
                    );

            const urlStr = "{{url('/keuntungan/ajax-graphic')}}";

            $(document).ready(function(){
                $("#bulanTahun").change(function(e){
                    datatables.draw();
                    e.preventDefault();
                    $.ajax({
                        url: urlStr,
                        type: "get",
                        data: { bulanTahun: $("#bulanTahun").val()},
                        success: function (datas) {
                            console.log(datas);
                            myLine.data.datasets[0].data = [datas.msk_jan, datas.msk_feb, datas.msk_mar, datas.msk_apr, datas.msk_mei, datas.msk_jun, datas.msk_jul, datas.msk_agu, datas.msk_sep, datas.msk_okt, datas.msk_nov, datas.msk_des]
                            myLine.update();
                        },

                        // Error handling
                        error: function (error) {
                            console.log(`Error ${error}`);
                        }
                    });
                });
            });

        });
    </script>

</body>
</html>
