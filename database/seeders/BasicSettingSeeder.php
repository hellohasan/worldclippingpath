<?php

namespace Database\Seeders;

use App\Models\BasicSetting;
use Illuminate\Database\Seeder;

class BasicSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasicSetting::create([
            'title'              => 'Laravel 9 CMS',
            'currency'           => 'USD',
            'symbol'             => '$',
            'phone'              => '01571118839',
            'email'              => 'softwarezon@hotmail.com',
            'email_verification' => true,
            'address'            => 'Mirpur Dhaka, 1216',
        ]);
    }
}
