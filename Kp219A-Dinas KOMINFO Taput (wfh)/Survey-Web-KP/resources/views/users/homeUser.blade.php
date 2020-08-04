@extends('layouts.master')
@section('content')
<br><br>

  <h2> <b>Standar Kepuasan Masyarakat(SKM).</b> </h2>
  <h3>Silahkan Pilih Instansi untuk melakukan Survey.</h3>

  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif

  <table class="table table-dark">
    <thead>
      <th>No</th>
      <th>Nama Instansi</th>
      <th>Nama Pimpinan</th>
      <th>Alamat</th>
      <th>Keterangan</th>
    </thead>
    <tbody>
      <tr>
        <?php $no=1; ?>
        @foreach($instansi as $ins)
          <td><?= $no++; ?></td>
          <td><a href="/homeUser/instansi/{{$ins['id']}}">{{ $ins['nama_instansi'] }}</a></td>
          <td>{{ $ins['nama_pimpinan'] }}</td>
          <td>{{ $ins['alamat'] }}</td>
          <td>{{ $ins['keterangan'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
