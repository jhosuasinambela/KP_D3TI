<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstansiController extends Controller
{
  public function instansi(Request $request){
    if ($request->has('cari')) {
      $dataInstansi = \App\Instansi::where('nama_instansi','LIKE','%'.$request->cari.'%')->get();
    }else {
      $dataInstansi = \App\Instansi::all();
    }
    return view('admin.instansi.show',['instansi'=>$dataInstansi]);
  }

  public function create_instansi(Request $request)
  {
    \App\Instansi::create($request->all());
    return redirect('/instansi')->with('sukses','Data Berhasil ditambahkan');
  }

  public function edit_instansi($id)
  {
    $instansi = \App\Instansi::find($id);
    return view('admin.instansi.editInstansi',['instansi'=>$instansi]);
  }

  public function update_instansi(Request $request, $id)
  {
    $instansi = \App\Instansi::find($id);
    $instansi->update($request->all());
    return redirect('/instansi')->with('sukses','Data Berhasil di Update.');
  }

  public function delete_instansi($id)
  {
    $instansi = \App\Instansi::find($id);
    $instansi->layanan()->delete();
    $instansi->delete($id);
    return redirect('/instansi')->with('sukses','Data Berhasil Dihapus');
  }
}
