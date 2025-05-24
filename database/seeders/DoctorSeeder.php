<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'uuid' => Str::uuid(),
            'name' => 'Mukhlis Khoirudin',
            'email' => 'mukhliskhoirudin@gmail.com',
            'phone' => '08568020203',
            'gender' => 'male'
        ]);

        Doctor::create([
            'uuid' => Str::uuid(),
            'name' => 'Muhammad',
            'email' => 'muhammad@gmail.com',
            'phone' => '085669887767',
            'gender' => 'male'
        ]);
    }
}
