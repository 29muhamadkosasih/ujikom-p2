<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>
</head>
<style>
    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 100px;
    }

</style>`

<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h5>LAPORAN PENGADUAN MASYARAKAT SUKAMAHI</h5>
            </div>
            <div class="col-4">
        <img src="img/icons/icon-48x48.png" alt="pp" class="center">
            </div>
            <div class="col-6">
                <H6>SUKAMAHI BERSATU</H6>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kejadian</th>
                    <th>Nama Pelapor</th>
                    <th>Isi Laporan</th>
                    <th>alamat</th>
                    <th>Tanggapan</th>
                    <th>Tanggal Tanggapan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $k => $v)
                <tr>
                    <td>{{ $k += 1 }}</td>
                    <td>{{ $v->tgl_pengaduan}}</td>
                    <td>{{ $v->us->name}}</td>
                    <td>{{ $v->laporan}}</td>
                    <td>{{ $v->alamat}}</td>
                    <td>
                        @switch($v)
                        @case($v->status == '0')
                        <td>Belum Ada Tanggapan</td>
                        @break
                        @default
                        {{ $v->tanga->tanggapan}} Oleh {{ $v->tanga->petugas->level }}</td>
                        @endswitch
                        <td>
                            @switch($v)
                            @case($v->status == '0')
                            <td>Belum Ada Tanggapan</td>
                            @break
                            @default
                            {{ $v->tanga->tgl_tanggapan}}</td>
                            @endswitch
                    <td>{{ $v->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
