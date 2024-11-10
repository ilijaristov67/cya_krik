<?php

namespace Database\Seeders;

use App\Models\Volunteer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        Volunteer::insert([
            [
                'name' => 'Idil',
                'lastname' => 'Abes',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/1-Idil-Abes.png',
            ],
            [
                'name' => 'Melih',
                'lastname' => 'Furkan',
                'country' => 'Турција',
                'is_longterm' => false,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/2-Melih-Furkan-Orta.png',
            ],
            [
                'name' => 'Bedirham',
                'lastname' => 'Sevim',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/3-Bedirhan-Sevim.png',
            ],
            [
                'name' => 'Zeynep',
                'lastname' => 'Cebeci',
                'country' => 'Турција',
                'is_longterm' => false,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/4-Zeynep-Cebeci.png',
            ],
            [
                'name' => 'Merve',
                'lastname' => 'Ozkan',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/5-Merve-Ozkan.png',
            ],
            [
                'name' => 'Melek',
                'lastname' => 'Cakan',
                'country' => 'Турција',
                'is_longterm' => false,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/6-Melek-Cakan.png',
            ],
            [
                'name' => 'Melisa',
                'lastname' => 'Pektaş',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/7-Melisa-Pektaş.png',
            ],
            [
                'name' => 'Manon',
                'lastname' => 'Lacoste',
                'country' => 'Франција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/8-Manon-Lacoste.png',
            ],
            [
                'name' => 'Lisa',
                'lastname' => 'Simone',
                'country' => 'Франција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/9-Lisa-Simone.png',
            ],
            [
                'name' => 'Kaan',
                'lastname' => 'Alğın',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/10-Kaan-Alğın.png',
            ],
            [
                'name' => 'Metehan',
                'lastname' => 'Can',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/11-Metehan-Cam.png',
            ],
            [
                'name' => 'Ali',
                'lastname' => 'Karabay',
                'country' => 'Турција',
                'is_longterm' => true,
                'biography' => $faker->paragraph(3),
                'image' => '/storage/volunteers/12-Ali-Karabay.png',
            ],
        ]);
    }
}
