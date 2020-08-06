<?php

namespace App\Http\Controllers;
use DB;
use App\Layanan;
use App\Instansi;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function create_layanan($id){
      $layanan = Layanan::all()->where('instansi_id','=',$id);
      $instansi = Instansi::find($id);

      return view('admin.layanan.show',['instansi'=>$instansi,'layanans'=>$layanan]);
    }


    public function store_layanan(Request $request, $id){
      DB::table('layanan')->insert([
        'instansi_id' => $id,
        'nama_layanan' => $request->nama_layanan,
        'keterangan_layanan' => $request->keterangan_layanan
      ]);
      $layanan = \App\Layanan::all();

      return redirect('/instansi/layanan/'.$id.'/create_layanan')->with('sukses','Data Berhasil ditambahkan');
    }

    public function edit_layanan($id){
      $instansi = Instansi::all();
      $layanan = Layanan::find($id);

      return view('admin.layanan.edit_layanan',['layanan'=>$layanan]);
    }

    public function update_layanan(Request $request, $id){
      $layanan = Layanan::find($id);
      $layanan->update($request->all());

      return redirect('/instansi/layanan/'.$layanan['instansi_id'].'/create_layanan')->with('sukses','Data Berhasil diedit');
    }

    public function delete_layanan($id){
      $layanan = Layanan::find($id);
      $layanan->delete();

      return redirect('/instansi/layanan/'.$layanan['instansi_id'].'/create_layanan')->with('sukses','Data Berhasil dihapus');
    }


    public function findLayananName(Request $request){
      $data = Layanan::select("nama_layanan",'id')->where("instansi_id",$request->id)->get();

      return response()->json($data);
    }
}
