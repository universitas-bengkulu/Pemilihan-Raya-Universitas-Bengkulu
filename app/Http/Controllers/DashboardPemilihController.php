<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
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
            $sudah = Rekapitulasi::where('dpt_npm',$npm)->first();
            $jadwal = Jadwal::count();
            $kandidats = Kandidat::with(['misis'])->get();
            return view('dashboard-pemilih',compact('kandidats','sudah','jadwal'));
        }else{
            Session::flush();
            return redirect()->route('panda.login')->with(['error' => 'Mohon maaf, anda tidak memiliki akses halaman ini']);
        }
    }

    public function voting()
    {
        if (Session::has('npm')) {
            $npm = Session::get('npm');
            $sudah = Rekapitulasi::where('dpt_npm', $npm)->first();
            $jadwal = Jadwal::count();
            $kandidats = Kandidat::with(['misis'])->get();
            return view('voting', compact('kandidats', 'sudah', 'jadwal'));
        } else {
            Session::flush();
            return redirect()->route('panda.login')->with(['error' => 'Mohon maaf, anda tidak memiliki akses halaman ini']);
        }
    }

    public function pemilihPost(Request $request, Kandidat $kandidat){
        $sudah = Rekapitulasi::where('dpt_npm',Session::get('npm'))->first();
        $jadwal = Jadwal::first();
        $status_dpt = Dpt::where('npm', Session::get('npm'))->count();
        if ($status_dpt >=1) {
            if (!$sudah) {
                Rekapitulasi::create([
                    'kandidat_id'    =>  $kandidat->id,
                    'jadwal_id' =>    $jadwal->id,
                    'dpt_npm' =>    session('npm'),
                ]);
                return redirect()->route('mahasiswa.voting')->with(['sucess'  =>  'Pilihan anda berhasil disimpan, terimakasih sudah menggunakan hak suara anda!!']);
            } else {
                return redirect()->route('mahasiswa.voting')->with(['error'  =>  'Anda sudah menggunakan hak suara, dan tidak dapat menggunakan hak suara untuk kedua kalinya !!']);
            }
        } else {
            return redirect()->route('mahasiswa.voting')->with(['error'  =>  'Anda tidak terdaftar pada DPT (daftar pemilih tetap),  tidak memiliki hak suara memilih !!']);

        }


    }

    public function visiMisi(Request $request, Kandidat $kandidat)
    {
        if (Session::has('npm')) {
            $npm = Session::get('npm');
            $sudah = Rekapitulasi::where('dpt_npm', $npm)->first();
            $jadwal = Jadwal::count();
            $kandidat = Kandidat::with(['misis'])->where('id', $kandidat->id)->first();
            $allkandidats = Kandidat::get();
            return view('visi-misi', compact('kandidat', 'allkandidats', 'sudah', 'jadwal'));
        } else {
            Session::flush();
            return redirect()->route('panda.login')->with(['error' => 'Mohon maaf, anda tidak memiliki akses halaman ini']);
        }
    }

    public function verifikasiData(Request $request )
    {
            $npm = Session::get('npm');
            $sudah = Rekapitulasi::where('dpt_npm', $npm)->first();
            $jadwal = Jadwal::count();
            return view('verifikasi', compact('sudah', 'jadwal'));

    }

    public function quickCount(Request $request)
    {
        $npm = Session::get('npm');
        $kandidats = Kandidat::withCount('rekapitulasis')->get();
        return view('quick-count', compact('kandidats' ));
    }
}
