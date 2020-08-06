<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SurveyResponseExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class QuestionnaireController extends Controller
{
  public function show(\App\Questionnaire $questionnaire){
    //Lazy Loaded
    $questionnaire->load('questions.answers.responses');

    $pertanyaan = [];
    $responden = [];

      foreach($questionnaire->questions as $question){
        $pertanyaan[] = $question->question;
        $responden[] = $question->responses->count();
        foreach($question->answers as $answer){

        }
      }
    return view('admin.questionnaire.show',compact('questionnaire','pertanyaan','responden'));
  }



    public function create(){
      $instansi = \App\Instansi::all();
      return view('admin.questionnaire.create',compact('instansi'));
    }


    public function store(Request $request){
      $data = $request->validate([
        'title' => 'required',
        'purpose' => 'required',
        'instansi_id' => 'required',
        'layanan_id' => 'required',
        'due_date' => 'required|date'
      ]);
      $questionnaire = auth()->user()->questionnaires()->create($data);
      return redirect('/questionnaires/'.$questionnaire->id);
    }


    public function edit($id){
      $questionnaire = \App\Questionnaire::find($id);
      $questionnaire->load("instansi");
      return view('admin.questionnaire.edit',compact('questionnaire'));
    }


    public function update($id){
      $data = request()->validate([
        'title' => 'required',
        'purpose' => 'required',
        'instansi_id' => 'required',
        'layanan_id' => 'required',
        'due_date' => 'required|date'
      ]);

      $questionnaire = \App\Questionnaire::find($id)->update([
        'title' => $data['title'],
        'purpose' => $data['purpose'],
        'instansi_id' => $data['instansi_id'],
        'layanan_id' => $data['layanan_id'],
        'due_date' => $data['due_date']
      ]);

      return redirect('/');
    }


    public function destroy($id){
      $questionnaire = \App\Questionnaire::find($id);
      $questionnaire->delete();


      // $question->answers()->delete();
      // $question->delete();

      return redirect("/")->with("sukses","Kuesioner berhasil di hapus.");
    }


    public function export($id)
    {
        return Excel::download(new SurveyResponseExport, 'SurveyResponse.xlsx');
    }


    public function exportPDF(\App\Questionnaire $questionnaire){
      $questionnaire->load('questions.answers.responses');

      $pdf = PDF::loadView('users.export.hasilQuestionnairePDF',['quest'=>$questionnaire]);
      return $pdf->download('Questionnaire.pdf');
    }
}
