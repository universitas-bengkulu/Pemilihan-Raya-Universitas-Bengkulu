<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use App\Models\Contact;
use Illuminate\Http\Request;

class CekDptController extends Controller
{
    public function cekDpt(){
        $contact = Contact::orderBy('id', 'desc')->first();
        $showData  =false;
        return view('cek_dpt', compact('contact' , 'showData'));
    }

    public function cekStatusDpt(Request $request){
        $dataDpt = Dpt::where('npm',$request->npm)->first();
        $showData  = true;

        return view('cek_dpt', compact('dataDpt', 'showData'));
    }
}
