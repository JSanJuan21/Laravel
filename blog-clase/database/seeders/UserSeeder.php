<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Jorge San Juan Francisco',
            'email' => 'jorgesanjuanfrancisco@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::factory(99)->create();
    }
}
