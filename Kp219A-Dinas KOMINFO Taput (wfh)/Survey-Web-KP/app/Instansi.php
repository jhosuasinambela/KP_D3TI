<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = 'instansi';
    protected $fillable = [
      'nama_instansi','nama_pimpinan','alamat','keterangan'
    ];
    public $timestamps = false;

    public function layanan(){
      return $this->hasMany(Layanan::class);
    }

    public function questionnaires(){
      return $this->hasMany(Questionnaire::class);
    }
}
