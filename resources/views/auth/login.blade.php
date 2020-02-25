@php
  $domy=App\Dom::all();
  $uczelnie = $domy->unique('uczelnia')->pluck('uczelnia');

@endphp

@extends('layouts.auth')

@section('title')
Login
@endsection

@section('content')

  <div class="photo">
    <form method="POST" action="{{ route('login') }}">
        @csrf

                  <div class="zarejestruj">
                    Szybki login
                  </div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Hasło">

                <div class="remember-wrap">
                  <div class="">
                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label  for="remember" style="color:white;">
                        Zapamiętaj mnie
                    </label>
                  </div>

                </div>
                <a href="/password/reset">Zresetuj hasło</a>
            <button type="submit" class="btn">
                {{ __('Login') }}
            </button>






    </form>

  </div>



@endsection
