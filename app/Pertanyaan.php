<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = ['isi', 'judul', 'pertanyaan','user_id'];
    protected $table = 'pertanyaans';
}
