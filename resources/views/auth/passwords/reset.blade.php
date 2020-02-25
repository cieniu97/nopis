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
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">


            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror




            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>


                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror




            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

      
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">




                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>

    </form>

  </div>



@endsection
