<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'doctors';

    protected $fillable = ['name', 'email', 'phone', 'gender'];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    //ini untuk route resource tapi mau pake uuid (rekomendasi)
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
