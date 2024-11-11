<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(25)
            ->hasMessages(20)
            ->create();
        User::factory()
            ->count(10)
            ->hasMessages(3)
            ->create();
        User::factory()
            ->count(4)
            ->hasMessages(10)
            ->create();
    }
}