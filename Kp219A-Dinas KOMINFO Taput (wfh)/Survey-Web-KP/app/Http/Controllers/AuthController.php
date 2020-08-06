<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class AuthController extends Controller
{

  public function form()
    {
        return view('auths.register');
    }


    public function buatAkun(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'nik' => 'required|min:16,numeric',
        'password' => 'required|min:8',
        'confirm_password' => 'required|same:password',
      ]);

      $user = User::all();
      foreach ($user as $key => $value) {
        if ($value['nik'] == $request->nik) {
          return redirect('/daftar')->with('gagal','NIK yang anda masukkan telah terdaftar.');
        }
      }


        $user = new \App\User;
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->role = 'pengguna';
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect('/login')->with('sukses','Anda Berhasil Mendaftar, Silahkan Login.');
    }


    public function login(){
      return view('auths.login');
    }


    public function postlogin(Request $request){
      if(Auth::attempt($request->only('nik','password'))){
        return redirect('/');
      }
      $request->validate([
        'nik' => 'required|max:16',
        'password' => 'required',
    ]);
      return redirect('/login')->with('failed','username atau password anda salah.');
    }

    public function logout(){
      Auth::logout();
      return redirect('/login');
    }
}
