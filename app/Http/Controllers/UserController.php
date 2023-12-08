<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index',[
            'users'  =>  $users
        ]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required|string|max:255', // Example maximum length for the name
            'email' => 'required|email|unique:users,email|max:255', // Assuming users table and email column
            'password' => [
                'required',
                'min:8',            // Minimum 8 characters
                'max:20',           // Maximum 20 characters
                'confirmed',        // Password must be confirmed
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
                // At least 1 uppercase, 1 lowercase, 1 digit, and 1 special character
            ],
        ];
        $text = [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus memiliki 8 karakter.',
            'password.max' => 'Password maksimal harus memiliki 20 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.regex' => 'Password harus mengandung setidaknya 1 huruf besar, 1 huruf kecil, 1 angka, dan 1 karakter khusus.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $fileName = $file->store('banners', 'public');
            $user['banner'] = $fileName;
        }
        
        $create = User::create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'password'  =>  $request->password,
        ]);
        if ($create) {
            return response()->json([
                'text'  =>  'Yeay, data user berhasil diinput',
                'url'   =>  url('/user/'),
            ]);
        }else{
            return response()->json(['text' =>  'Oopps, data user gagal diinput']);
        }
    }

    public function edit(User $user){
        return view('user.edit',[
            'user'  =>  $user,
        ]);
    }

    public function update(User $user, Request $request){
        $rules = [
            'name' => 'required|string|max:255', // Example maximum length for the name
            'email' => 'required|email|unique:users,email|max:255', // Assuming users table and email column
        ];

        $text = [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }

        $update = User::where('id',$user->id)->update([
            'name'  =>  $request->name,
            'email' =>  $request->email,
        ]);
        if ($update) {
            return response()->json([
                'text'  =>  'Yeay, data user berhasil diinput',
                'url'   =>  url('/user/'),
            ]);
        }else{
            return response()->json(['text' =>  'Oopps, data user gagal diinput']);
        }
    }

    public function destroy(User $user){
        $delete = $user->delete();
        if ($delete) {
            $notification = array(
                'message' => 'User berhasil dihapus!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else {
            $notification = array(
                'message' => 'User gagal dihapus!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function updatePassword (Request $request){
        $rules = [
            'password' => [
                'required',
                'min:8',            // Minimum 8 characters
                'max:20',           // Maximum 20 characters
                'confirmed',        // Password must be confirmed
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
                // At least 1 uppercase, 1 lowercase, 1 digit, and 1 special character
            ],
        ];
        $text = [
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus memiliki 8 karakter.',
            'password.max' => 'Password maksimal harus memiliki 20 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.regex' => 'Password harus mengandung setidaknya 1 huruf besar, 1 huruf kecil, 1 angka, dan 1 karakter khusus.',
        ];
        
        $validasi = Validator::make($request->all(), $rules, $text);
        if ($validasi->fails()) {
            return response()->json(['error'  =>  0, 'text'   =>  $validasi->errors()->first()],422);
        }
        
        $updatePassword = User::where('id',$request->id)->update([
            'password'  =>  Hash::make($request->password),
        ]);

        if ($updatePassword) {
            return response()->json([
                'text'  =>  'Yeayy, password user berhasil diubah.',
                'url'   =>  url('/user/'),
            ]);
        }else {
            return response()->json(['text' =>  'Ooopps, password user gagal diubah.']);
        }
    }
}
