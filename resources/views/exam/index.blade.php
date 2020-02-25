@php


$domy=App\Dom::all();
$uczelnie = $domy->unique('uczelnia')->pluck('uczelnia');
@endphp

@extends('layouts.app')
@section('title')
Egzaminy
@endsection
@section('content')
<div class="container">
  <div class="row ">
    <div class="col-xs-12 lista-head">
      <h1 style="color:white">Wszystkie egzaminy</h1>
      <a href="/exam/create" type="button" class="dodaj" name="button" >Dodaj</a>
    </div>

  </div>
  <div class="row from-wrap">

    <div class="col-xs-12">
      <form class="wyszukiwanie-form" action="/exam/search" method="post">

          @csrf

          <div class="input-wrap">
              <label for="uczelania">Uczelnia</label>
              <select class="" id="uczelnia">
                  @forelse ($uczelnie ?? '' as $uczelnia )
                  <option class="opcja" value="{{$uczelnia}}">{{$uczelnia}}</option>
                  @empty
                  @endforelse
              </select>

          </div>

          <div class="input-wrap">
              <label for="kierunki">Kierunek</label>
              <select class="" name="dom_id" id="kierunki">

              </select>

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

          {{-- <div class="input-wrap">
              <label for="sort">Sortuj</label>
              <select type="text" name="sort">
                  <option value="created_at">Domyślnie</option>
                  <option value="nazwa">Nazwa</option>
                  <option value="data">Data</option>
                  <option value="przedmiot">Przedmiot</option>
                  <option value="rodzaj">Rodzaj</option>
              </select>
          </div>

          <div class="input-wrap">
              <label for="rosmal">Rosnąco / Malejąco</label>
              <select type="text" name="rosmal">
                  <option value="desc">Malejąco</option>
                  <option value="asc">Rosnąco</option>


              </select>
          </div> --}}

          <button type="submit" name="button" style="width:30%;">Szukaj</button>

      </form>
    </div>
  </div>


  <div class="row">
    <div class="col-xs-12">
      <div class="komurka-wrap komurka-opis-wrap">
        <div class="tabela-opis komurka">Nazwa</div>
        <div class="tabela-opis komurka">Data</div>
        <div class="tabela-opis komurka">Przedmiot</div>
        <div class="tabela-opis komurka">Rodzaj</div>
        <div class="tabela-opis komurka">Semestr</div>

      </div>

      @forelse ($exams as $exam)
      <div class="komurka-wrap">



          <div class="komurka">
              {{$exam->nazwa}}
          </div>

          <div class="komurka">

              {{$exam->data}}
          </div>

          <div class="komurka">

              {{$exam->przedmiot}}
          </div>

          <div class="komurka">

              {{$exam->rodzaj}}
          </div>

          <div class="komurka">

              {{$exam->semestr}}
          </div>

      </div>
      @empty
        <h1 class="nie-ma" >Niestety nie ma żadnych egzaminów. Bądź pierwszą osobą która doda!</h1>
      @endforelse

    </div>
  </div>
</div>




@endsection

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function() {
        var domy = @php
            echo json_encode($domy);
            @endphp;




        for (var i = 0; i < domy.length; i++) {
            if ($('#uczelnia').val() == domy[i].uczelnia) {
                $('#kierunki').append('<option value="' + domy[i].id + '" >' + domy[i].kierunek + '</option>');
            }

        }

        // for (var i = 0; i < przedmioty.length; i++) {
        //   if ($('#kierunki').val()==przedmioty[i].dom_id) {
        //       $('#przedmioty').append('<option value="'+przedmioty[i].name+'" >'+przedmioty[i].name+'</option>');
        //   }
        // }


        $('#uczelnia').change(function() {

            $('#kierunki').html('');
            for (var i = 0; i < domy.length; i++) {
                if ($('#uczelnia').val() == domy[i].uczelnia) {
                    $('#kierunki').append('<option value="' + domy[i].id + '" >' + domy[i].kierunek + '</option>');
                }
            }
            // $('#przedmioty').html('');
            // for (var i = 0; i < przedmioty.length; i++) {
            //   if ($('#kierunki').val()==przedmioty[i].dom_id) {
            //       $('#przedmioty').append('<option value="'+przedmioty[i].name+'" >'+przedmioty[i].name+'</option>');
            //   }
            // }
        });

        // $('#kierunki').change(function(){
        //
        //   $('#przedmioty').html('');
        //
        //   for (var i = 0; i < przedmioty.length; i++) {
        //     if ($('#kierunki').val()==przedmioty[i].dom_id) {
        //         $('#przedmioty').append('<option value="'+przedmioty[i].name+'" >'+przedmioty[i].name+'</option>');
        //     }
        //   }
        // });




    });
</script>
