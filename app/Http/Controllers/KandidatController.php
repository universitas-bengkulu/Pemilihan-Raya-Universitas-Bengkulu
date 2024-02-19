<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Misi;
use App\Models\Rekapitulasi;
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

    public function detailMisi(Request $request, $kandidat){
        $misis = Misi::where('kandidat_id', $kandidat)->get();
        $data = Kandidat::where('id', $kandidat)->first();
        return view('kandidat.misi',[
            'misis' =>  $misis,
            'data' =>  $data,
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
            'foto_ketua' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'foto_wakil_ketua' => 'required|image|mimes:png,jpg,jpeg|max:2048',
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
            'foto_ketua.required' => 'Foto Calon Ketua harus diisi.',
            'foto_ketua.image' => 'Foto Calon Ketua harus berupa gambar.',
            'foto_ketua.mimes' => 'Foto Calon Ketua harus berformat PNG, JPG, atau JPEG.',
            'foto_ketua.max' => 'Ukuran Foto Calon Ketua tidak boleh melebihi 2MB.',
            'foto_wakil_ketua.required' => 'Foto Calon Wakil Ketua harus diisi.',
            'foto_wakil_ketua.image' => 'Foto Calon Wakil Ketua harus berupa gambar.',
            'foto_wakil_ketua.mimes' => 'Foto Calon Wakil Ketua harus berformat PNG, JPG, atau JPEG.',
            'foto_wakil_ketua.max' => 'Ukuran Foto Calon Wakil Ketua tidak boleh melebihi 2MB.',
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

        if ($request->hasFile('foto_ketua')) {
            $file = $request->file('foto_ketua');
            $fileName = $file->store('foto_ketuas', 'public');
            $kandidat['foto_ketua'] = $fileName;
        }

        if ($request->hasFile('foto_wakil_ketua')) {
            $file = $request->file('foto_wakil_ketua');
            $fileName = $file->store('foto_wakil_ketuas', 'public');
            $kandidat['foto_wakil_ketua'] = $fileName;
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
            'foto_ketua' => 'image|mimes:png,jpg,jpeg|max:2048',
            'foto_wakil_ketua' => 'image|mimes:png,jpg,jpeg|max:2048',
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
            'foto_ketua.required' => 'Foto Calon Ketua harus diisi.',
            'foto_ketua.image' => 'Foto Calon Ketua harus berupa gambar.',
            'foto_ketua.mimes' => 'Foto Calon Ketua harus berformat PNG, JPG, atau JPEG.',
            'foto_ketua.max' => 'Ukuran Foto Calon Ketua tidak boleh melebihi 2MB.',
            'foto_wakil_ketua.required' => 'Foto Calon Wakil Ketua harus diisi.',
            'foto_wakil_ketua.image' => 'Foto Calon Wakil Ketua harus berupa gambar.',
            'foto_wakil_ketua.mimes' => 'Foto Calon Wakil Ketua harus berformat PNG, JPG, atau JPEG.',
            'foto_wakil_ketua.max' => 'Ukuran Foto Calon Wakil Ketua tidak boleh melebihi 2MB.',
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
        if ($request->hasFile('foto_ketua')) {
            $file = $request->file('foto_ketua');
            $fileName = $file->store('foto_ketuas', 'public');
            $kandidatBaru['foto_ketua'] = $fileName;
        }

        if ($request->hasFile('foto_wakil_ketua')) {
            $file = $request->file('foto_wakil_ketua');
            $fileName = $file->store('foto_wakil_ketuas', 'public');
            $kandidatBaru['foto_wakil_ketua'] = $fileName;
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

    public function destroy(Kandidat $kandidat, Misi  $misi){

        $deleteMisi = Misi::where('kandidat_id', $kandidat->id)->delete();
        $deleteRekap = Rekapitulasi::where('kandidat_id', $kandidat->id)->delete();
        $deleteKandidat = $kandidat->delete();

        if ($deleteKandidat) {
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
    public function editMisi($misi)
    {
        $data = Misi::where('id', $misi)->first();
        return view('kandidat.edit_misi', [
            'data'  =>  $data,
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
                'url'   =>  url('/kandidat/'. $kandidat->id.'/detail_misi/'),
            ]);
        }else{
            return response()->json(['text' =>  'Oopps, misi gagal diinput']);
        }
    }

    public function storeEditMisi($kandidat, $misi, Request $request)
    {
        $rules = [
            'misi' => 'required',
        ];

        $text = [
            'misi.required' => 'Misi harus diisi.',
        ];

        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()], 422);
        }


        $update = Misi::where('id', $misi)->update(['misi' => $request->input('misi')]);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data kandidat berhasil diinput',
                'url'   =>  url('/kandidat/'. $kandidat. '/detail_misi'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data kandidat gagal diinput'
            ]);

        }
    }

    public function destroyMisi(Misi $misi)
    {
        $delete = $misi->delete();
        if ($delete) {
            $notification = array(
                'message' => 'Misi Kandidat berhasil dihapus!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Misi Kandidat gagal dihapus!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
