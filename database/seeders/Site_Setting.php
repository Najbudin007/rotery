<?php

namespace Database\Seeders;

use App\Models\SiteSetting as SiteSetttings;
use Illuminate\Database\Seeder;

class SiteSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetttings::create([
            'Site_title' => "ROTERY",
            'district' => "kathmandu",
            'club_number' => "9999",
            'contact_number' => "12345678",
        ]);
    }
}
