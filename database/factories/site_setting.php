<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class site_setting extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Site_title' => "ROTERY",
            'district' => "kathmandu",
            'club_number' => "9999",
            'contact_number' => "12345678",
        ];
    }
}
