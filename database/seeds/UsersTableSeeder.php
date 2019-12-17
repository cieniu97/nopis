<?php

use Illuminate\Database\Seeder;
use App\user;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ile_uczelni=count(App\Dom::all());
      for ($i=0; $i <= 64 ; $i++) {
        App\User::create([
          'name' => 'user'.$i,
          'semestr' => rand(1,8),
          'email' => 'user'.$i.'@gmail.com',
          'dom_id' => rand(1,$ile_uczelni),
          'password' => Hash::make('mleko1234'), // password
          'remember_token' => Str::random(10),

       ]);
      }



    }
}
