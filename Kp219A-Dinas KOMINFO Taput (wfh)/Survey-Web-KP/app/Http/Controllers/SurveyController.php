<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use Carbon;

class SurveyController extends Controller
{
  public function index(){
    $questionnaires = auth()->user()->questionnaires;
    $questionnaires->load("layanan");

    return view('admin.listSurvey', compact('questionnaires'));
  }


  public function show(Questionnaire $questionnaire, $slug){
    $datetime = Carbon\Carbon::now();

    $questionnaire->load('questions.answers');
    return view('users.survey.show',compact('questionnaire','datetime'));
  }

  public function store(Questionnaire $questionnaire){
    $data = request()->validate([
      'responses.*.answer_id' => 'required',
      'responses.*.question_id' => 'required',
      'survey.name' => 'required',
      'survey.email' => 'required|email',
      'survey.saran' => 'required'
    ]);

    $survey = $questionnaire->surveys()->create($data['survey']);
    $survey->responses()->createMany($data['responses']);

    return redirect('/homeUser')->with("sukses","Tanggapan Anda telah kami terima.Terimakasih Telah Melakukan Survey.");
  }

  public function showLayanan($id){
    $instansi = \App\Instansi::all()->where("id",$id);
    $layanans = \App\Layanan::all()->where("instansi_id",$id);

    return view("users.userLayanan",compact("layanans","instansi","id"));
  }


  public function showKuesioner($id, $layananId){
    $questionnaires = Questionnaire::all()->where("layanan_id",'=',$layananId);
    return view("users.userQuestionnaire",compact("questionnaires"));
  }


  public function hasilSurvey(){
    $questionnaires = auth()->user()->questionnaires;
    $questionnaires->load("layanan");

    return view('admin.hasilSurvey', compact('questionnaires'));
  }
}
