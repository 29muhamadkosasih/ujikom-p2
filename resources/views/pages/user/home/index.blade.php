@extends('layouts.user.app')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Welcome To Website
                    PENGADUAN MASYARAKAT</h1>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ url('pengaduan') }}" class="btn-get-started scrollto mb-5">Create Pengaduan</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Cliens Section -->

    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PENGADUAN</h2>
            </div>

            <div class="row" style="text-align: center">

                @foreach ($pengaduan as $item)

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="pic" style="text-align: center"><img src="/image/{{ $item->fhoto }}" class="img-fluid" width="150px" alt=""></div>
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

                @foreach ($masyarakat as $item)

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start mb-1" data-aos="zoom-in" data-aos-delay="100">
                            <img src="https://ui-avatars.com/api/?name={{ $item->name }}">
                        <div class="member-info">
                            <h4>{{ $item->name }}</h4>
                            <span> NIK :{{ $item->nik }}</span>
                            <span>No Telfon :{{ $item->telp }}</span>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PROCEDURE</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Create Account <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Create an account by registering or logging in if you already have an account
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">create Complaint<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Fill in the complaint form according to what you are complaining about
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Report <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                View your complaint development report
                </p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->

@endsection
