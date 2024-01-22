<?php

namespace App\Http\Controllers;

use App\Models\Dpt;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DptController extends Controller
{
    public function index()
    {
        $dpts = Dpt::paginate(10);
        return view('dpt.index', [
            'dpts' =>  $dpts,
        ]);
    }

    public function create()
    {
        $jadwals = Jadwal::get();
        return view('dpt.create', [
            'jadwals' =>  $jadwals,
        ]);
    }

    public function edit(Dpt $dpt)
    {
        return view('dpt.edit', [
            'dpt'  =>  $dpt,

        ]);
    }
    public function update(Dpt $dpt, Request $request)
    {
        $rules = [
            // 'npm' => 'required',
            'nama' => 'required',
            'jenjang' => 'required',
            'angkatan' => 'required',
            'prodi' => 'required',
            'singkatan_fakultas' => 'required',
            'fakultas' => 'required',
        ];

        $text = [
            // 'npm.required' => 'NPM harus diisi.',
            'nama.required' => 'Nama harus diisi.',
            'jenjang.required' => 'Jenjang harus diisi.',
            'angkatan.required' => 'Angkatan harus diisi.',
            'prodi.required' => 'Program Studi  harus diisi.',
            'fakultas.required' => 'Nama Fakultas harus diisi.',
            'singkatan_fakultas.required' => 'Singkatan Fakultas harus diisi.',

        ];

        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()], 422);
        }

        $dptBaru = [
            // 'npm' => $request->input('npm'),
            'nama_lengkap' => $request->input('nama'),
            'jenjang' => $request->input('jenjang'),
            'angkatan' => $request->input('angkatan'),
            'prodi' => $request->input('prodi'),
            'nama_singkat_fakultas' => $request->input('singkatan_fakultas'),
            'nama_lengkap_fakultas' => $request->input('fakultas'),
        ];



        $update = Dpt::where('npm', $dpt->npm)->update($dptBaru);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data dpt berhasil diinput',
                'url'   =>  url('/data-dpt/'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data dpt gagal diinput']);
        }
    }

    public function destroy(Dpt $dpt)
    {
        $delete = $dpt->delete();
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

    public function dptCari(Request $request){
        $nama_lengkap = $request->input('nama_lengkap');

        $dpts = Dpt::where('nama_lengkap', 'like', '%' . $nama_lengkap . '%')
                ->paginate(10);

        return view('dpt.index',[
            'dpts' =>  $dpts,
        ]);
    }
}
