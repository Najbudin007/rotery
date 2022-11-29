<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create([
            'name' => 'admin',
        ]);
        \App\Models\Role::create([
            'name' => 'member',
        ]);
        \App\Models\Role::create([
            'name' => 'board member',
        ]);
        \App\Models\Role::create([
            'name' => 'charter member',
        ]);
        User::create([
            'name' => "rotary",
            'email' => "admin@rotary.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => "active",
            'address' => "asdasd",
            'number' => "1234567890",
            'image' => "asdasdasd",
            "role_id" => "1",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => "member rotary",
            'email' => "member@rotary.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => "active",
            'address' => "asdasd",
            'number' => "1234567890",
            'image' => "asdasdasd",
            "role_id" => "2",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => "board member rotary",
            'email' => "board_member@rotary.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => "active",
            'address' => "asdasd",
            'number' => "1234567890",
            'image' => "asdasdasd",
            "role_id" => "3",
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => "charter member rotary",
            'email' => "charter_member@rotary.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'status' => "active",
            'address' => "asdasd",
            'number' => "1234567890",
            'image' => "asdasdasd",
            "role_id" => "4",
            'remember_token' => Str::random(10),
        ]);
        SiteSetting::create([
            'Site_title' => "ROTERY",
            'district' => "kathmandu",
            'club_number' => "9999",
            'contact_number' => "12345678",
        ]);
    }
}
