<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\Exam;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recent_files=Files::where('dom_id',auth()->user()->dom_id)->where('semestr',1)->take(10)->latest()->get();
        $upcoming_exams=Exam::where('dom_id',auth()->user()->dom_id)->where('semestr',1)->take(10)->orderBy('data','desc')->get();

      
        return view('home',compact('recent_files','upcoming_exams'));
    }
}
