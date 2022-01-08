<?php

namespace Database\Seeders;

use App\Models\DoctorSpeciality;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 10 ; $i++){
            DoctorSpeciality::create([
                'name_ar'=>'تخصص_'.$i,
                'name_en'=>'speciality_'.$i,
                'updated_by'=>1,
            ]);


        }
    }
}
