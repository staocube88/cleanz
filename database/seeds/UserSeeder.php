<?php

use App\User;
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
        //
       
        User::create([
                          'name' => "Femi Ajobs",
                          'email' => "admin@gmail.com",
                          'password' => bcrypt("19890007fm"),
                          'admin' => "2",
                          'remember_token' => csrf_token(),
              ]);
    }
}
