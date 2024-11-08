<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('messages')->insert([
                'name' => $faker->name,
                'message_item' => $faker->sentence,
                'status' => $faker->boolean, // true for 1, false for 0
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}