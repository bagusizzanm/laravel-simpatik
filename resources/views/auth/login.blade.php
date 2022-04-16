<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPATIK | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>
    <div id="auth">
        
        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><img src="" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">SIMPATIK.</h1>
                    <p class="auth-subtitle mb-5">Selamat Datang di Sistem Informasi Manajemen Pariwisata e-Ticket.</p>

                    <form action="#">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input form-check-warning me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Tetap Masuk
                            </label>
                        </div>
                        <a class="btn btn-warning btn-block btn-lg shadow-lg mt-5" href="/">Log in</a>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p><a class="text-warning font-bold" href="/lupa-password">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-lg-block m-auto">
                <img src="img/login.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>
