<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = ['isi', 'judul',];
    protected $table = 'pertanyaans';
    
    
}
