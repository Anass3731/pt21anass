<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tcoches extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'matricula';
    protected $keyType = 'string';    
    public $incrementing = false;

    protected $fillable = ['matricula', 'marca', 'modelo', 'anyo'];
}

