<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';
    protected $fillable = ['instansi_id','nama_layanan','keterangan_layanan'];
    public $timestamps = false;

    public function instansi(){
      return $this->belongsTo(Instansi::class);
    }


    public function questionnaires(){
      return $this->hasMany(Questionnaire::class);
    }
}
