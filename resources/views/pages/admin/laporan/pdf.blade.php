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
        border: 0px solid #ddd;
        border-radius: 0px;
        padding: 0px;
        width: 85px;
    }
</style>`

<body>
    <header style=" page-break-inside: avoid;">
        <table>
            <tbody>
                <tr>
                    <td rowspan="2">
                        <img src="img/icons/icon-48x48.png" alt="pp" class="center">
                    </td>
                    <td colspan="2">
                        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PEMERINTAH
                            DINAS DESA SUKAMAHI</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <h6>Kode Desa (PUM), 3201262010. Desa/Kelurahan, SUKAMAHI. Kecamatan, MEGAMENDUNG.
                            Kabupaten/Kota, KABUPATEN BOGOR. Provinsi, JAWA BARAT.</h6>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr style="height:4px;border-width:0;color:gray;background-color:black">
        <div class="d-flex justify-content-center">
            <h5 class="text-center">LAPORAN PENGADUAN MASYARAKAT</h5>
            <h6 class="text-center mb-2"> PERIODE : {{ \Carbon\Carbon::parse($from)->format('d-m-Y')}} Sampai
                {{ \Carbon\Carbon::parse($to)->format('d-m-Y')}}</h6>
        </div>
    </header>
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
                    Belum Ada Tanggapan
                    @break
                    @default
                    {{ $v->tanga->tanggapan}} Oleh {{ $v->tanga->petugas->level }}</td>
                @endswitch
                <td>
                    @switch($v)
                    @case($v->status == '0')
                    Belum Ada Tanggapan
                    @break
                    @default
                    {{ $v->tanga->tgl_tanggapan}}</td>
                @endswitch
                <td>
                    {{ $v->status }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
