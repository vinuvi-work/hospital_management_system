<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    /** @use HasFactory<\Database\Factories\AppoinmentFactory> */
    use HasFactory;

    protected $fillable = [
        'name','nic','email','phone_number','age','gender','specialization','doc_name','date','time'
    ];
}
