<?php

namespace App\Http\Controllers;

use App\Dom;
use Illuminate\Http\Request;

class DomController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $domy=Dom::all();
      return view('dom.index',compact('domy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dom.create');
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
          'uczelnia' => 'required',
          'kierunek' => 'required'
      ]);

      Dom::create([
          'uczelnia' => request('uczelnia'),
          'kierunek' => request('kierunek'),
      ]);
      return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dom  $dom
     * @return \Illuminate\Http\Response
     */
    public function show(Dom $dom)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dom  $dom
     * @return \Illuminate\Http\Response
     */
    public function edit(Dom $dom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dom  $dom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dom $dom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dom  $dom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dom $dom)
    {
        //
    }
}
