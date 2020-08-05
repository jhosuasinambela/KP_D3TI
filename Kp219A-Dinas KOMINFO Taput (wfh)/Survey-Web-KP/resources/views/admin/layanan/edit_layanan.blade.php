@extends('layouts.master')
@section('content')
<h1>Edit layanan</h1>

<form action="/instansi/layanan/{{$layanan['id']}}/update_layanan" method="POST">
  {{csrf_field()}}
  <div class="form-group hidden">
    <label for="namaLayanan">Nama Layanan</label>
    <input name="instansi_id" type="text" class="form-control" id="namaLayanan" value="{{$layanan['instansi_id']}}" required>
  </div>

  <div class="form-group">
    <label for="namaLayanan">Nama Layanan</label>
    <input name="nama_layanan" type="text" class="form-control" id="namaLayanan" value="{{$layanan['nama_layanan']}}" required>
  </div>

  <div class="form-group">
    <label for="keteranganLayanan">Keterangan Layanan</label>
    <textarea name="keterangan_layanan" type="text" class="form-control" id="keteranganLayanan" value="" required>{{$layanan['keterangan_layanan']}}</textarea>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Edit</button>
  </div>
</form>

@endsection
