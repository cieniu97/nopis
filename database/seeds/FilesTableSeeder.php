<?php

use Illuminate\Database\Seeder;
use App\Subject;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




      $rodzaj=['wykład','ćwiczenia','lab','inne'];
      $ile_uczelni=count(App\Dom::all());
      $ile_userow=count(App\User::all());


      for ($i=0; $i < 150 ; $i++) {
        $timestamp = mt_rand(1, time());
        $randomDate = date("Y-m-d", $timestamp);
        $trzon=rand(1,$ile_uczelni);
        $subjects=Subject::where('dom_id',$trzon)->get();
        $subject_n=$subjects->count();
        App\Files::create([
           'dom_id' => $trzon,
           'user_id' => rand(1,$ile_userow),
           'nazwa' => Str::random(10),
           'data' => $randomDate,
           'przedmiot' => $subjects[rand(0,$subject_n-1)]->name,
           'path' => 'example',
           'rodzaj' => $rodzaj[rand(0,3)],
           'semestr' => rand(1,8)


       ]);
      }
    }
}
