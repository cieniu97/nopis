<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
        $user=User::where('id',auth()->user()->id)->first();

      return view('user.edit',compact('user'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::where('id',auth()->user()->id)->first();
        $this->validate(request(),
        [
            'name' => 'string',
            'email' => 'email',
            'semestr' => 'integer | nullable',
        ]);

      if(!empty($request->name)){
        $user->name=$request->name;
      }
      if(!empty($request->email)){
        $user->email=$request->email;

      }
      if(!empty($request->semestr)){
        $user->semestr=$request->semestr;
      }


      if ($user->save()) {
        $message='Pomyślnie zaktualizowano';
      }
      else{
        $message='Błąd. Skotaktuj się z nami pod adresem nopis.problem@gmail.com';
      }
      return back()->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
