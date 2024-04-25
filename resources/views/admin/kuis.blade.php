<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kuis | Sudut Pajak</title>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}">
    <!-- bootstrap v4 css -->
    <script src="{{ asset('js/webfont.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['./css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/atlantis.css') }}" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- animate css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <!-- rsmenu CSS -->
    <link href="{{ asset('css/rsmenu-main.css') }}" rel="stylesheet">
    <!-- magnific popup css -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <!-- rsmenu transitions CSS -->
    <link href="{{ asset('css/rsmenu-transitionos.css') }}" rel="stylesheet">
    <!-- style css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link href="{{ asset('css/spacing.css') }}" rel="stylesheet">
    <!-- responsive css -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<style>
    #rs-header .menu-sticky {
        background-color: #ffff;
        position: fixed;
        z-index: 999;
        margin: 0 auto;
        padding: 0;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
    }
    .kuis-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .kuis-title {
        margin-bottom: 30px;
        color: #000; /* Warna teks judul tetap hitam */
    }

    .kuis-box {
        background-color: #fff; /* Latar belakang putih */
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
    }

    .kuis-box:before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: #fff;
        border-image: linear-gradient(to right, #007bff, #28a745) 1;
        border-image-slice: 0,5;
        border-style: solid;
        border-width: 0 10px 10px 0;
        border-radius: 20px;
        z-index: -1;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .logo-kuis {
        max-width: 150px;
        margin-bottom: 20px;
    }
</style>
<header id="rs-header" class="">
    <!-- Header Menu Start -->
    <div class="menu-area menu-sticky sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="index.php"><img src="{{ asset('image/favicon.png') }}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 mobile-menu-area">
                    <div class="rs-menu-area display-flex-center">
                        <div class="main-menu">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav style="margin-left: 90px;" class="rs-menu">
                                <ul class="nav-menu">
                                    <li class="menu-item-has-children">
                                        <a href="index.php">Beranda</a>
                                    </li>
                                    <li><a href="layanan.php">Layanan</a></li>
                                    <li><a href="kalkulator.php">Kalkulator</a></li>
                                    <li class="menu-item-has-children"><a href="https://taxcenter-polibatam.id">Aplikasi
                                            Pajak</a>
                                    </li>
                                    <li class="rs-mega-menu mega-rs menu-item-has-children">
                                        <a href="#">Peraturan</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="pajak_daerah.php">Peraturan Pajak Pusat</a> </li>
                                                            <li><a href="pajak_daerahbatam.php">Peraturan Pajak Daerah Kota Batam</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php
                                    $__menuAktif = isset($__menuAktif) ? $__menuAktif : '';
                                    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
                                    ?>
                                        <li>
                                            <a class="<?= ($__menuAktif == 'login') ? 'active' : '' ?>" href="konsultasi/login2.php">Login</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a class="<?= ($__menuAktif == 'profil') ? 'active' : '' ?>" href="./konsultasi/user/account.php">Profil</a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Kuis Section -->
<section class="kuis-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="kuis-title">Kuis PPH 21: Penghitungan PPH 21</h2>
                <div class="kuis-box">
                
                        <table class="text-center">
                            <tr>
                                <td><strong>Dibuka:</strong></td>
                                <td>Senin, 01 Januari 2025</td>
                            </tr>
                            <tr>
                                <td><strong>Durasi:</strong></td>
                                <td>25 Menit</td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah Soal:</strong></td>
                                <td>5 Soal</td>
                            </tr>
                        </table>
                        <a href="#" class="btn btn-primary btn-lg">Mulai Kuis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Footer -->
<footer class="footer-section">
    <!-- Your footer content here -->
</footer>

<!-- jQuery -->
<script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Your custom scripts -->
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
