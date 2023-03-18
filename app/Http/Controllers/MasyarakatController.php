<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $data = Masyarakat::all();
        return view('pages.admin.masyarakat.index',[
            'data'   => $data
        ]);
    }

        public function destroy($id)
    {
        $delete = Masyarakat::find($id);
        $delete->delete();
        return redirect()->route('masyarakat.index');
    }
}
