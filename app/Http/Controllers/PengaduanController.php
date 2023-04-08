<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $nik = Masyarakat::get();
        $data = Pengaduan::all();
        return view('pages.admin.pengaduan.index', [
            'data'    => $data,
            'nik'    => $nik,
        ]);
    }

    public function show($id)
    {
        $show = Pengaduan::find($id);
        $nik = Masyarakat::get();
        $data = Pengaduan::all();


        return view('pages.pengaduan.detail', compact('show', 'nik', 'data'));

    }

    public function destroy($id)
    {
        $delete = Pengaduan::find($id);
        $delete->delete();
        return redirect()->route('pengaduan.index');
    }
}
