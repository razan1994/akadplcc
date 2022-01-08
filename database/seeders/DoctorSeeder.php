<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            for($j = 1; $j <= 10 ; $j++){
                Doctor::create([
                    'name_ar'=>'طبيب_'.$i.'_'.$j,
                    'name_en'=>'doctor_'.$i.'_'.$j,
                    'username'=>'doctor_'.$i.'_'.$j,
                    'email'=>'doctor_'.$i.'_'.$j.'@rushetta.com',
                    'phone'=>'0799998'.$i.'_'.$j,
                    'speciality_id'=>$i,
                    'password' => Hash::make('12345678'),
                    'user_status' => 2, // Active
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'created_by' => 1,
                ]);

            }


        }
    }
}
