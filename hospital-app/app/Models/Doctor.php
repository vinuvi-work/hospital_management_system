<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;

     protected $fillable = [
        'name', 'nic', 'email', 'password', 'birth_day', 'gender', 'specialization', 'qualification', 'expereince'
     ];
}
