@php
$prze=App\Subject::where('dom_id',auth()->user()->dom_id)->get();
$przedmioty = $prze->unique('name')->pluck('name');

@endphp


@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 add-forms">
      <form class="" action="/exam" method="post">

          @csrf
          @if (Auth::check())
          <div class="">
              <h1 >Dodajesz egzamin </h1>
              Uczelnia: {{auth()->user()->dom->uczelnia}}
              Kierunek: {{auth()->user()->dom->kierunek}}
          </div>
          @endif

          <div class="wurp">
              <div class="left">
                  <div class="input-wrap">
                      <label for="nazwa">Nazwa</label>
                      <input type="text" name="nazwa" style="width:100%;" value="" placeholder="np.: Kolokwium z Przedimot" required>
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
                      <label for="data">Data egzaminu</label>
                      <input type="date" name="data" value="" autocomplete="off" required>
                  </div>


              </div>
              <div class="right">
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

              </div>
          </div>
          <div class="area-wrap">
              <textarea required name="materialy" rows="8"  placeholder="Podaj opis egzaminu, możesz wypunktować umiejętności potrzebne do zaliczenia, albo podać treści których znajomość będzie sprawdzona"></textarea>
          </div>


          <button type="submit" name="button" style="width:30%;cursor:pointer;">Dodaj</button>
      </form>
    </div>
  </div>
@endsection
