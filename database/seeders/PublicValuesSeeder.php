<?php

namespace Database\Seeders;

use App\Models\PublicValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publicValues = [
            ['key' => 'site_name', 'value' => 'Laravel School'],
            ['key' => 'site_email', 'value' => null],
            ['key' => 'site_phone', 'value' => '1234567890'],
            ['key' => 'site_address', 'value' => '123, Laravel Street, Laravel City'],
            ['key' => 'registeration_amount', 'value' => "40"],
            ['key' => 'maximum_points_for_withdrawls', 'value' => "200"]
        ];

        foreach ($publicValues as $publicValue) {
            PublicValue::create($publicValue);
        }
    }
}
