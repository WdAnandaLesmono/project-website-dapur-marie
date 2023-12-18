<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    protected static $isSeeder = false;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::$isSeeder = true;

        User::create([
            'username' => 'adminnandanich',
            'email' => 'nandalesmono@gmail.com',
            'password' => Hash::make('nandacantik'),
            'role_id' => 1,
        ]);

        User::$isSeeder = false;
    }
}
