<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@user.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@admin1.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'editor',
               'email'=>'editor@editor.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'writer',
                'email'=>'writer@writer.com',
                'type'=> 3,
                'password'=> bcrypt('12345678'),
             ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
