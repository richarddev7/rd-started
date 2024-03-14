<?php

namespace Database\Seeders;

use App\Models\MUserAdicional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Richard Dev',
            'email' => 'admin@richard-dev.net',
            'phone' => '+57 322 809 3094',
            'whatsapp' => '+57 322 809 3094',
            'address' => '123 Main St',
            'city' => 'El Sombrero',
            'state' => 'Guarico',
            'country' => 'Venezuela',
            'image' => null,
            'birthdate' => '1991-07-07',
            'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'level' => '1',
            'status' => '1',
            'token_active' => Str::random(30),
            'token_api' => Str::random(30),
            'email_verified_at' => now(),
            'password' => bcrypt('admin-2024'), // password
            'remember_token' => Str::random(10),
        ]);

        // Informacion adicional
        $userAdicionalData = new MUserAdicional();
        $userAdicionalData->id_user_adicional = $user->id;
        $userAdicionalData->image_banner = null;
        $userAdicionalData->dark_mode = 0;
        $userAdicionalData->language = 'es';
        $userAdicionalData->web_page = null;
        $userAdicionalData->social_facebook = null;
        $userAdicionalData->social_youtube = null;
        $userAdicionalData->social_instagram = null;
        $userAdicionalData->social_x = null;
        $userAdicionalData->save();

    }
}
