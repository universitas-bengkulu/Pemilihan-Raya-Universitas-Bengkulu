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
        $rekapitulasis = Rekapitulasi::with(['kandidat','dpt'])->orderBy('created_at','desc')->paginate(10);
        return view('rekapitulasi.index',[
            'rekapitulasis' =>  $rekapitulasis,
        ]);
    }

    public function downloadExcel()
    {
        return Excel::download(new DataExport, 'rekapitulasi.xlsx');
    }

    public function rekapitulasiCari(Request $request){
        $nama_lengkap = $request->input('nama_lengkap');

        $rekapitulasis = Rekapitulasi::with(['kandidat', 'dpt'])
            ->whereHas('dpt', function ($query) use ($nama_lengkap) {
                $query->where('nama_lengkap', 'like', '%' . $nama_lengkap . '%')
                      ->orWhere('npm', 'like', '%' . $nama_lengkap . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('rekapitulasi.index',[
            'rekapitulasis' =>  $rekapitulasis,
        ]);
    }

    public function resetRekapSuara()
    {
        $rekapitulasis = Rekapitulasi::with(['kandidat', 'dpt'])->count();

        return view('rekapitulasi.reset', [
            'rekapitulasis' =>  $rekapitulasis,
        ]);
    }

    public function RekapSuaraDestroy()
    {
        $delete = Rekapitulasi::truncate();

        if ($delete) {
            $notification = array(
                'message' => 'Rekapitulasi Suara berhasil direset!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Rekapitulasi Suara gagal dihapus!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
