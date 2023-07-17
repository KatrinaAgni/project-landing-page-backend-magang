<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RplModel;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\RplModel;

class RplController extends Controller
{
    public function tampilrpl()
    {
        $tb_rpl = RplModel::select('*')
             ->get();
        return view('tampilrpl', ['tb_rpl' => $tb_rpl]);
    }

    public function tambahrpl()
    {
        return view('tambahrpl');
    }

    public function simpanrpl(Request $request)
    {
        $tb_rpl = RplModel::create([
            'Nama_Siswa' => $request->Nama_Siswa,
            'Kelas' => $request->Kelas,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'Umur' => $request->Umur,
        ]);

        return redirect()->route('tampilrpl');
    }

    public function ubahrpl($id_siswa)
    {
        $tb_rpl = RplModel::select('*')
             ->where('id_siswa', $id_siswa)
             ->get();

        return view('ubahrpl', ['tb_rpl' => $tb_rpl]);
    }

    public function updaterpl(Request $request)
    {
        $tb_rpl = RplModel::where('id_siswa', $request->id_siswa)
             ->update([
                'Nama_Siswa' => $request->Nama_Siswa,
                'Kelas' => $request->Kelas,
                'Jenis_Kelamin' => $request->Jenis_Kelamin,
                'Umur' => $request->Umur,
            ]);

        return redirect()->route('tampilrpl');
    }
    public function hapusrpl($id_siswa)
    {
        $tb_rpl = RplModel::where('id_siswa', $id_siswa)
              ->delete();

        return redirect()->route('tampilrpl');
    }
    public function index(Request $request)
	{
		$keyword = $request->input('keyword');
        $tb_rpl = RplModel::where('id_siswa', 'LIKE', '%'.$keyword.'%')->get(); // Ganti nama_kolom dengan kolom yang ingin Anda cari
        return view('showrpl', compact('tb_rpl'));
 
	}
}
?>