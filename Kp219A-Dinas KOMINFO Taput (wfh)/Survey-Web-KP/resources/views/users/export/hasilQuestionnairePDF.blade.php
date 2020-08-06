<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <h2>Tabel Hasil Survey</h2>

    <p>Nama Instansi : {{$quest->instansi->nama_instansi}}</p>
    <p>Nama Layanan : {{$quest->layanan->nama_layanan}}</p>
    <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kuesioner</th>
          <th>Pertanyaan</th>
          <th style="width:20px;">Jumlah Responden</th>
          <th colspan="4">Pilihan Jawaban</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        @foreach($quest->questions as $question)
        <tr>
          <td><?=$no++; ?></td>
          <td>{{ $quest['title'] }}</td>
          <td>{{ $question->question }}</td>
          <td style="width:150px;">{{$question->responses->count()}}</td>
            @foreach($question->answers as $answer)
            <td>{{$answer->answer}} : {{$answer->responses()->count()}} = {{ intval($answer->responses->count() * 100 / $question->responses->count()) }} %</td>
            @endforeach
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
