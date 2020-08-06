@extends('layouts.master')
@section('content')
  <h1>Edit Pertanyaan.</h1>
    <form class="" action="/questionnaires/{{ $questionnaire->id }}/questions/{{$question->id}}/update" method="post">
      @method("PUT")
      @csrf
      <div class="form-group">
        <label for="question">Judul</label>
        <input name="question[question]" type="text" value="{{ $question['question'] }}" id="question" class="form-control" placeholder="Masukkan Pertanyaan">
        <small id="questionHelp" class="form-text text-muted">Buat Pertanyaan singkat dan Jelas.</small>

        @error('question.question')
        <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <fieldset>
          <legend>Pilihan</legend>
          <small id="choisesHelp" class="form-text text-muted">Berikan Pilihan Jawaban yang anda inginkan.</small>

            <div>
              <div class="form-group">
                <label for="answer1">Pilihan 1</label>
                <input name="answers[][answer]" value="{{ $question->answers[0]['answer'] }}" id="answer1" type="text" class="form-control" placeholder="Masukkan Pilihan 1" aria-describedby="choisesHelp">

                @error('answers.0.answer')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div>
              <div class="form-group">
                <label for="answer2">Pilihan 2</label>
                <input name="answers[][answer]" value="{{ $question->answers[1]['answer'] }}" id="answer2" type="text" class="form-control" placeholder="Masukkan Pilihan 2" aria-describedby="choisesHelp">

                @error('answers.1.answer')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div>
              <div class="form-group">
                <label for="answer3">Pilihan 3</label>
                <input name="answers[][answer]" value="{{ $question->answers[2]['answer'] }}" id="answer3" type="text" class="form-control" placeholder="Masukkan Pilihan 3" aria-describedby="choisesHelp">

                @error('answers.2.answer')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div>
              <div class="form-group">
                <label for="answer4">Pilihan 4</label>
                <input name="answers[][answer]" value="{{ $question->answers[3]['answer'] }}" id="answer4" type="text" class="form-control" placeholder="Masukkan Pilihan 4" aria-describedby="choisesHelp">

                @error('answers.3.answer')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
        </fieldset>
      </div>

      <button type="submit" class="btn btn-warning">Ubah Pertanyaan</button>
    </form>


@endsection
