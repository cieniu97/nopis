@php
$prze=App\Subject::where('dom_id',auth()->user()->dom_id)->get();
$przedmioty = $prze->unique('name')->pluck('name');

@endphp

@extends('layouts.master')

@section('title')
Home
@endsection
@section('content')


<div class="" id=home>



    <div class="notatki">

        <div class="naglowek">
            <h1>Baza wiedzy - Dziel się</h1>
            W tym miejscu możesz dodać notatki, pliki i materiały do nauki ,które będą dostępne dla wszystkich!
        </div>



        <form class="" action="/nopis/public/files" method="post" enctype="multipart/form-data">

            @csrf
            @if (Auth::check())
            <div class="">
                <h4 style="display:inline">Dodajesz materiały do </h4>
                Uczelnia: {{auth()->user()->dom->uczelnia}}
                Kierunek: {{auth()->user()->dom->kierunek}}
            </div>
            @endif


            <div class="wurp">
                <div class="left">
                    <div class="input-wrap">
                        <label for="nazwa">Nazwa</label>
                        <input type="text" name="nazwa" value="" placeholder="np.: Struktury informacyjne grupa 160b" style="width:100%;" required>
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
                    <div class="input-wrap">
                        <label for="file">Notatki, materiały, pliki. <br> Rozszerzenia: jpeg,jpg,doc,docx,odt</label>
                        <input type="file" name="files[]" multiple="multiple" required>
                    </div>
                </div>
            </div>


            <button type="submit" name="button" style="width:30%;cursor:pointer;">Dodaj</button>
        </form>
    </div>

    <div class="udos">
        <div class="naglowek">
          <h1>Ostatnio dodane materiały</h1>
          Korzystaj z nieograniczonej wiedzy i już nigdy nie marnuj czasu!
        </div>


          @forelse ($recent_files ?? '' as $recent_file)
            <div class="recent">

                  <div class="recent-nazwa"><b>{{$recent_file->nazwa}}</b></div>
                  <div class="recent-in"><div class="recent-opis">Przedmiot: </div>{{$recent_file->przedmiot}}</div>
                  <div class="recent-in"><div class="recent-opis">Rodzaj: </div>{{$recent_file->rodzaj}}</div>
                  <div class="recent-in"><div class="recent-opis">Semestr: </div>{{$recent_file->semestr}}</div>
                  <div class="recent-in"><div class="recent-opis">Data: </div>{{$recent_file->data}}</div>
                  <div class="recent-in"><div class="recent-opis">Pliki: </div>
                  <form class="" action="/nopis/public/files/download/{{$recent_file->id}}" method="get">
                     @csrf
                     <button type="submit" name="button">Pobierz</button>
                 </form>

                  </div>

            </div>

            <div class="recent-mobile">

                  <div class="recent-mobile-strip">
                  <b>{{$recent_file->nazwa}}</b>
                  <div>Data: {{$recent_file->data}} </div>
                  </div>
                  <div class="recent-mobile-in">Przedmiot: {{$recent_file->przedmiot}}</div>
                  <div class="recent-mobile-in">Rodzaj: {{$recent_file->rodzaj}}</div>
                  <div class="recent-mobile-in">Semestr: {{$recent_file->semestr}}</div>
                  <div class="recent-mobile-in">Data: {{$recent_file->data}}</div>
                  <div class="recent-mobile-in">Pliki:
                       <form class="" action="/nopis/public/files/download/{{$recent_file->id}}" method="get">
                          @csrf
                          <button type="submit" name="button">Pobierz</button>
                      </form>

                  </div>

            </div>


          @empty
          Nie ma na razie notatek
          @endforelse



    </div>

    <div class="egzaminy">
        <div class="naglowek">
          <h1>Egzaminy</h1>
          Tutaj możesz wprowadzić zbliżające się egzaminy, każdy student z Twojej grupy będzie je widział i nie będzie musiał pytać o to 10 osób ;)
        </div>
        <form class="" action="/nopis/public/exam" method="post">

            @csrf
            @if (Auth::check())
            <div class="">
                <h4 style="display:inline">Dodajesz egzamin dla </h4>
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
                <textarea required name="materialy" rows="8" cols="80" placeholder="Podaj opis egzaminu, możesz wypunktować umiejętności potrzebne do zaliczenia, albo podać treści których znajomość będzie sprawdzona"></textarea>
            </div>


            <button type="submit" name="button" style="width:30%;cursor:pointer;">Dodaj</button>
        </form>
    </div>

    <div class="twoje">
        <div class="naglowek">
          <h1>Zbliżające się egzaminy</h1>
        </div>
        @forelse ($upcoming_exams ?? '' as $upcoming_exam)

          <div class="recent">



            <div class="recent-nazwa"><b>{{$upcoming_exam->nazwa}}</b></div>
            <div class="recent-in"><div class="recent-opis">Przedmiot: </div>{{$upcoming_exam->przedmiot}}</div>
            <div class="recent-in"><div class="recent-opis">Rodzaj: </div>{{$upcoming_exam->rodzaj}}</div>
            <div class="recent-in"><div class="recent-opis">Semestr: </div>{{$upcoming_exam->semestr}}</div>
            <div class="recent-in"><div class="recent-opis">Data: </div>{{$upcoming_exam->data}}</div>

          </div>

          <div class="recent-mobile">

                <div class="recent-mobile-strip">
                <b>{{$upcoming_exam->nazwa}}</b>
                <div>Data: {{$upcoming_exam->data}} </div>
                </div>
                <div class="recent-mobile-in">Przedmiot: {{$upcoming_exam->przedmiot}}</div>
                <div class="recent-mobile-in">Rodzaj: {{$upcoming_exam->rodzaj}}</div>
                <div class="recent-mobile-in">Semestr: {{$upcoming_exam->semestr}}</div>
                <div class="recent-mobile-in">Data: {{$upcoming_exam->data}}</div>

          </div>






        @empty
        Nie ma na razie notatek
        @endforelse

    </div>

    @include('layouts.footer')

</div>

@endsection
