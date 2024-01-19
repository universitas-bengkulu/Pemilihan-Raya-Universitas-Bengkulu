<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use App\Models\Contact;
use Illuminate\Http\Request;

class CekDptController extends Controller
{
    public function cekDpt(){
        $contact = Contact::orderBy('id', 'desc')->first();

        return view('cek_dpt', compact('contact'));
    }

    public function cekStatusDpt(Request $request){
        $dataDpt = Dpt::where('npm',$request->npm)->first();
        return $dataDpt;
    }
}
