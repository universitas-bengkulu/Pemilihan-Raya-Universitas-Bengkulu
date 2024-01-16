<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use Illuminate\Http\Request;

class CekDptController extends Controller
{
    public function cekDpt(){
        return view('cek_dpt');
    }

    public function cekStatusDpt(Request $request){
        $dataDpt = Dpt::where('npm',$request->npm)->first();
        return $dataDpt;
    }
}
