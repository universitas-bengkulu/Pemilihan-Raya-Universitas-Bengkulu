<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::first();
        return view('jadwal.index',[
            'jadwal' =>  $jadwal,
        ]);
    }

    public function update(Jadwal $jadwal, Request $request){
        $rules = [
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
        ];

        $text = [
            'tanggal.required' => 'Tanggal harus diisi.',
            'waktu_mulai.required' => 'Waktu Mulai harus diisi.',
            'waktu_selesai.required' => 'Waktu Selesai harus diisi.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }

        $update = Jadwal::where('id',$jadwal->id)->update([
            'tanggal' => $request->input('tanggal'),
            'waktu_mulai' => $request->input('waktu_mulai'),
            'waktu_selesai' => $request->input('waktu_selesai'),
        ]);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, Data jadwal berhasil diubah',
                'url'   =>  url('/jadwal/'),
            ]);
        }else{ 
            return response()->json(['text' =>  'Oopps, Data jadwal gagal diubah']);
        }
    }
}
