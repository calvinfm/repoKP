<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Journal Stihpada || Login Menu </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/img-01.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form col-12">
                    <span class="login100-form-title2">
                        <div class="login100-pic js-tilt mx-auto d-block" data-tilt>
                            <img src="images/img-01.png" class="img-fluid" alt="IMG">
                        </div>
                        <h3>Formulir Register</h3>
                        <p>Silahkan isi Formulir ini Terlebih Dahulu.</p>
                        <hr>
                    </span>

                    <label for="inputNama">Nama</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Nama">
                        <input class="inputform" type="text" placeholder="Nama Lengkap Anda">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="inputNama">NIP</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi NIP anda">
                        <input class="inputform" type="text" placeholder="Nomor Induk Pegawai">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="inputNama">Tempat Lahir</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Tempat Lahir anda">
                        <input class="inputform" type="text" placeholder="Tempat Lahir Anda">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="inputNama">Tanggal Lahir</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Tanggal Lahir anda">
                        <input class="inputform" type="date">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="inputEmail">Email</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Email anda">
                        <input class="inputform" type="text" placeholder="Email">
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="inputNama">Password</label>
                    <div class="wrap-inputform validate-input" data-validate="Mohon Isi Password anda">
                        <input class="inputform" type="password" name="password" id="password" placeholder="Password"
                            onkeyup='check();'>
                        <span class="focus-inputform"></span>
                        <span class="symbol-inputform">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <label for="inputNama">Confirm Password</label>
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
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-12 mt-3">
                        <span class="txt1">
                            Sudah Punya Akun ?
                        </span>
                        <a class="txt2" href="index.html">
                            Login Disini
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script>
        $('.datepicker').datepicker();
    </script>
    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password Validate';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password Not Matching';
            }
        }</script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    </script>

</body>

</html>