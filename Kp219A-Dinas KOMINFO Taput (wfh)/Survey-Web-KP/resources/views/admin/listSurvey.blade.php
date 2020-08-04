@extends('layouts.master')
@section('content')
<h1>Daftar Survey Kepuasan Masyarakat</h1>
<a href="/questionnaires/create" class="btn btn-dark">Buat Kuesioner Baru</a>
<br><br>
@if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{ session('sukses') }}
  </div>
@endif





<div class="panel">
  <div class="panel-heading">Daftar Kuesioner</div>
  <div class="panel-body">
        @foreach($questionnaires as $key => $questionnaire)
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>
            <div class="mt-2">
              <small>Instansi : {{$questionnaire->instansi->nama_instansi}}</small>
            </div>
            <div class="mt-2">
              <small>Layanan : {{ $questionnaire->layanan->nama_layanan }}</small>
            </div>
            <div class="mt-2">
              <small>Tujuan : {{ $questionnaire->purpose }}</small>
            </div>
            <div class="mt-2">
              <small>Tanggal Berakhir : <b class="text-success">{{ $questionnaire->due_date }}</b></small>
            </div>

            <?php

            $tanggal1 = new DateTime($questionnaire->due_date);
            $tanggal2 = new DateTime();

            $perbedaan = $tanggal2->diff($tanggal1)->format("%a");


             ?>
            <small class="text-danger" style="position:absolute; background: #ddd;bottom:0; right:0;">Sisa {{$perbedaan}} Hari lagi</small>
            <div class="mt-2">
              <small> <b>Share Url</b> </small>
              <p>
                <a href="{{ $questionnaire->publicPath() }}">{{ $questionnaire->publicPath() }}</a>
              </p>
            </div>
            <div class="col-md-2">
              <a href="/questionnaires/edit/{{$questionnaire->id}}" class="btn btn-warning">Edit</a>
            </div>

            <div class="form-group div-col-md-2">
              <form action="/questionnaires/{{ $questionnaire->id }}" method="post">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-md btn-danger">Hapus</button>
              </form>
            </div>
          </li>
        </ul>
      @endforeach
    </div>
</div>
@endsection
