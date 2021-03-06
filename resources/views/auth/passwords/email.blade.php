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
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf



              <div class="">
                Wprowadź e-mail na który ma być wysłany link resetujący hasło
              </div>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <button type="submit" class="btn btn-primary">
                        Resetuj
                    </button>

        </form>
    </div>

  </div>



@endsection
