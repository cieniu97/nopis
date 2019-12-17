<?php

namespace App\Http\Controllers;

use App\Files;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Str;

use ZipArchive;

class FilesController extends Controller
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
    public function index($message=null)
    {
      $files=Files::orderBy('data','desc')->get();
      return view('files.index',compact('files','message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('files.create');
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
          'rodzaj' => 'required',
          'files.*' => ['mimes:jpeg,jpg,doc,docx,odt','max:5000','required']

      ]);

      $full_path="";
      if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file ) {

          $path=$file->store('files');
          $path=$path.';';

          $full_path=$full_path.$path;

        }
      }else{
        dd('blad');
      }

      Files::create([
          'user_id' => auth()->user()->id,
          'dom_id' => auth()->user()->dom_id,
          'nazwa' => request('nazwa'),
          'path' => $full_path,
          'data' => request('data'),
          'przedmiot' => request('przedmiot'),
          'rodzaj' => request('rodzaj'),
          'semestr' => request('semestr'),

      ]);



      $message="Społeczność studentów dziękuje za Twój wkład! Odwiedź zakładkę notatki aby przeglądać dostępne materiały.";
       return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }

    public function download($id)
    {
      $files=Files::where('id',$id)->first();

      $files=explode(';',$files->path);

      array_pop($files);


      if(count($files)>1){





        $zip = new ZipArchive;
        $fileName = Str::random(25).'.zip';

        if ($zip->open(storage_path($fileName), ZipArchive::CREATE) === TRUE)
        {



          $zz=0;


            foreach ($files as $file) {

                $nazwa='plik'.$zz;
                $nazwa=$nazwa.'.'.pathinfo($file)['extension'];
                $zip->addFile(storage_path('app/'.$file),$nazwa);
                $zz++;

            }


              $zip->close();



        }

        return response()->download(storage_path($fileName));
        }
        elseif (count($files)==1) {
          return Storage::download($files[0]);
        }
        else{
          return back();
        }





    }

    public function search()
    {
      $files=Files::where([
          ['semestr',request('semestr')],
          ['dom_id',request('dom_id')]
          ])->orderBy('data', 'desc')->get();





        return view('files.index',compact('files'));



    }
}
