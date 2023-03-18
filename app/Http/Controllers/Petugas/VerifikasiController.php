<?php

namespace App\Http\Controllers\Petugas;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class VerifikasiController extends Controller
{
    public function index()
    {
        $nik = Masyarakat::get();
        $data = Pengaduan::where('status', 'verifikasi')->get();
        return view('pages.petugas.verifikasi.index',[
            'data'    => $data,
            'nik'    => $nik,
        ]);
    }

    public function edit($id)
    {
        $edit = Pengaduan::find($id);
        $nik = Masyarakat::get();
        $data = Pengaduan::all();
        return view('pages.petugas.verifikasi.edit',[
            'edit'  =>$edit,
            'nik'  =>$nik,
            'data'  =>$data,
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggapan' => 'required',
        ]);
        $ldate = date('Y-m-d');
        $di =Session::get('id');
        $menu= Pengaduan::findOrFail($id);
        // dd($menu);
        Tanggapan::create([
            'tanggapan' => $request->tanggapan,
            'pengaduan_id'  =>$id,
            'tgl_tanggapan' =>$ldate,
            'petugas_id'  =>$di,

        ]);

        $menu->update([
            'status' => 'proses'
        ]);

        return redirect()->route('pengaduan-verifikasi.index')
                        ->with('success','Berhasil Menyimpan !');
    }
}
