<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Models\JadwalKegiatan;
use Illuminate\Support\Facades\Validator;

class JadwalKegiatanController extends Controller
{
    public function index()
    {
        $jadwal_kegiatans = JadwalKegiatan::get();
        return view('jadwal_kegiatan.index', [
            'jadwal_kegiatans' =>  $jadwal_kegiatans,
        ]);
    }

    public function create()
    {
        $jadwals = Jadwal::get();
        return view('jadwal_kegiatan.create', [
            'jadwals' =>  $jadwals,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'jadwal_id' => 'required',
            'tgl' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $text = [
            'jadwal_id.required' => 'Jadwal harus diisi.',
            'tgl.required' => 'Tanggal Kegiatan harus diisi.',
            'judul.required' => 'Judul Kegiatan harus diisi.',
            'deskripsi.required' => 'Deskripsi Kegiatan harus diisi.',

        ];

        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()], 422);
        }

        $jadwal_kegiatan = [
            'jadwal_id' => $request->input('jadwal_id'),
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tgl' => $request->input('tgl'),

        ];

        $create = JadwalKegiatan::create($jadwal_kegiatan);
        if ($create) {
            return response()->json([
                'text'  =>  'Yeay, data Jadwal Kegiatan berhasil diinput',
                'url'   =>  url('/jadwal_kegiatan/'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data jadwal kegiatan gagal diinput']);
        }
    }

    public function edit(JadwalKegiatan $jadwal_kegiatan)
    {
        $jadwals = Jadwal::get();
        return view('jadwal_kegiatan.edit', [
            'jadwals'  =>  $jadwals,
            'jadwal_kegiatan'  =>  $jadwal_kegiatan,

        ]);
    }

    public function update(JadwalKegiatan $jadwal_kegiatan, Request $request)
    {
        $rules = [
            'jadwal_id' => 'required',
            'tgl' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $text = [
            'jadwal_id.required' => 'Jadwal harus diisi.',
            'tgl.required' => 'Tanggal Kegiatan harus diisi.',
            'judul.required' => 'Judul Kegiatan harus diisi.',
            'deskripsi.required' => 'Deskripsi Kegiatan harus diisi.',

        ];

        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()], 422);
        }

        $jadwal_kegiatanBaru = [
            'jadwal_id' => $request->input('jadwal_id'),
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tgl' => $request->input('tgl'),
        ];



        $update = JadwalKegiatan::where('id', $jadwal_kegiatan->id)->update($jadwal_kegiatanBaru);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data jadwal kegiatan berhasil diinput',
                'url'   =>  url('/jadwal_kegiatan/'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data jadwal kegiatan gagal diinput']);
        }
    }

    public function destroy(JadwalKegiatan $jadwal_kegiatan)
    {
        $delete = $jadwal_kegiatan->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Data berhasil dihapus!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Data gagal dihapus!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
