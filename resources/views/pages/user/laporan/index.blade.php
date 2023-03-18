@extends('layouts.user.app')
@section('content')

<section id="portfolio" class="portfolio mt-5">

  <div class="container" data-aos="fade-up">
    
    <div class="section-title">
      <h2>Laporan</h2>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pelapor</th>
          <th scope="col">Pengaduan</th>
          <th scope="col">Alamat</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @foreach ($data as $item)
      <tbody>
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item->us->name}}</td>
          <td>{{$item->laporan}}</td>
          <td>{{$item->alamat}}</td>
          <td>{{$item->status}}</td>
          <td>
          <a href="{{ route('home.show', $item->id) }}" class="btn btn-warning btn-sm">Lihat</a>

          </td>
        </tr>
      </tbody>
      @endforeach

    </table>
<!-- 
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($data as $item)

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-img"><img src="/image/{{ $item->fhoto }}" class="img-fluid" alt=""></div>
          <div class="portfolio-info">
            <h4>Detail </h4>
            <a href="/image/{{ $item->fhoto }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            <a href="{{ route('home.show', $item->id) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        @endforeach
      </div> -->

    </div>
  </section>

@endsection
