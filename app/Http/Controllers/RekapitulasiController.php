<?php

namespace App\Http\Controllers;

use App\Exports\DataExport;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RekapitulasiController extends Controller
{
    public function index(){
        $rekapitulasis = Rekapitulasi::with(['kandidat'])->orderBy('created_at','desc')->paginate(10);
        return view('rekapitulasi.index',[
            'rekapitulasis' =>  $rekapitulasis,
        ]);
    }

    public function downloadExcel()
    {
        return Excel::download(new DataExport, 'rekapitulasi.xlsx');
    }
}
