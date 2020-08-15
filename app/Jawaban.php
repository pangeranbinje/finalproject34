<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = ['jawaban','user_id','like','pertanyaan_id'];
    protected $table = 'jawabans';
    
}
