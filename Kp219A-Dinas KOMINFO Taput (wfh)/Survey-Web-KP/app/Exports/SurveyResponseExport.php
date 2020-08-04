<?php

namespace App\Exports;

use App\Questionnaire;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SurveyResponseExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Questionnaire::all();
    }


    public function map($questionnaire): array
    {
        return [
          $questionnaire->questionnaireName(),
          $questionnaire->jumlahResponse(),
          $questionnaire->questionnaireQuestion(),
          $questionnaire->questionnaireQuestionAnswers()
        ];
    }


    public function headings(): array
   {
       return [
           'Nama Kuesioner',
           'Jumlah Responden',
           'Pertanyaan',
           'Jawaban'
       ];
   }

}
