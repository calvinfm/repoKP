<!DOCTYPE html>
<html lang="en">

<head>
	<title>E-Journal Stihpada || Login Menu </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url('assets/images/img-01.png')?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/animate/animate.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/select2/select2.min.css')?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/main.css')?>">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=base_url('assets/images/img-01.png')?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?=base_url('dosen/doLogin')?>" method="POST">
					<span class="login100-form-title">
						<h3>Selamat Datang.</h3>
						<p>Silahkan Login Terlebih Dahulu</p>
					</span>
					<!-- JIKA USERNAME / PASSWORD SALAH -->
					<!--
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Username / Password</strong> Salah , coba input kembali dengan benar.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					-->
					<div class="wrap-input100 validate-input" data-validate="Masukan Username dengan benar">
						<input class="input100" type="username" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="#" data-toggle="modal" data-target="#exampleModalCenter">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?=base_url('dosen/register')?>">
							Daftar Akun Baru
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Account Recovery</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?=base_url('assets/images/password_forget.png')?>" class="img-fluid w-50 mx-auto d-block">
					<h5 class="mt-5">Kami dapat membantu memgembalikan akun anda dengan cara memasukan <span
							class="text-success">EMAIL</span> yang telah terdaftar dan tunggu kode pesan rahasia dari
						kami.</h5>
					<form>
						<div class="form-group text-info mt-3">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1"
								aria-describedby="emailHelp" placeholder="Masukan Email yang telah terdaftar" required>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Kirim Pesan</button>
				</div>
				</form>
			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/select2/select2.min.js')?>"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/tilt/tilt.jquery.min.js')?>"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?=base_url('assets/js/main.js')?>"></script>

</body>

</html>