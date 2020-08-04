<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';
    protected $fillable = [
      'nik','nama_lengkap','jenis_kelamin',
      'no.telp','pekerjaan','alamat'
    ];
}
