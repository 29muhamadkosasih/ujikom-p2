<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengaduan Masyarakat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- Favicons -->
    <link href="assets/img/wikrama-logo.png" rel="icon">
    <link href="assets/img/wikrama-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('form-register') }}">Register</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('form-login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome To Website
                        PENGADUAN MASYARAKAT SUKAMAHI</h1>
                    <h2></h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= Cliens Section ======= -->
        <!-- <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Information</h2>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Total Complaints</a></h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo voluptatum minus
                                iusto deleniti amet nostrum, eum pariatur vitae, fuga tenetur dolor inventore harum
                                soluta dolores consectetur consequatur reprehenderit repellat illo.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href=""> Total Report </a></h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo voluptatum minus
                                iusto deleniti amet nostrum, eum pariatur vitae, fuga tenetur dolor inventore harum
                                soluta dolores consectetur consequatur reprehenderit repellat illo.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href=""> Total Response</a></h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo voluptatum minus
                                iusto deleniti amet nostrum, eum pariatur vitae, fuga tenetur dolor inventore harum
                                soluta dolores consectetur consequatur reprehenderit repellat illo.</p>

                        </div>
                    </div>

                </div>

            </div>
        </section>End Services Section -->

        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PENGADUAN</h2>
                </div>

                <div class="row" style="text-align: center">

                    @foreach ($pengaduan as $item)

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <h3>{{ $item->us->name }}</h3>
                        <div class="pic" style="text-align: center"><img src="/image/{{ $item->fhoto }}"
                                class="img-fluid" width="150px" alt=""></div>
                        <ul>
                            <li style="text-align: center">{{ $item->laporan }}</li>
                        </ul>
                    </div>

                    @endforeach
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>ALL Masyarakat</h2>
                </div>
                <div class="row">
                    <div class="offset-3 col-lg-6">
                        <div class="member d-flex align-items-start mb-1" data-aos="zoom-in" data-aos-delay="100">
                            <!-- <img src="https://ui-avatars.com/api/?name={{ $item->name }}"> -->
                            <div class="member-info">
                                <h4>Total Masyarakat</h4>
                                <!-- <!-- <span> NIK :{{ $item->nik }}</span> -->
                                <span>{{$totalmas}}</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-3 col-lg-6">
                        <div class="member d-flex align-items-start mb-1" data-aos="zoom-in" data-aos-delay="100">
                            <!-- <img src="https://ui-avatars.com/api/?name={{ $item->name }}"> -->
                            <div class="member-info">
                                <h4>Total Tanggapan</h4>
                                <!-- <!-- <span> NIK :{{ $item->nik }}</span> -->
                                <span>{{$totaltanga}}</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-3 col-lg-6">
                        <div class="member d-flex align-items-start mb-1" data-aos="zoom-in" data-aos-delay="100">
                            <!-- <img src="https://ui-avatars.com/api/?name={{ $item->name }}"> -->
                            <div class="member-info">
                                <h4>Total Pengaduan</h4>
                                <!-- <!-- <span> NIK :{{ $item->nik }}</span> -->
                                <span>{{$totalpenga}}</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix ">
            <div class="copyright justify-content-center">
                &copy; Copyright <strong><span>muhamadkosasih</span></strong>.2023
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
