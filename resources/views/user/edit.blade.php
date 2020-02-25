@php
$domy=App\Dom::all();
$uczelnie = $domy->unique('uczelnia')->pluck('uczelnia');

@endphp


@extends('layouts.auth')

@section('title')
Edytuj
@endsection
@section('content')


<div class="photo">
    <form method="POST" action="/user/1">
        @csrf
        @method('PUT')

        <div class="zarejestruj">
            Ustawienia
        </div>
        <input id="name" type="text" name="name" value="{{ $user->name }}"  autocomplete="name" autofocus placeholder="Nick">
        <input id="email" type="email" name="email" value="{{ $user->email }}"  autocomplete="email" placeholder="E-mail">





        <div class="select">
            <select class="" name="semestr">
                <option value="" selected>Semestr {{$user->semestr}}</option> 
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
            Edytuj
        </button>



    </form>

</div>



@endsection
