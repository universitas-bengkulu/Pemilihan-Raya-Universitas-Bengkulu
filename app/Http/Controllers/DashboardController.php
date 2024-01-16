<?php

namespace App\Http\Controllers;

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
        $jumlahPemilih1 = Rekapitulasi::where('kandidat_id', 1)->count();
        $jumlahPemilih3 = Rekapitulasi::where('kandidat_id', 3)->count();

        $rekapitulasiData = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->select('kandidats.nomor_urut', DB::raw('count(rekapitulasis.id) as jumlah'))
            ->groupBy('kandidats.id')
            ->get();

        // if ($totalPemilih > 0) {
        //     $persentasePemilih1 = ($jumlahPemilih1 / $totalPemilih) * 100;
        //     $persentasePemilih3 = ($jumlahPemilih3 / $totalPemilih) * 100;
        // } else {
        //     $persentasePemilih1 = 0; // Hindari pembagian oleh nol
        // }

        return view('dashboard', [
            'jadwalPemilihan' => $jadwalPemilihan,
            'jumlahKandidat' => $jumlahKandidat,
            'jadwalPemilihan' => $jadwalPemilihan,
            'jumlahPemilih1' => $jumlahPemilih1,
            'jumlahPemilih3' => $jumlahPemilih3,
            // 'persentasePemilih1' => $persentasePemilih1,
            // 'persentasePemilih3' => $persentasePemilih3,
            'rekapitulasiData' => $rekapitulasiData,
            'totalPemilih' => $totalPemilih,
        ]);
    }
}
