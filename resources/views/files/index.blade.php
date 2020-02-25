@php


$domy=App\Dom::all();
$uczelnie = $domy->unique('uczelnia')->pluck('uczelnia');
@endphp

@extends('layouts.app')
@section('title')
Notatki
@endsection
@section('content')
<div class="container">
  <div class="row ">
    <div class="col-xs-12 lista-head">
      <h1 style="color:white">Wszystkie pliki</h1>
      <a href="/files/create" type="button" class="dodaj" name="button" >Dodaj</a>
    </div>

  </div>
  <div class="row form-wrap">

    <div class="col-xs-12 ">

          <form class="wyszukiwanie-form" action="/files/search" method="post">

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

              <button type="submit" name="button" >Szukaj</button>

          </form>


    </div>
  </div>

  <div class="row" >
      <div class="col-xs-12">

        <div class="komurka-wrap komurka-opis-wrap">
          <div class="tabela-opis komurka">Nazwa</div>
          <div class="tabela-opis komurka">Data</div>
          <div class="tabela-opis komurka">Przedmiot</div>
          <div class="tabela-opis komurka">Rodzaj</div>
          <div class="tabela-opis komurka">Semestr</div>
          <div class="tabela-opis komurka">Pliki</div>
        </div>

                @forelse ($files as $file)
                <div class="komurka-wrap">

                    <div class="komurka">
                      {{$file->nazwa}}
                    </div>
                    <div class="komurka">
                      {{$file->data}}
                    </div>
                    <div class="komurka">
                      {{$file->przedmiot}}
                    </div>
                    <div class="komurka">
                      {{$file->rodzaj}}
                    </div>
                    <div class="komurka">
                      {{$file->semestr}}
                    </div>

                    <div class="komurka">

                        <form class="" action="/files/download/{{$file->id}}" method="get" style="margin:0;">
                            @csrf

                            <button type="submit" name="button">Pobierz</button>
                        </form>
                    </div>

                </div>
                @empty
                    <h1 class="nie-ma" >Niestety nie ma żadnych plików. Bądź pierwszą osobą która doda!</h1>
                @endforelse

      </div>
  </div>

  {{-- <div id="files">


      <div class="tabela-files">


        <div class="tabela-opis komurka">Nazwa</div>
        <div class="tabela-opis komurka">Data</div>
        <div class="tabela-opis komurka">Przedmiot</div>
        <div class="tabela-opis komurka">Rodzaj</div>
        <div class="tabela-opis komurka">Semestr</div>
        <div class="tabela-opis komurka">Pliki</div>



          @forelse ($files as $file)


          <div class="komurka">{{$file->nazwa}}
            <br>
          </div>
          <div class="komurka">{{$file->data}}</div>
          <div class="komurka"><div class="data-opis">
              Przedmiot:
          </div>{{$file->przedmiot}}</div>
          <div class="komurka">
            <div class="data-opis">
                Rodzaj:
            </div>{{$file->rodzaj}}</div>
          <div class="komurka"><div class="data-opis">
              Semestr:
          </div>
          {{$file->semestr}}</div>

          <div class="komurka">
            <div class="data-opis">
                Pliki:
            </div>
              <form class="" action="/files/download/{{$file->id}}" method="get">
                  @csrf

                  <button type="submit" name="button">Pobierz</button>
              </form>
          </div>

          @empty

          @endforelse

      </div>


  </div> --}}


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
