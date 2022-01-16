<?php

namespace Database\Seeders;

use App\Models\Gym;
use App\Models\Hospital;
use App\Models\InsuranceCompany;
use App\Models\Lab;
use App\Models\LifeCoutch;
use App\Models\MedicalCenter;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\RadiologyCenter;
use App\Models\SeoAdmin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin User :
        // ===========================================================================
        User::create([
            'name_ar' => 'مدير النظام',
            'name_en' => 'Super Admin',
            'username' => 'super_admin',
            'alias_name_ar' => 'مدير-النظام',
            'alias_name_en' => 'Super-Admin',
            'email' => 'admin@rushetta.com',
            'phone' => '0799999999',
            'password' => Hash::make('12345678'),
            'profile_photo_path' => 'storage/profile-photos/monster.webp',
            'user_status' => 2, // Active
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_by' => 1,
        ]);


        for ($i = 1; $i <= 10; $i++) {

            InsuranceCompany::create([
                'name_ar' => 'تأمين_' . $i,
                'name_en' => 'insurance_' . $i,
                'alias_name_ar' => 'تأمين-' . $i,
                'alias_name_en' => 'insurance-' . $i,
                'username' => 'insurance_' . $i,
                'email' => 'insurance_' . $i . '@rushetta.com',
                'phone' => '079999999' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            Hospital::create([
                'name_ar' => 'مستشفى_' . $i,
                'name_en' => 'hospital_' . $i,
                'alias_name_ar' => 'مستشفى-' . $i,
                'alias_name_en' => 'hospital-' . $i,
                'username' => 'hospital_' . $i,
                'email' => 'hospital_' . $i . '@rushetta.com',
                'phone' => '079999998' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            MedicalCenter::create([
                'name_ar' => 'مركز_طبي_' . $i,
                'name_en' => 'medical_center_' . $i,
                'alias_name_ar' => 'مركز-طبي-' . $i,
                'alias_name_en' => 'medical-center-' . $i,
                'username' => 'medical_center_' . $i,
                'email' => 'medical_center_' . $i . '@rushetta.com',
                'phone' => '079999997' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            Pharmacy::create([
                'name_ar' => 'صيدلية_' . $i,
                'name_en' => 'pharmacy_' . $i,
                'alias_name_ar' => 'صيدلية-' . $i,
                'alias_name_en' => 'pharmacy-' . $i,
                'username' => 'pharmacy_' . $i,
                'email' => 'pharmacy_' . $i . '@rushetta.com',
                'phone' => '079999996' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            RadiologyCenter::create([
                'name_ar' => 'مركز_اشعة_' . $i,
                'name_en' => 'radiology_center_' . $i,
                'alias_name_ar' => 'مركز-اشعة-' . $i,
                'alias_name_en' => 'radiology-center-' . $i,
                'username' => 'radiology_center_' . $i,
                'email' => 'radiology_center_' . $i . '@rushetta.com',
                'phone' => '079999995' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            Lab::create([
                'name_ar' => 'مختبر_' . $i,
                'name_en' => 'lab_' . $i,
                'alias_name_ar' => 'مختبر-' . $i,
                'alias_name_en' => 'lab-' . $i,
                'username' => 'lab_' . $i,
                'email' => 'lab_' . $i . '@rushetta.com',
                'phone' => '079999994' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            LifeCoutch::create([
                'name_ar' => 'مدرب_حياة_' . $i,
                'name_en' => 'life_coach_' . $i,
                'alias_name_ar' => 'مدرب-حياة-' . $i,
                'alias_name_en' => 'life-coach-' . $i,
                'username' => 'life_coach_' . $i,
                'email' => 'life_coach_' . $i . '@rushetta.com',
                'phone' => '079999992' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            Gym::create([
                'name_ar' => 'مركز_لياقة_' . $i,
                'name_en' => 'gym_' . $i,
                'alias_name_ar' => 'مركز-لياقة-' . $i,
                'alias_name_en' => 'gym-' . $i,
                'username' => 'gym_' . $i,
                'email' => 'gym_' . $i . '@rushetta.com',
                'phone' => '079999991' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            SeoAdmin::create([
                'name_ar' => 'ادارة_محركات_البحث_' . $i,
                'name_en' => 'seo_admin_' . $i,
                'alias_name_ar' => 'ادارة-محركات-البحث-' . $i,
                'alias_name_en' => 'seo-admin-' . $i,
                'username' => 'seo_admin_' . $i,
                'email' => 'seo_admin_' . $i . '@rushetta.com',
                'phone' => '079999990' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);

            Patient::create([
                'name_ar' => 'مراجع_' . $i,
                'name_en' => 'patient_' . $i,
                'alias_name_ar' => 'مراجع-' . $i,
                'alias_name_en' => 'patient-' . $i,
                'username' => 'patient_' . $i,
                'email' => 'patient_' . $i . '@rushetta.com',
                'phone' => '079999989' . $i,
                'password' => Hash::make('12345678'),
                'country_id' => 111,
                'region_id' => 1422,
                'profile_photo_path' => 'storage/profile-photos/monster.webp',
                'user_status' => 2, // Active
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => 1,
            ]);
        }
    }
}
