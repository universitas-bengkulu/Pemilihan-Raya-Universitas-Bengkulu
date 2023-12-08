<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kandidat;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardPemilihController extends Controller
{
    public function dashboard(){
        if (Session::has('npm')) {
            $npm = Session::get('npm');
            $sudah = Rekapitulasi::where('npm_pemilih',$npm)->first();
            $jadwal = Jadwal::count();
            $kandidats = Kandidat::with(['misis'])->get();
            return view('dashboard-pemilih',compact('kandidats','sudah','jadwal'));
        }else{
            Session::flush();
            return redirect()->route('panda.login')->with(['error' => 'Mohon maaf, anda tidak memiliki akses halaman ini']);
        }
    }

    public function pemilihPost(Request $request, Kandidat $kandidat){
        $sudah = Rekapitulasi::where('npm_pemilih',Session::get('npm'))->first();
        $jadwal = Jadwal::first();
        if (!$sudah) {
            Rekapitulasi::create([
                'kandidat_id'    =>  $kandidat->id, 
                'jadwal_id' =>    $jadwal->id,
                'npm_pemilih' =>    session('npm'),  
                'nama_pemilih' =>    session('nama'),  
                'prodi_pemilih' =>  session('prodi_nama'),
                'fakultas_pemilih' =>   session('fakultas_nama'),
                'angkatan_pemilih' =>   session('angkatan'),
                'jenis_kelamin' =>     session('jenis_kelamin'),
                'jenjang' =>     session('jenjang'),
            ]);
            return redirect()->route('mahasiswa.dashboard')->with(['sucess'  =>  'Berhasil, pilihan anda berhasil disimpan, terimakasih sudah menggunakan hak suara anda!!']);
        }else{
            return redirect()->route('mahasiswa.dashboard')->with(['error'  =>  'Mohon Maaf, anda sudah menggunakan hak suara, dan tidak dapat menggunakan hak suara untuk kedua kalinya !!']);
        }
    }
}
