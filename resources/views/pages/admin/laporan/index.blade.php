@extends('layouts.admin.app');
@section('content')
<div class="row">
    <div class="offset-2 col-md-8">
        <div class="card flex-fill">

            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Filter Export</h5>
                </div>
                <div class="container-fluid">
                    <form action="{{ route('laporan.getLaporan') }}" method="POST">
                        @csrf
                        <label for="">Tanggal Pengaduan Awal</label><br>
                        <input type="text" name="from" class="form-control" placeholder="Tanggal Awal" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        <label for="">Tanggal Pengaduan Akhir</label><br>
                        <input type="text" name="to" class="form-control mb-3" placeholder="Tanggal Akhir" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        <button type="submit" class="btn btn-primary mb-3" style="width: 100%">Cari Laporan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card flex-fill">
            <table class="table table-hover dataTable zero-configuration my-0">

                <div class="d-flex justify-content-end">
                    <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to]) }}" class="btn btn-primary btn-sm m-2" target="_blank">Export
                        PDF</a>
                    </div>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Kejadian</th>
                        <th class="d-none d-xl-table-cell">Nama</th>
                        <th class="d-none d-xl-table-cell">Laporan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tgl_pengaduan }}</td>
                        <td>{{ $item->us->name }}</td>
                        <td>{{ $item->laporan }}</td>
                        <td>
                        @switch($item)
                        @case($item->status == '0')
                        <span class="badge bg-secondary">Pending</span>
                        @break

                        @case($item->status == 'verifikasi')
                        <span class="badge bg-warning">Terverikasi</span>
                        @break
                        @case($item->status == 'proses')
                        <span class="badge bg-info">On Progress</span>
                        @break
                        @case($item->status == 'selesai')
                        <span class="badge bg-success">Selesai</span>
                        @break

                        @default
                        <span>{{ $item->status }}</span>
                        @endswitch
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
