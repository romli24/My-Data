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
    <title>My Data | Detail Pesanan</title>
    <link href="{{asset('monster-html/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('monster-html/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('monster-html/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('monster-html/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{asset('monster-html/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="../myassets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <!-- Vendor CSS-->
    <link href="{{asset('monster-html/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('monster-html/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('monster-html/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('monster-html/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">
    <!-- Custom CSS -->
    <link href="{{asset('monster-html/css/style.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('monster-html/vendor/toastr/toaster.css')}}" rel="stylesheet"> --}}
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
                    <a class="navbar-brand" href="data-pemesan.html">
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('fotoprofil/' .Auth::user()->foto ) }}" class="avatar me-1">{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
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
                        href="{{route('supplier')}}" aria-expanded="false"><i class="me-3 mdi mdi-account-multiple"
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
                        <h3 class="page-title mb-0 p-0">Detail Pesanan</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('pemesan')}}">Kembali</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pemesan</li>
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

                    <!--form tambah-->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered border">
                                    <a href="/data-pemesan" class="btn btn-outline-success btn-sm mb-3 mr-1" data-bs-toggle="modal"
                    data-bs-target="#modelpopup">
                    Tambah</a>

                    <a href="/trash/{{$kode}}" class="btn btn-outline-info btn-sm mb-3">Tong Sampah</a>


                    <!-- Modal -->

                    <div class="modal fade" id="modelpopup" tabindex="-1"
                    aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Tambah Detail Pesanan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/insertpesanan/{{$kode}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <strong for="product">Nama Produk</strong>
                                            <select class="form-control select2-search--dropdown @error('nama_barang_id') is-invalid @enderror" name="nama_barang_id" id="product">
                                                <option value="">-Pilih Produk-</option>
                                                        @foreach ($barang as $row)
                                                <option data-harga="{{$row->harga_jual}}" value="{{ $row->id }}">{{ $row->nama_barang }}</option>
                                                        @endforeach
                                            </select>
                                        @error('nama_barang_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <strong>Harga</strong>
                                        <input type="text" id="harga" name="harga_jual_id"
                                            class="form-control @error('harga_jual_id') is-invalid @enderror" readonly>
                                        @error('harga_jual_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <strong>Jumlah</strong>
                                        <input type="number" autocomplete="off" class="form-control @error('harga_jual_id') is-invalid @enderror"
                                            name="jumlah" id="jumlah">
                                    @error('jumlah')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <strong>Total</strong>
                                        <input type="text" autocomplete="off" class="form-control @error('harga_jual_id') is-invalid @enderror"
                                            name="total" id="total" readonly>
                                    @error('total')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!--end form tambah-->

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $no = 1;
                                            $total = 0;
                                        @endphp
                                        @foreach ($data as $row)
                                            @php $total += $row['total']; @endphp
                                            <tr class="tr-shadow">
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $row->namabarang->nama_barang}}</td>
                                                <td>Rp {{number_format ($row['harga_jual_id'],2,',','.') }}</td>
                                                <td>{{ $row->jumlah}}</td>
                                                <td>Rp {{number_format ($row['total'],2,',','.') }}</td>

                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit" data-bs-toggle="modal" data-bs-target="#modelpopup{{$row->id}}"></i>
                                                        </button>

                                                        <!-- END DATA TABLE -->
                                                    <div class="modal fade" id="modelpopup{{ $row->id }}" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="ModalLabel1">Edit Detail Pesanan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form action="/updatepesanan/{{$row->id}}/{{$kode}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf

                                                                    <div class="form-group">
                                                                        <strong>Nama Barang</strong>
                                                                        <select class="form-control select2" name="nama_barang_id" id="product-edit{{ $row->id }}">
                                                                        <option value={{ $row->namabarang->id }}>{{ $row->namabarang->nama_barang }}</option>
                                                                        @foreach ($barang as $n)
                                                                        <option data-harga="{{$n->harga_jual}}" value="{{ $n->id }}">{{ $n->nama_barang }}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong>Harga</strong>
                                                                        <input type="text" id="harga-edit{{ $row->id }}" name="harga_jual_id" class="form-control"
                                                                        value="{{$row->harga_jual_id}}" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong>Jumlah</strong>
                                                                        <input type="number" class="form-control" name="jumlah" autocomplete="on"
                                                                        id="jumlah-edit{{ $row->id }}" value="{{ $row->jumlah }}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <strong>Total</strong>
                                                                        <input type="text" class="form-control" autocomplete="on" name="total" id="total-edit{{ $row->id }}"
                                                                        value="{{ $row->total }}" readonly>
                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary btn-sm"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </form>

                                                    <a href="#" class="item delete"
                                                    kode="{{$kode}}"
                                                    pesanan-id="{{ $row->id }}"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Hapus">
                                                    <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                        </div>
                                                    </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                        <td colspan="4">Total Harga Keseluruhan</td>
                                        <td colspan="4">
                                            Rp {{number_format ($total,2,',','.') }}
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <a href="/hitung" class="btn btn-outline-info mb-3">Jumlah Harga</a> -->
                                </div>
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
    {{-- <script src="{{asset('monster-html/vendor/jquery/jquery-3.6.0.slim.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/sweetalert/sweetalert2.min.js')}}}"></script>
    <script src="{{asset('monster-html/vendor/jquery/ajax.jquery.3.5.1.min.js')}}"><script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="../myassets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../myassets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('monster-html/js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('monster-html/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('monster-html/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('monster-html/js/custom.js')}}"></script>
    <script src="{{asset('monster-html/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('monster-html/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('monster-html/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('monster-html/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('monster-html/vendor/select2/select2.min.js')}}"></script>

    <script src="../myassets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../myassets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../myassets/extra-libs/DataTables/datatables.min.js"></script>

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable();
    </script>

    <!--allert/jquery-->
    {{-- <script src="{{asset('monster-html/vendor/toastr/toastr.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!--alert delete-->
    <script>
        $('.delete').click(function() {
            var pesananid = $(this).attr('pesanan-id');
            var kode =  $(this).attr('kode');

            swal({
                    title: "Yakin?",
                    text: "Kamu Akan Menghapus Data Pesanan Ini "  + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletepesanan/" + pesananid + "/"+kode
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

    <!--toaster alert-->
    <script>
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif
    </script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <script>
        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                toastr.error("{{$error}}");
            @endforeach
        @endif
    </script>

    <!--autofill harga-->
    <script>
        $('#product').on('change', function(){
            var selectedOption = $(this).find('option:selected');
            $('#harga').val(selectedOption[0].dataset.harga);
        });

        const datas = @json($data);
        datas.forEach(element => {
            $(`#product-edit${element.id}`).on('change', function(){
                var selectedOption = $(this).find('option:selected');
                $(`#harga-edit${element.id}`).val(selectedOption[0].dataset.harga);
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#jumlah').on('keyup', function(){
                var jumlah = $('#jumlah').val();
                var harga = $('#harga').val();
                var total = jumlah * harga;
                $('#total').val(total);
            });
        });

    const data = @json($data);
        data.forEach(element => {
            $(`#jumlah-edit${element.id}`).on('keyup', function(){
                var jumlah = $(`#jumlah-edit${element.id}`).val();
                var harga = $(`#harga-edit${element.id}`).val();
                var total = jumlah * harga;
                // console.log(jumlah,harga, total)
                $(`#total-edit${element.id}`).val(total);
            });
        });

    </script>


    <!--select2-->
    <script>
    $('select:not(.normal)').each(function () {
        $(this).select2({
            dropdownParent: $(this).parent()
        });
    });
    </script>

</body>
</html>
