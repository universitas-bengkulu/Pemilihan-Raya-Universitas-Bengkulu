<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use App\Models\Jadwal;
use App\Models\Kandidat;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlahKandidat = Kandidat::count();
        $jadwalPemilihan = Jadwal::first();
        $totalPemilih = Rekapitulasi::count();
        // Menghitung total data dalam tabel dpts
        $totalDpts = Dpt::count();

        // Menghitung total pemilih yang belum memilih
        $totalBelumMemilih = $totalDpts - $totalPemilih;

        $rekapitulasiData = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->select('kandidats.nomor_urut','kandidats.nama_calon_ketua','kandidats.nama_calon_wakil_ketua', DB::raw('count(rekapitulasis.id) as jumlah'))
            ->groupBy('kandidats.id')
            ->get();

        return view('dashboard', [
            'jadwalPemilihan' => $jadwalPemilihan,
            'jumlahKandidat' => $jumlahKandidat,
            'jadwalPemilihan' => $jadwalPemilihan,
            'totalDpts' => $totalDpts,
            'totalBelumMemilih' => $totalBelumMemilih,
            // 'persentasePemilih1' => $persentasePemilih1,
            // 'persentasePemilih3' => $persentasePemilih3,
            'rekapitulasiData' => $rekapitulasiData,
            'totalPemilih' => $totalPemilih,
        ]);
    }
}
