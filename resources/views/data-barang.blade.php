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
    <title>My Data | Data Produk</title>
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
    <link href="{{asset('monster-html/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">

    <link href="../dist/css/style.min.css" rel="stylesheet" />

    {{-- <link href="{{asset('monster-html/vendor/toastr/toaster.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('monster-html/vendor/toastr/toastr.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
    .avatar {
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        }
        .img.square {
            width: 55px;
            height: 55px;
            overflow: hidden;
            display: inline-block;
            background-size: cover;
            background-position: center;
            border-radius: 3px;
        }

    .img.square img {
        visibility: hidden;
    }
    .select2-container{
        width: 100%!important;
    }
    .select2-search--dropdown .select2-search__field {
        width: 98%;
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
                        <h3 class="page-title mb-0 p-0">Data Produk</h3>
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
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- column -->

                    <!-- Modal -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered border">
                                    <!--form tambah-->
                                    <a href="/data-barang" class="btn btn-outline-success btn-sm mb-3 mr-1" data-bs-toggle="modal"
                                        data-bs-target="#modelpopup">
                                        Tambah</a>

                                        <a href="/sampah" class="btn btn-outline-info btn-sm mb-3 ml-1" style="margin-left:5px;">Tong Sampah</a>

                                    {{-- @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ $message }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif --}}

                                    <!-- Modal -->

                                    <div class="modal fade" id="modelpopup" tabindex="-1"
                                        aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Tambah Data Barang</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('insertbarang') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <strong>Kode Produk</strong>
                                                            <input type="text" name="kode_barang"
                                                                class="form-control @error('kode_barang') is-invalid @enderror"
                                                                value="{{ 'KDB-'.date('d-m-y').'-'.$kd }}" readonly>
                                                            @error('kode_barang')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group form">
                                                            <strong>Kategori</strong>
                                                            <select class="form-control my-select2 @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori"
                                                            value="{{ old('kategori_id') }}">
                                                            <option value="">-Pilih Kategori-</option>
                                                            @foreach ($kat as $row)
                                                            <option value="{{ $row->id }}" {{ old('kategori_id ') == $row->id ? 'selected' : null }}>{{ $row->kategorii }}</option>
                                                            @endforeach
                                                            @error('kategori_id')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            </select>
                                                        </div>
                                                        <div class="form-group form">
                                                            <strong>Nama Supplayer</strong>
                                                            <select class="form-control my-select2 @error('nama_supplayer_id') is-invalid @enderror" name="nama_supplayer_id" id="kategori"
                                                            value="{{ old('nama_supplayer_id') }}">
                                                            <option value="">-Pilih Nama Supplayer-</option>
                                                            @foreach ($supp as $row)
                                                            <option value="{{ $row->id }}" {{ old('nama_supplayer_id') == $row->id ? 'selected' : null }}>{{ $row->namasupplayer }}</option>
                                                            @endforeach
                                                            @error('nama_supplayer_id')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Nama Produk</strong>
                                                            <input type="text" name="nama_barang"
                                                                class="form-control @error('nama_barang') is-invalid @enderror"
                                                                value="{{ old('nama_barang') }}">
                                                            @error('nama_barang')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <strong>Harga Jual</strong>
                                                            <input type="number" name="harga_jual"
                                                                class="form-control @error('harga_jual') is-invalid @enderror"
                                                                value="{{ old('harga_jual') }}">
                                                            @error('harga_jual')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Harga Beli</strong>
                                                            <input type="number" name="harga_beli" id="beli"
                                                                class="form-control @error('harga_beli') is-invalid @enderror"
                                                                value="{{ old('harga_beli') }}">
                                                            @error('harga_beli')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Stok Produk</strong>
                                                            <input type="number" name="stok" id="stok"
                                                                class="form-control @error('stok') is-invalid @enderror"
                                                                value="{{ old('stok') }}">
                                                            @error('stok')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Total Beli</strong>
                                                            <input type="text" autocomplete="off" class="form-control @error('total_beli') is-invalid @enderror"
                                                                name="total_beli" id="total" readonly>
                                                        @error('total_beli')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Deskripsi</strong>
                                                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                                                value="{{ old('deskripsi') }}" style="height: 70px"></textarea>
                                                            @error('deskripsi')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Gambar</strong>
                                                            <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}">

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
                                    <!--end form tambah-->

                                    <!--table-->
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Produk</th>
                                            <th>Kategori</th>
                                            <th>Nama Supplayer</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Total Beli</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $row)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td>{{ $row->kode_barang }}</td>
                                                <td>{{ $row->kategori->kategorii }}</td>
                                                <td>{{ $row->namasupplayer->namasupplayer }}</td>
                                                <td>{{ $row->nama_barang }}</td>
                                                <td>Rp {{number_format ($row['harga_jual'],2,',','.') }}</td>
                                                <td>Rp {{number_format ($row['harga_beli'],2,',','.') }}</td>
                                                <td>{{ $row->stok }}</td>
                                                <td>Rp {{number_format ($row['total_beli'],2,',','.') }}</td>
                                                <td>{{ $row->deskripsi }}</td>
                                                <td>
                                                    <img src="{{ asset('gambarproduk/' . $row->gambar) }}"
                                                        style="width: 80px" class="img square">
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit" data-bs-toggle="modal"
                                                                data-bs-target="#modelpopup{{$row->id}}"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modelpopup{{ $row->id }}" tabindex="-1"
                                                                aria-labelledby="ModalLabel1" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                    <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel1">Edit Data Barang</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                                <div class="modal-body">

                                                                        <form
                                                                            action="/updatebarang/{{ $row->id }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <strong>Kode Produk</strong>
                                                                                <input type="text"
                                                                                    name="kode_barang"
                                                                                    class="form-control"
                                                                                    value="{{ $row->kode_barang }}" readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Kategori</strong>
                                                                                <select class="form-control my-select2" name="kategori_id" id="kategori-edit" required>
                                                                                <option value={{ $row->kategori->id }}>{{ $row->kategori->kategorii }}</option>
                                                                                @foreach ($kat as $k)
                                                                                <option value="{{ $k->id }}">{{ $k->kategorii }}</option>
                                                                                @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Nama Supplayer</strong>
                                                                                <select class="form-control my-select2" name="nama_supplayer_id" id="kategori-edit" required>
                                                                                <option value={{ $row->namasupplayer->id }}>{{ $row->namasupplayer->namasupplayer }}</option>
                                                                                @foreach ($supp as $s)
                                                                                <option value="{{ $s->id }}">{{ $s->namasupplayer }}</option>
                                                                                @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Nama Produk</strong>
                                                                                <input type="text"
                                                                                    name="nama_barang"
                                                                                    class="form-control"
                                                                                    value="{{ $row->nama_barang }}" required>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <strong>Harga Jual</strong>
                                                                                <input type="number" name="harga_jual"
                                                                                    class="form-control"
                                                                                    value="{{ $row->harga_jual }}" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Harga Beli</strong>
                                                                                <input type="number" name="harga_beli" id="beli-edit{{ $row->id }}"
                                                                                    class="form-control"
                                                                                    value="{{ $row->harga_beli }}" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Stok Produk</strong>
                                                                                <input type="number" name="stok" id="stok-edit{{ $row->id }}"
                                                                                    class="form-control"
                                                                                    value="{{ $row->stok }}" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Total Beli</strong>
                                                                                <input type="number" name="total_beli" id="total-edit{{ $row->id }}"
                                                                                    class="form-control"
                                                                                    value="{{ $row->total_beli }}" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <strong>Deskripsi</strong>
                                                                                <textarea class="form-control" name="deskripsi"
                                                                                style="height: 70px" required>{{ $row->deskripsi }}</textarea>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <strong>Gambar</strong>
                                                                                <input type="file" name="gambar"
                                                                                    class="form-control">
                                                                                <img src="{{ asset('gambarproduk/' . $row->gambar) }}"
                                                                                    style="width: 70px">
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary btn-sm"
                                                                            data-bs-dismiss="modal">Tutup</button>
                                                                        <button type="submit"
                                                                            class="btn btn-outline-success btn-sm">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                        <!--end form tambah-->

                                                        <a href="#" class="item delete"
                                                            data-id="{{ $row->id }}"
                                                            data-kode="{{ $row->kode_barang }}"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Hapus">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                    </div>
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
        © 2022 Rekapitulasi Data Oleh My Data
    </footer>
    <!-- End footer -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('monster-html/vendor/jquery/jquery-3.6.0.slim.min.js') }}">
    <script src="{{asset('monster-html/vendor/sweetalert/sweetalert.min.js') }}">

    <script src="../myassets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../myassets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./monster-html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="./monster-html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('monster-html/js/sidebarmenu.js') }}"></script>
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
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
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
    {{-- <script src="{{asset('monster-html/vendor/toastr/toastr.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $('.delete').click(function() {
            var barangid = $(this).attr('data-id');
            var kode = $(this).attr('data-kode');

            swal({
                    title: "Yakin?",
                    text: "Kamu Akan Menghapus Data Produk Dengan Kode  " + kode + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + barangid + ""
                        // swal("Data Berhasil Di Hapus", {
                        //     icon: "success",
                        // });
                    } else {
                        swal("Data Tidak Jadi Di Hapus");
                    }
                });

        })
    </script>

    //logout//
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

        //toastr//
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

    //select2//
    <script>
        $('select:not(.normal)').each(function () {
                $(this).select2({
                    dropdownParent: $(this).parent()
                });
            });
    </script>
    <script>
        $(document).ready(function(){
            $('#stok').on('keyup', function(){
                var stok = $('#stok').val();
                var beli = $('#beli').val();
                var total = stok * beli;
                $('#total').val(total);
            });
        });

    const data = @json($data);
        data.forEach(element => {
            $(`#stok-edit${element.id}`).on('keyup', function(){
                var jumlah = $(`#stok-edit${element.id}`).val();
                var harga = $(`#beli-edit${element.id}`).val();
                var total = jumlah * harga;
                // console.log(jumlah,harga, total)
                $(`#total-edit${element.id}`).val(total);
            });
        });

    </script>
</body>

</html>
