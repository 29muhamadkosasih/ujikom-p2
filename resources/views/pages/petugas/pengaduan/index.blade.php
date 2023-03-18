@extends('layouts.admin.app');

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card flex-fill">
            <table class="table table-hover dataTable zero-configuration my-0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th class="d-none d-xl-table-cell">NIK</th>
                        <th class="d-none d-xl-table-cell">Laporan</th>
                        <th>Image</th>
                        <th>status</th>
                        <th class="d-none d-md-table-cell">Desc</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->tgl_pengaduan }}</td>
                        <td>{{ $item->mas->nik }}</td>
                        <td>{{ $item->laporan }}</td>
                        <td><img src="/image/{{ $item->fhoto }}" width="80px" alt=""></td>
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
                        <td>
                            @switch($item)
                            @case($item->status == '0')
                            <span class="badge bg-warning">Menuggu Verifikasi Admin</span>
                            @break
                            @default
                            <span class="badge bg-warning">Menuggu Verifikasi Admin</span>
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
