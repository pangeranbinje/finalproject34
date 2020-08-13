<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaans';
    const CREATED_AT = 'tanggal_dibuat';
    const UPDATED_AT = 'tanggal_diperbaharui';
}
