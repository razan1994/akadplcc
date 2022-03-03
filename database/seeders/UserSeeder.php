<?php

namespace Database\Seeders;


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
            'email' => 'admin@kanaf.com',
            'phone' => '0799999999',
            'password' => Hash::make('12345678'),
            'profile_photo_path' => 'storage/profile-photos/monster.webp',
            'user_status' => 2, // Active
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_by' => 1,
        ]);

    }
}
