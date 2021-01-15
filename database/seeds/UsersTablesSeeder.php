<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Mindia Arabuli',
            'email'    => 'mindia.arabuli.1@btu.edu.ge',
            'password'   =>  Hash::make('123456'),
            'remember_token' =>  str_random(10),
            'isAdmin'=>true
        ]);
    }
}
