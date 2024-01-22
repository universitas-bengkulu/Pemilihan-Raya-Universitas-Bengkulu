<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('contact.index', [
            'contacts' =>  $contacts,
        ]);
    }

    public function create()
    {
        $jadwals = Jadwal::get();
        return view('contact.create', [
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

        $contact = [
            'jadwal_id' => $request->input('jadwal_id'),
            'email' => $request->input('email'),
            'no_tlp' => $request->input('no_tlp'),
            'marquee' => $request->input('marquee'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),

        ];



        $create = Contact::create($contact);
        if ($create) {
            return response()->json([
                'text'  =>  'Yeay, data Contact berhasil diinput',
                'url'   =>  url('/contact/'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data contact gagal diinput']);
        }
    }

    public function edit(Contact $contact)
    {
        $jadwals = Jadwal::get();
        return view('contact.edit', [
            'jadwals'  =>  $jadwals,
            'contact'  =>  $contact,

        ]);
    }

    public function update(Contact $contact, Request $request)
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

        $contactBaru = [
            'jadwal_id' => $request->input('jadwal_id'),
            'email' => $request->input('email'),
            'no_tlp' => $request->input('no_tlp'),
            'marquee' => $request->input('marquee'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
        ];



        $update = Contact::where('id', $contact->id)->update($contactBaru);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data contact berhasil diinput',
                'url'   =>  url('/contact/'),
            ]);
        } else {
            return response()->json(['text' =>  'Oopps, data contact gagal diinput']);
        }
    }

    public function destroy(Contact $contact)
    {
        $delete = $contact->delete();
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
