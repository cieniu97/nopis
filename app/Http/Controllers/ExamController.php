<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {

        $exams=Exam::orderBy('data','desc')->get();

        return view('exam.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate(request(),
            [
                'nazwa' => 'required',
                'data' => 'required',
                'przedmiot' => 'required',
                'semestr' => 'required',
                'rodzaj' => 'required'

            ]);



            Exam::create([
                'user_id' => auth()->user()->id,
                'dom_id' => auth()->user()->dom_id,
                'nazwa' => request('nazwa'),
                'data' => request('data'),
                'przedmiot' => request('przedmiot'),
                'rodzaj' => request('rodzaj'),
                'semestr' => request('semestr'),
                'materialy' => request('materialy'),
            ]);




            $message="Społeczność studentów dziękuje za Twój wkład! Odwiedź zakładkę notatki aby przeglądać dostępne materiały.";
             return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(exam $exam)
    {
        //
    }
    public function search(){
      // $exams=Exam::all();
      // dd(request()->all());




      // $przedmiot='%'.request('przedmiot').'%';
      // $rodzaj='%'.request('rodzaj').'%';
      $exams=Exam::where([
        ['semestr',request('semestr')],
        ['dom_id',request('dom_id')]
        ])->orderBy('data', 'desc')->get();






      return view('exam.index', compact('exams'));

    }
}
