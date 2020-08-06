@extends('layouts.master')
@section('content')
<br><br>

<h2>Layanan

</h2>
<h3>Silahkan Pilih Survey.</h3>


  <table class="table table-dark">
    <thead>
      <th>No</th>
      <th>Judul Survey</th>
      <th>Tujuan Survey</th>
    </thead>
    <tbody>
      <tr>
        <?php $no=1; ?>
          @foreach($questionnaires as $questionnaire)

            <td><?= $no++; ?></td>
            <?php
            $questionnaire->load("surveys");
             ?>


            <td> <a href="{{$questionnaire->publicPath()}}">{{$questionnaire['title']}}</a> </td>
            
            <td>{{$questionnaire['purpose']}}</td>
        </tr>
          @endforeach
    </tbody>
  </table>

@endsection
