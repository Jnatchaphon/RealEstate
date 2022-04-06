<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new User();
        $user->name = 'BelL Natchaphon';
        $user->email = 'jnatchaphon@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
