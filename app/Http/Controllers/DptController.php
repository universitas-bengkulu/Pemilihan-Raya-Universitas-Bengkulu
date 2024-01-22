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

    public function store(Request $request)
    {
        $rules = [
            'jadwal_id' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'marquee' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ];

        $text = [
            'jadwal_id.required' => 'Jadwal harus diisi.',
            'email.required' => 'Email harus diisi.',
            'no_tlp.required' => 'Nomor Whatsapp harus diisi.',
            'marquee.required' => 'Running Text harus diisi.',
            'facebook.required' => 'Link Facebook harus diisi.',
            'instagram.required' => 'Link Instagram harus diisi.',
            'twitter.required' => 'Link Twitter harus diisi.',

        ];

        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()], 422);
        }

        $dpt = [
            'jadwal_id' => $request->input('jadwal_id'),
            'email' => $request->input('email'),
            'no_tlp' => $request->input('no_tlp'),
            'marquee' => $request->input('marquee'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),

        ];



        $create = Dpt::create($dpt);
        if ($create) {
            return response()->json([
                'text'  =>  'Yeay, data Dpt berhasil diinput',
                'url'   =>  url('/dpt/'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data dpt gagal diinput']);
        }
    }

    public function edit(Dpt $dpt)
    {
        $jadwals = Jadwal::get();
        return view('dpt.edit', [
            'jadwals'  =>  $jadwals,
            'dpt'  =>  $dpt,

        ]);
    }

    public function update(Dpt $dpt, Request $request)
    {
        $rules = [
            'jadwal_id' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'marquee' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
        ];

        $text = [
            'jadwal_id.required' => 'Jadwal harus diisi.',
            'email.required' => 'Email harus diisi.',
            'no_tlp.required' => 'Nomor Whatsapp harus diisi.',
            'marquee.required' => 'Running Text harus diisi.',
            'facebook.required' => 'Link Facebook harus diisi.',
            'instagram.required' => 'Link Instagram harus diisi.',
            'twitter.required' => 'Link Twitter harus diisi.',

        ];

        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()], 422);
        }

        $dptBaru = [
            'jadwal_id' => $request->input('jadwal_id'),
            'email' => $request->input('email'),
            'no_tlp' => $request->input('no_tlp'),
            'marquee' => $request->input('marquee'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
        ];



        $update = Dpt::where('id', $dpt->id)->update($dptBaru);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data dpt berhasil diinput',
                'url'   =>  url('/dpt/'),
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
