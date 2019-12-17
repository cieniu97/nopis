

@extends('layouts.master')

@section('content')
<div class="" id="auth">
    <div class="instr">

        <div class="tut">
          <h1 class="slog">Brak notatek do nauki? </h1>
          <h2>NIGDY WIĘCEJ!</h2>
            Każdy student co roku poświęca niezliczoną ilość godzin i kilogramy papieru na zapisywanie notatek.
            Więszkość z nas pisze dokładnie to samo, zamieniając nas w średniowiecznych mnichów którzy latami przepisywali tą samą książkę.
            Zrób krok w stronę przyszłości, podziel się swoimi notatkami i przeglądaj notatki innych studentów.
            <div class="tut-wrap">
              <div class="tut-tekst">
                1. Zarejestruj się
              </div>

                <img src="/nopis/storage/app/public/layout/contract.png" alt="" >




            </div>
            <div class="tut-wrap" >
              <div class="tut-tekst">
                2. Wybierz uczelnię
              </div>

                <img src="/nopis/storage/app/public/layout/university.png" alt="" >




            </div>
            <div class="tut-wrap">
              <div class="tut-tekst">
                3. Pobieraj i udostępniaj
              </div>

                <img src="/nopis/storage/app/public/layout/upload.png" alt="" >



            </div>
        </div>
        <div class="obrazki">
            <div class="obrazek-wrap">
              <div class="obrazek-tekst">
                1. Zarejestruj się
              </div>
              <div class="obrazek">
                <img src="/nopis/storage/app/public/layout/contract.png" alt="" >
              </div>



            </div>
            <div class="obrazek-wrap" >
              <div class="obrazek-tekst">
                2. Wybierz uczelnię
              </div>
              <div class="obrazek">
                <img src="/nopis/storage/app/public/layout/university.png" alt="" >
              </div>



            </div>
            <div class="obrazek-wrap">
              <div class="obrazek-tekst">
                3. Pobieraj i udostępniaj
              </div>
              <div class="obrazek">
                <img src="/nopis/storage/app/public/layout/upload.png" alt="" >
              </div>


            </div>
        </div>
    </div>

    @yield('form')

</div>
@endsection

<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" >


$(function() {
    var domy = @php
      echo json_encode($domy);
    @endphp;

    for (var i = 0; i < domy.length; i++) {
      if ($('#uczelnia').val()==domy[i].uczelnia) {
          $('#kierunki').append('<option value="'+domy[i].id+'" >'+domy[i].kierunek+'</option>');
      }


    }

    $('#uczelnia').change(function(){

      $('#kierunki').html('');
      for (var i = 0; i < domy.length; i++) {
        if ($('#uczelnia').val()==domy[i].uczelnia) {
            $('#kierunki').append('<option value="'+domy[i].id+'" >'+domy[i].kierunek+'</option>');
        }


      }
    });




});
</script>
