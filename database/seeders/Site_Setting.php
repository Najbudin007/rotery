<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class Site_Setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
            'Site_title' => "ROTERY",
            'district' => "kathmandu",
            'club_number' => "9999",
            'contact_number' => "12345678",
        ]);
    }
}
