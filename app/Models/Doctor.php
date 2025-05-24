<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'doctors';

    protected $fillable = ['name', 'email', 'phone', 'gender'];
}
