<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserProfile::create([
            'level' => '1',
            'name_profile' => 'SuperAdmin',
            'description_profile' => ''
        ]);
    }
}
