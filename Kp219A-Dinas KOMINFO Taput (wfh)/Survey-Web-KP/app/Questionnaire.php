<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $guarded = [];

    public function path(){
      return url('/questionnaires/'.$this->id);
    }

    public function publicPath(){
      return url('/surveys/'.$this->id.'-'.Str::slug($this->title));
    }


    public function user(){
      return $this->belongsTo(User::class);
    }


    public function questions(){
      return $this->hasMany(Question::class);
    }


    public function surveys(){
      return $this->hasMany(Survey::class);
    }


    public function instansi(){
      return $this->belongsTo(Instansi::class);
    }


    public function layanan(){
      return $this->belongsTo(Layanan::class);
    }


    public function jumlahResponse(){
      foreach($this->questions as $question){

        return $question->responses()->count();

      }
    }


    public function questionnaireQuestionAnswers(){
      $a = [];
      foreach ($this->questions as $question) {
        foreach ($question->answers as $answer) {
          if($question->responses->count()){
          $a[] =  intval($answer->responses->count() * 100 / $question->responses->count());
          }
        }
      }
      return $a;
    }


    public function questionnaireName(){
      return $this->title;
    }


    public function questionnaireQuestion(){
      $ques = [];
      foreach ($this->questions as $question) {
        $ques[] = $question->question;
      }

      return json_encode($ques);
    }
}
