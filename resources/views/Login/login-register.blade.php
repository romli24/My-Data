<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login / Registrasi</title>
  <link rel="stylesheet" href="../monster-html/css/log.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../myassets/images/Data1.png">

    <link rel="shortcut icon" href=".../myassets/images/fav.jpg">
    <link rel="stylesheet" href=".../myassets/css/bootstrap.min.css">
    <link rel="stylesheet" href=".../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="../text/css" href="../myassets/css/style.css" />


  <style>
	.redtext{
		color:white;
	}

	.warna{
		color:red;
	}

  </style>
</head>
<body style="background-image: url(../myassets/images/background/dawamganteng.jpg);">

<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
	<div class="lds-ripple">
		<div class="lds-pos"></div>
		<div class="lds-pos"></div>
	</div>
</div>

	<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
	<form action="{{ route('simpanregistrasi') }}" methode="POST">
	        {{ csrf_field() }}
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
		<div class="form-group @error('name') is-invalid @enderror" value="{{ old('name') }}" style="width: 285px">
			<input type="text" name="name" placeholder="Name" />
			    @error('name')
			        <span class="warna">{{$message}}</span>
			    @enderror
			</div>
		<div class="form-group @error('noTelp') is-invalid @enderror" value="{{ old('NoTelp') }}" style="width: 285px">
			<input type="number" name="NoTelp" placeholder="No Telepon" />
			    @error('NoTelp')
			        <span class="warna">{{$message}}</span>
			    @enderror
            </div>
		<div class="form-group @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" style="width: 285px">
			<input type="text" name="alamat" placeholder="Alamat" />
			    @error('alamat')
			        <span class="warna">{{$message}}</span>
			    @enderror
            </div>
		<div class="form-group @error('email') is-invalid @enderror" value="{{ old('email') }}" style="width: 285px">
			<input type="email" name="email" placeholder="Email" />
			    @error('email')
			        <span class="warna">{{$message}}</span>
			    @enderror
			</div>
			<input type="password" name="password" placeholder="Password" />
                @error('password')
			        <span class="warna">{{$message}}</span>
			    @enderror
			<a href="dashboard"><button class="redtext" style="background-color: #3aa6ee">Daftar</button></a>
			<div class="account-dropdown__footer">
				<a href="menu-utama">
					<i class="fas fa-sign-out-alt"></i>Back</a>
			</div>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{ route('postlogin') }}" methode="post">
			{{ csrf_field() }}
			<h1>Login</h1>
			<span>or use your account</span>
		<div class="form-group @error('deskripsi') is-invalid @enderror" value="{{ old('email') }}" style="width: 285px">
			<input type="email" name="email" placeholder="Email" />
			    @error('email')
			        <span class="warna">{{$message}}</span>
			    @enderror
            </div>
		<div class="form-group @error('deskripsi') is-invalid @enderror" value="{{ old('password') }}" style="width: 285px">
			<input type="password" name="password" placeholder="Password" />
			    @error('password')
			        <span class="warna">{{$message}}</span>
			    @enderror
            </div>
			<p>
			<a href="dashboard"><button class="redtext" style="background-color: #3aa6ee">Login</button></a>
			</p>
			<div class="account-dropdown__footer">
				<a href="menu-utama">
					<i class="fas fa-sign-out-alt"></i>Back</a>
			</div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left" style="background-color: #3aa6ee;">
				<h1 class="redtext">Registrasi!</h1>
				<p class="redtext">Silahkan daftarkan akun untuk masuk ke My Data</p>
				<button class="redtext" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right"  style="background-color: #3aa6ee;">
				<h1 class="redtext">Halo Kawan!</h1>
				<p class="redtext">Masukkan data pribadimu dan mulai masuk ke My Data</p>
				<button class="redtext" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>


<section>
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>


<!-- partial -->
  <script  src="../monster-html/js/log.js"></script>

</body>
<script src=".../myassets/plugins/jquery/dist/jquery.min.js"></script>
              <!-- Bootstrap tether Core JavaScript -->
              <script src=".../myassets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
              <script src="../js/app-style-switcher.js"></script>
              <!--Wave Effects -->
              <script src="./js/waves.js"></script>
              <!--Menu sidebar -->
              <script src="./js/sidebarmenu.js"></script>
              <!--Custom JavaScript -->
              <script src="./js/custom.js"></script>
              <script src="./js/profile-user.js"></script>
</html>
