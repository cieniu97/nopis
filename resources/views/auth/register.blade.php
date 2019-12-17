@php
  $domy=App\Dom::all();
  $uczelnie = $domy->unique('uczelnia')->pluck('uczelnia');

@endphp


@extends('layouts.auth')

@section('title')
Rejestracja
@endsection
@section('form')


    <div class="photo">
      <form method="POST" action="{{ route('register') }}">
          @csrf

                    <div class="zarejestruj">
                  Z głowy w 30 sekund!
                    </div>
                  <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nick">





                  <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">





                  <input id="password" type="password"  name="password" required autocomplete="new-password" placeholder="Hasło">



                  <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Potwierdź hasło">




                    <div class="select">
                      <select class="" name="uczelnia" id="uczelnia">
                        @forelse ($uczelnie ?? '' as $uczelnia )
                          <option class="opcja" value="{{$uczelnia}}">{{$uczelnia}}</option>
                        @empty
                        @endforelse
                      </select>
                    </div>






              <div class="select">
                <select class="" name="dom_id" id="kierunki" >

                </select>
              </div>

              <div class="select">
                <select class="" name="semestr">
                  <option value="1">Semestr 1</option>
                  <option value="2">Semestr 2</option>
                  <option value="3">Semestr 3</option>
                  <option value="4">Semestr 4</option>
                  <option value="5">Semestr 5</option>
                  <option value="6">Semestr 6</option>
                  <option value="7">Semestr 7</option>
                  <option value="8">Semestr 8</option>
                </select>
              </div>



                  <button type="submit" class="btn">
                      Zarejestruj
                  </button>

                  <a href="/nopis/public/">Zaloguj</a>

      </form>

    </div>
@endsection
