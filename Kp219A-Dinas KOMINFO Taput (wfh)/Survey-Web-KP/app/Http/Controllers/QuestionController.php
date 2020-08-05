<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire){
      return view('admin.question.create',compact('questionnaire'));
    }

    public function edit(Questionnaire $questionnaire, Question $question){
      return view('admin.question.edit',compact('questionnaire','question'));
    }

    public function update(Questionnaire $questionnaire,Question $question){
      $data = request()->validate([
        'question.question' => 'required',
        'answers.*.answer' => 'required',
      ]);
      $question->load("answers");

      $question->load("answers");
      $question->update($data['question']);
      $question->answers[0]->update($data['answers'][0]);
      $question->answers[1]->update($data['answers'][1]);
      $question->answers[2]->update($data['answers'][2]);
      $question->answers[3]->update($data['answers'][3]);


      // $question->answers->update([
      //   $question->answers[0]['answer'] => $data['answers'][0],
      //   $question->answers[1]['answer'] => $data['answers'][1],
      //   $question->answers[2]['answer'] => $data['answers'][2],
      //   $question->answers[3]['answer'] => $data['answers'][3]
      // ]);



      return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function store(Questionnaire $questionnaire){
    $data = request()->validate([
      'question.question' => 'required',
      'answers.*.answer' => 'required',
    ]);

    $question = $questionnaire->questions()->create($data['question']);
    $question->answers()->createMany($data['answers']);

    return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function destroyQuestion(Questionnaire $questionnaire, Question $question){
    $question->answers()->delete();
    $question->delete();

    return redirect($questionnaire->path())->with('sukses','Berhasil Menghapus Pertanyaan');
    }
}
