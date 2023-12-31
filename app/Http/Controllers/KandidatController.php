<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Misi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KandidatController extends Controller
{
    public function index(){
        $kandidats = Kandidat::with(['misis'])->withCount(['misis'])->get();
        return view('kandidat.index',[
            'kandidats' =>  $kandidats,
        ]);
    }

    public function create(){
        return view('kandidat.create');
    }

    public function store(Request $request){
        $rules = [
            'nomor_urut' => 'required',
            'visi' => 'required',
            'banner' => 'required|image|mimes:png,jpg,jpeg|max:2048', // Hanya menerima gambar PNG, JPG, atau JPEG dengan ukuran maksimal 2MB
            'nama_calon_ketua' => 'required',
            'npm_calon_ketua' => 'required',
            'jenis_kelamin_calon_ketua' => 'required',
            'prodi_calon_ketua' => 'required',
            'jenjang_prodi_calon_ketua' => 'required',
            'nomor_hp_calon_ketua' => 'required',
            'nama_calon_wakil_ketua' => 'required',
            'npm_calon_wakil_ketua' => 'required',
            'jenis_kelamin_calon_wakil_ketua' => 'required',
            'prodi_calon_wakil_ketua' => 'required',
            'jenjang_prodi_calon_wakil_ketua' => 'required',
            'nomor_hp_calon_wakil_ketua' => 'required',
        ];

        $text = [
            'nomor_urut.required' => 'Nomor Urut harus diisi.',
            'nama_calon_ketua.required' => 'Nama Calon Ketua harus diisi.',
            'npm_calon_ketua.required' => 'NPM Calon Ketua harus diisi.',
            'jenis_kelamin_calon_ketua.required' => 'Jenis Kelamin Calon Ketua harus diisi.',
            'prodi_calon_ketua.required' => 'Program Studi Calon Ketua harus diisi.',
            'jenjang_prodi_calon_ketua.required' => 'Jenjang Program Studi Calon Ketua harus diisi.',
            'nomor_hp_calon_ketua.required' => 'Nomor HP Calon Ketua harus diisi.',
            'nama_calon_wakil_ketua.required' => 'Nama Calon Wakil Ketua harus diisi.',
            'npm_calon_wakil_ketua.required' => 'NPM Calon Wakil Ketua harus diisi.',
            'jenis_kelamin_calon_wakil_ketua.required' => 'Jenis Kelamin Calon Wakil Ketua harus diisi.',
            'prodi_calon_wakil_ketua.required' => 'Program Studi Calon Wakil Ketua harus diisi.',
            'jenjang_prodi_calon_wakil_ketua.required' => 'Jenjang Program Studi Calon Wakil Ketua harus diisi.',
            'nomor_hp_calon_wakil_ketua.required' => 'Nomor HP Calon Wakil Ketua harus diisi.',
            'visi.required' => 'Visi harus diisi.',
            'banner.required' => 'Banner harus diisi.',
            'banner.image' => 'Banner harus berupa gambar.',
            'banner.mimes' => 'Banner harus berformat PNG, JPG, atau JPEG.',
            'banner.max' => 'Ukuran banner tidak boleh melebihi 2MB.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }

        $kandidat = [
            'nomor_urut' => $request->input('nomor_urut'),
            'visi' => $request->input('visi'),
            'nama_calon_ketua' => $request->input('nama_calon_ketua'),
            'npm_calon_ketua' => $request->input('npm_calon_ketua'),
            'jenis_kelamin_calon_ketua' => $request->input('jenis_kelamin_calon_ketua'),
            'prodi_calon_ketua' => $request->input('prodi_calon_ketua'),
            'jenjang_prodi_calon_ketua' => $request->input('jenjang_prodi_calon_ketua'),
            'nomor_hp_calon_ketua' => $request->input('nomor_hp_calon_ketua'),
            'nama_calon_wakil_ketua' => $request->input('nama_calon_wakil_ketua'),
            'npm_calon_wakil_ketua' => $request->input('npm_calon_wakil_ketua'),
            'jenis_kelamin_calon_wakil_ketua' => $request->input('jenis_kelamin_calon_wakil_ketua'),
            'prodi_calon_wakil_ketua' => $request->input('prodi_calon_wakil_ketua'),
            'jenjang_prodi_calon_wakil_ketua' => $request->input('jenjang_prodi_calon_wakil_ketua'),
            'nomor_hp_calon_wakil_ketua' => $request->input('nomor_hp_calon_wakil_ketua'),
        ];

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $fileName = $file->store('banners', 'public');
            $kandidat['banner'] = $fileName;
        }
        
        $create = Kandidat::create($kandidat);
        if ($create) {
            return response()->json([
                'text'  =>  'Yeay, data kandidat berhasil diinput',
                'url'   =>  url('/kandidat/'),
            ]);
        }else{
            return response()->json(['text' =>  'Oopps, data kandidat gagal diinput']);
        }
    }

    public function edit(Kandidat $kandidat){
        return view('kandidat.edit',[
            'kandidat'  =>  $kandidat,
        ]);
    }

    public function update(Kandidat $kandidat, Request $request){
        $rules = [
            'nomor_urut' => 'required',
            'visi' => 'required',
            'banner' => 'image|mimes:png,jpg,jpeg|max:2048', // Hanya menerima gambar PNG, JPG, atau JPEG dengan ukuran maksimal 2MB
            'nama_calon_ketua' => 'required',
            'npm_calon_ketua' => 'required',
            'jenis_kelamin_calon_ketua' => 'required',
            'prodi_calon_ketua' => 'required',
            'jenjang_prodi_calon_ketua' => 'required',
            'nomor_hp_calon_ketua' => 'required',
            'nama_calon_wakil_ketua' => 'required',
            'npm_calon_wakil_ketua' => 'required',
            'jenis_kelamin_calon_wakil_ketua' => 'required',
            'prodi_calon_wakil_ketua' => 'required',
            'jenjang_prodi_calon_wakil_ketua' => 'required',
            'nomor_hp_calon_wakil_ketua' => 'required',
        ];

        $text = [
            'nomor_urut.required' => 'Nomor Urut harus diisi.',
            'nama_calon_ketua.required' => 'Nama Calon Ketua harus diisi.',
            'npm_calon_ketua.required' => 'NPM Calon Ketua harus diisi.',
            'jenis_kelamin_calon_ketua.required' => 'Jenis Kelamin Calon Ketua harus diisi.',
            'prodi_calon_ketua.required' => 'Program Studi Calon Ketua harus diisi.',
            'jenjang_prodi_calon_ketua.required' => 'Jenjang Program Studi Calon Ketua harus diisi.',
            'nomor_hp_calon_ketua.required' => 'Nomor HP Calon Ketua harus diisi.',
            'nama_calon_wakil_ketua.required' => 'Nama Calon Wakil Ketua harus diisi.',
            'npm_calon_wakil_ketua.required' => 'NPM Calon Wakil Ketua harus diisi.',
            'jenis_kelamin_calon_wakil_ketua.required' => 'Jenis Kelamin Calon Wakil Ketua harus diisi.',
            'prodi_calon_wakil_ketua.required' => 'Program Studi Calon Wakil Ketua harus diisi.',
            'jenjang_prodi_calon_wakil_ketua.required' => 'Jenjang Program Studi Calon Wakil Ketua harus diisi.',
            'nomor_hp_calon_wakil_ketua.required' => 'Nomor HP Calon Wakil Ketua harus diisi.',
            'visi.required' => 'Visi harus diisi.',
            'banner.image' => 'Banner harus berupa gambar.',
            'banner.mimes' => 'Banner harus berformat PNG, JPG, atau JPEG.',
            'banner.max' => 'Ukuran banner tidak boleh melebihi 2MB.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }

        $kandidatBaru = [
            'nomor_urut' => $request->input('nomor_urut'),
            'visi' => $request->input('visi'),
            'nama_calon_ketua' => $request->input('nama_calon_ketua'),
            'npm_calon_ketua' => $request->input('npm_calon_ketua'),
            'jenis_kelamin_calon_ketua' => $request->input('jenis_kelamin_calon_ketua'),
            'prodi_calon_ketua' => $request->input('prodi_calon_ketua'),
            'jenjang_prodi_calon_ketua' => $request->input('jenjang_prodi_calon_ketua'),
            'nomor_hp_calon_ketua' => $request->input('nomor_hp_calon_ketua'),
            'nama_calon_wakil_ketua' => $request->input('nama_calon_wakil_ketua'),
            'npm_calon_wakil_ketua' => $request->input('npm_calon_wakil_ketua'),
            'jenis_kelamin_calon_wakil_ketua' => $request->input('jenis_kelamin_calon_wakil_ketua'),
            'prodi_calon_wakil_ketua' => $request->input('prodi_calon_wakil_ketua'),
            'jenjang_prodi_calon_wakil_ketua' => $request->input('jenjang_prodi_calon_wakil_ketua'),
            'nomor_hp_calon_wakil_ketua' => $request->input('nomor_hp_calon_wakil_ketua'),
        ];

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $fileName = $file->store('banners', 'public');
            $kandidatBaru['banner'] = $fileName;
        }
        
        $update = Kandidat::where('id',$kandidat->id)->update($kandidatBaru);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data kandidat berhasil diinput',
                'url'   =>  url('/kandidat/'),
            ]);
        }else{
            return response()->json(['text' =>  'Oopps, data kandidat gagal diinput']);
        }
    }

    public function destroy(Kandidat $kandidat){
        $delete = $kandidat->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Kandidat berhasil dihapus!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else {
            $notification = array(
                'message' => 'Kandidat gagal dihapus!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function createMisi(Kandidat $kandidat){
        return view('kandidat.create_misi',[
            'kandidat'  =>  $kandidat,
        ]);
    }

    public function storeMisi(Kandidat $kandidat,Request $request){
        $rules = [
            'misi' => 'required',
        ];

        $text = [
            'misi.required' => 'Misi harus diisi.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }
        
        $create = Misi::create([
            'kandidat_id'   =>  $kandidat->id,
            'misi' => $request->input('misi'),
        ]);

        if ($create) {
            return response()->json([
                'text'  =>  'Yeay, misi berhasil diinput',
                'url'   =>  url('/kandidat/'),
            ]);
        }else{
            return response()->json(['text' =>  'Oopps, misi gagal diinput']);
        }
    }
}
