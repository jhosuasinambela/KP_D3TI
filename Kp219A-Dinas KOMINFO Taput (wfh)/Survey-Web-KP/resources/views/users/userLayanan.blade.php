@extends('layouts.master')
@section('content')
<br><br>
<h2>Instansi
  @foreach($instansi as $ins)
    {{$ins['nama_instansi']}}
  @endforeach
</h2>
<h3>Silahkan Pilih Layanan.</h3>

<table class="table table-dark">
  <thead>
    <th>No</th>
    <th>Nama Layanan</th>
    <th>Keterangan Layanan</th>
  </thead>
  <tbody>
    <tr>
      <?php $no=1; ?>
      @foreach($layanans as $lay)
        <td><?= $no++; ?></td>
        <td> <a href="/homeUser/instansi/{{$id}}/layanan/{{$lay['id']}}">{{$lay['nama_layanan']}}</a> </td>
        <td>{{$lay['keterangan_layanan']}}</td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection
