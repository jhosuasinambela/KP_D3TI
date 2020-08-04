@extends('layouts.master')
@section('content')

<div class="container-fluid">
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <h1>{{ $questionnaire->title }}</h1>
      <a class="btn btn-primary" href="/questionnaires/{{ $questionnaire->id }}/questions/create">Buat Pertanyaan</a>
      <a class="btn btn-primary" href="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}">Lakukan Survey</a>
      <a class="btn btn-primary" href="/questionnaires/{{$questionnaire->id}}/export">Export Excel</a>
      <a class="btn btn-primary" href="/questionnaires/{{$questionnaire->id}}/exportPDF">Export PDF</a>
    </div>
  </div>

      <?php $no=1; ?>
    @foreach($questionnaire->questions as $question)
      @if($no % 2 == 0)
          <div class="col-md-6">
            <!-- PANEL SCROLLING -->
            <div id="panel-scrolling-demo" class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">{{$no++}}.{{ $question->question }}</h3>
              </div>
                  <div class="panel-body" style="overflow: hidden; width: auto; height: 275px;">
                    <ul class="list-group">
                      @foreach($question->answers as $answer)
                        <li class="list-group-item d-flex justify-content-betweeen">
                          <div class="">{{ $answer->answer }}</div>

                          @if($question->responses->count())
                          <div class="">{{ intval($answer->responses->count() * 100 / $question->responses->count()) }}%</div>
                          @endif
                          <div class="">
                            @if($answer->responses()->count() == 0)
                            <small class="text-success">Belum ada respon.</small>
                            @else
                            {{$answer->responses()->count()}} orang
                            @endif
                          </div>
                        </li>
                      @endforeach
                      <div class="">{{ $question->responses->count() }} orang</div> <!-- Jumlah Orang yang melakukkan Survey -->
                    </ul>
                  </div>
              <div class="panel-footer">
                <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
                  @method('DELETE')
                  @csrf

                  <button type="submit" class="btn btn-sm btn-danger col-md-5">Hapus Pertanyaan</button>
                </form>
                  <a href="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}/edit" class="btn btn-sm btn-warning col-md-5">Edit Pertanyaan</a>
              </div>
           </div>
            <!-- END PANEL SCROLLING -->
        </div>
      @elseif($no % 2 == 1)
      <div class="col-md-6">
				<!-- PANEL NO CONTROLS -->
				<div id="panel-scrolling-demo" class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">{{$no++}}.{{ $question->question }}</h3>
					</div>

					<div class="panel-body" style="overflow: hidden; width: auto; height: 275px;">
            @foreach($question->answers as $answer)
            <li class="list-group-item d-flex justify-content-betweeen">
              <div class="">{{ $answer->answer }}</div>
                @if($question->responses->count())
              <div class="">{{ intval($answer->responses->count() * 100 / $question->responses->count()) }}%</div>
                @endif
                <div class="">
                  @if($answer->responses()->count() == 0)
                  <small class="text-success">Belum ada respon.</small>
                  @else
                  {{$answer->responses()->count()}} orang
                  @endif
                </div>
            </li>
            @endforeach
            <!-- <div class="">{{ $question->responses->count() }} orang</div>  Jumlah Orang yang melakukkan Survey -->
					</div>

          <div class="panel-footer">
            <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}" method="post">
              @method('DELETE')
              @csrf

              <button type="submit" class="btn btn-sm btn-danger col-md-5">Hapus Pertanyaan</button>
            </form>
              <a href="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id }}/edit" class="btn btn-sm btn-warning col-md-5">Edit Pertanyaan</a>
          </div>
				</div>
				<!-- END PANEL NO CONTROLS -->
		</div>
      @endif
    @endforeach
    <div class="col-md-12">
      <div id="chartSurvey"></div>
    </div>
</div>
@endsection



@section('footer')
  <script src="https://code.highcharts.com/highcharts.js"></script>


  <script type="text/javascript">
    Highcharts.chart('chartSurvey', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Hasil Survey'
    },
    xAxis: {
        categories: {!!json_encode($pertanyaan)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Persentase Respon'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah Responden',
        data: {!!json_encode($responden)!!}

    }]
  });
  </script>
@stop
