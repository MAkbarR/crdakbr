<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $UserData = [
            [
                'name'=>'admin0',
                'email'=>'admin0@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123admin0')
            ],
            [
                'name'=>'user0',
                'email'=>'user0@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123user0')
            ],
        ];

        foreach($UserData as $key => $val){
            User::create($val);
        }
    }
}
