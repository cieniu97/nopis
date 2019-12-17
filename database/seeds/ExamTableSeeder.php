<?php

use Illuminate\Database\Seeder;
use App\Subject;

class ExamTableSeeder extends Seeder
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
        $trzon=rand(1,$ile_uczelni);
        $subjects=Subject::where('dom_id',$trzon)->get();
        $subject_n=$subjects->count();
        $timestamp = mt_rand(1, time());
        $randomDate = date("Y-m-d", $timestamp);
        App\Exam::create([
           'dom_id' => $trzon,
           'user_id' => rand(1,$ile_userow),
           'nazwa' => Str::random(10),
           'data' => $randomDate,
           'przedmiot' => $subjects[rand(0,$subject_n-1)]->name,
           'rodzaj' => $rodzaj[rand(0,3)],
           'semestr' => rand(1,8),
           'materialy' => Str::random(50),

       ]);
      }
    }
}
