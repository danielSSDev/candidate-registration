<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'professional_experience',
        'academic_formation',
        'user',
        'password'
    ];
}
