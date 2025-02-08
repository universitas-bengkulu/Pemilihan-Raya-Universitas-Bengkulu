<?php

namespace App\Http\Controllers;

use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikController extends Controller
{
    public function index(){
        $data = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
        ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
        ->select('kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua', DB::raw('count(rekapitulasis.id) as jumlah'))
        ->groupBy('kandidats.id', 'kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua')
        ->get();

        $prodis = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('dpts.prodi')
            ->groupBy('dpts.prodi')
            ->pluck('dpts.prodi')
            ->unique();

        $jenjangs = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('dpts.jenjang')
            ->groupBy('dpts.jenjang')
            ->pluck('dpts.jenjang')
            ->unique();

        $angkatans = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('dpts.angkatan')
            ->groupBy('dpts.angkatan')
            ->orderByDesc('dpts.angkatan')
            ->pluck('dpts.angkatan')
            ->unique();


        $data2 =  DB::table('rekapitulasis')
        ->leftJoin('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
        ->leftJoin('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
        ->select('kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua', DB::raw('count(rekapitulasis.id) as jumlah'))
        ->groupBy('kandidats.id', 'kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua')
        ->get();


        return view('statistik', compact('data', 'data2', 'prodis', 'jenjangs', 'angkatans'));
    }

    public function cari(Request $request)
    {
        $selectedProdi = $request->input('prodi');
        $selectedJenjang = $request->input('jenjang');
        $selectedAngkatan = $request->input('angkatan');

        $query = Rekapitulasi::query();

        if ($selectedProdi) {
            $query->whereHas('dpt', function ($subQuery) use ($selectedProdi) {
                $subQuery->where('prodi', $selectedProdi);
            });
        }

        if ($selectedJenjang) {
            $query->whereHas('dpt', function ($subQuery) use ($selectedJenjang) {
                $subQuery->where('jenjang', $selectedJenjang);
            });
        }

        if ($selectedAngkatan) {
            $query->whereHas('dpt', function ($subQuery) use ($selectedAngkatan) {
                $subQuery->where('angkatan', $selectedAngkatan);
            });
        }

        $prodis = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('dpts.prodi')
            ->groupBy('dpts.prodi')
            ->pluck('dpts.prodi')
            ->unique();

        $jenjangs = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('dpts.jenjang')
            ->groupBy('dpts.jenjang')
            ->pluck('dpts.jenjang')
            ->unique();

        $angkatans = Rekapitulasi::join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('dpts.angkatan')
            ->groupBy('dpts.angkatan')
            ->orderByDesc('dpts.angkatan')
            ->pluck('dpts.angkatan')
            ->unique();

        $data = $query->join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->select('kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua', DB::raw('count(rekapitulasis.id) as jumlah'))
            ->groupBy('kandidats.id', 'kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua')
            ->get();

        $query = DB::table('rekapitulasis')
        ->leftJoin('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
        ->leftJoin('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
        ->select('kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua', DB::raw('count(rekapitulasis.id) as jumlah'))
        ->groupBy('kandidats.id', 'kandidats.nama_calon_ketua', 'kandidats.nama_calon_wakil_ketua');

        if ($selectedProdi) {
            $query->where('dpts.prodi', $selectedProdi);
        }

        if ($selectedJenjang) {
            $query->where('dpts.jenjang', $selectedJenjang);
        }

        if ($selectedAngkatan) {
            $query->where('dpts.angkatan', $selectedAngkatan);
        }

        $data2 = $query->get();

        return view('statistik', compact('data', 'data2', 'selectedProdi', 'selectedJenjang', 'selectedAngkatan', 'prodis', 'jenjangs', 'angkatans'));
    }
}
