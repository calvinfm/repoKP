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
                <form class="login100-form validate-form col-12" id="registerUser">
                    <span class="login100-form-title2">
                        <div class="login100-pic js-tilt mx-auto d-block" data-tilt>
                            <img src="<?=base_url('assets/images/img-01.png')?>" class="img-fluid" alt="IMG">
                        </div>
                        <h3>Formulir Register</h3>
                        <p>Silahkan isi Formulir ini Terlebih Dahulu.</p>
                        <hr>
                    </span>

                    <label for="regisNama">Nama</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Nama">
                        <input class="inputform" type="text" id="regisNama" placeholder="Nama Lengkap Anda">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="regisNip">NIP</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi NIP anda">
                        <input class="inputform" type="text" id="regisNip" placeholder="Nomor Induk Pegawai">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="regisTempatL">Tempat Lahir</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Tempat Lahir anda">
                        <input class="inputform" type="text" id="regisTempatL" placeholder="Tempat Lahir Anda">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="regisTanggalL">Tanggal Lahir</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Tanggal Lahir anda">
                        <input class="inputform" type="date" id="regisTanggalL" >
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="regisEmail">Email</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Email anda">
                        <input class="inputform" type="text" id="regisEmail" placeholder="Email">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="regisPassword">Password</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Password anda">
                        <input class="inputform" type="password" name="password" id="regisPassword" placeholder="Password"
                            onkeyup='check();'>
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="confirm_password">Confirm Password</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Confirm Password anda">
                        <input class="inputform" type="password" name="confirm_password" id="confirm_password"
                            placeholder="Confirm Password" onkeyup='check();'>
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span class="m-4" id='message'></span>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" id="regisButton">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-12 mt-3">
                        <span class="txt1">
                            Sudah Punya Akun ?
                        </span>
                        <a class="txt2" href="<?=base_url('admin/login')?>">
                            Login Disini
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
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
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!-- <script>
        $('.datepicker').datepicker();
    </script> -->
    <script>
        var check = function () {
            if (document.getElementById('regisPassword').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password Validate';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password Not Matching';
            }
        }</script>
    <!--===============================================================================================-->
    <script src="<?=base_url('assets/js/main.js')?>"></script>
    </script>

</body>

</html>