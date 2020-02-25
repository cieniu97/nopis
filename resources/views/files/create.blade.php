@php
$prze=App\Subject::where('dom_id',auth()->user()->dom_id)->get();
$przedmioty = $prze->unique('name')->pluck('name');

@endphp

@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-xs-12 add-forms">
    <form class="" action="/files" method="post" enctype="multipart/form-data">

        @csrf
        @if (Auth::check())
        <div class="">
            <h1 >Dodajesz materiały </h1>
            <h5>Notatki, pytania, egzaminy z zeszłych lat, itp.</h5>
            Uczelnia: {{auth()->user()->dom->uczelnia}}
            Kierunek: {{auth()->user()->dom->kierunek}}
            <hr>
        </div>
        @endif



                <div class="input-wrap">
                    <label for="nazwa">Nazwa</label>
                    <input type="text" name="nazwa" value="" placeholder="np.: Struktury informacyjne grupa 160b"  required>
                </div>
                <div class="input-wrap">
                    <label for="przedmiot">Przedmiot</label>
                    <select class="" name="przedmiot" id="">
                        @forelse ($przedmioty ?? '' as $przedmiot )
                        <option class="opcja" value="{{$przedmiot}}">{{$przedmiot}}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="input-wrap">
                    <label for="data">Data zajęć</label>
                    <input type="date" name="data" value="" autocomplete="off" required>
                </div>




                <div class="input-wrap">
                    <label for="semestr">Semestr</label>
                    <select type="text" name="semestr">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="input-wrap">
                    <label for="rodzaj">Rodzaj zajęć</label>
                    <select type="text" name="rodzaj" value="" placeholder="rodzaj">
                        <option value="Wykład">Wykład</option>
                        <option value="Ćwiczenia">Ćwiczenia</option>
                        <option value="Lab">Lab</option>
                        <option value="inny">Inny</option>
                    </select>
                </div>
                <div class="input-wrap pliki">
                    <label for="file">Pliki<br> Rozszerzenia: jpeg,jpg,doc,docx,odt</label>
                    <input type="file" name="files[]" multiple="multiple" required style="padding-left:0; color:white;">
                </div>




                <button type="submit" name="button" >Dodaj</button>
    </form>

  </div>
</div>
@endsection
