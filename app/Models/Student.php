<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        'registration_number',
        'first_name',
        'surname',
        'birth_date',
        'sex',
        'guardian_phone_number',
        'address'
    ];
}
