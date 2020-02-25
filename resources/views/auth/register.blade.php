@php
$domy=App\Dom::all();
$uczelnie = $domy->unique('uczelnia')->pluck('uczelnia');

@endphp


@extends('layouts.auth')

@section('title')
Rejestracja
@endsection
@section('content')


<div class="photo">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="zarejestruj">
            Z głowy w 30 sekund!
        </div>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nick">
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
        <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Hasło">
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Potwierdź hasło">

        <div class="select">
            <select class="" name="uczelnia" id="uczelnia">
                @forelse ($uczelnie ?? '' as $uczelnia )
                <option class="opcja" value="{{$uczelnia}}">{{$uczelnia}}</option>
                @empty
                @endforelse
            </select>
        </div>

        <div class="select">
            <select class="" name="dom_id" id="kierunki">

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

        <a href="#" id="rodo" style="margin-left:15px;">Rodo i regulamin</a>
        <div class="" style="display:none;" id="rodoTarget" >
            <div class="rodoInside">
                <b>Rodo:</b> <br>
                Podane przez Ciebie dane osobowe nie są w żaden sposób wykorzystywane przez administratora serwisu nopis.pl. Zakładając konto zgadzasz się na obowiązujący regulamin.
                <hr>
                <b>Regulamin:</b>
                <br>
                Serwis nopis.pl powstał w ramach projektu na przedmiot Przedsiębiorczość.
                A także w celu pomocy studentom i należy go traktować jako zbiór pomocy naukowych. Korzystając z materiałów zawartych w serwisie i używając ich na "gotowca", podpisując je swoim imieniem i nazwiskiem należy pamiętać, że łamie się w
                ten sposób prawa autorskie autora opracowania zawartego w serwisie.
                Redakcja serwisu nie ponosi odpowiedzialności za błędy zawarte w opublikowanych materiałach. Materiałów zawartych w serwisie nie można traktować jako naukowego źródła wiedzy, są to tylko opracowania amatorów, które mogą zawierać
                mniejsze lub większe nieścisłości.
                Wszystkich użytkowników serwisu, którzy posiadają ciekawe materiały, warte opublikowania w serwisie nopis.pl prosimy o dodawanie ich do odpowiednich katalogów. W razie problemów/sugestii prosimy o kontakt z administratorem.
            </div>
        </div>

        <button type="submit" class="btn">
            Zarejestruj
        </button>

        <a href="/login">Zaloguj</a>

    </form>

</div>

<script type="text/javascript">
    function hideRodo() {
        if (document.getElementById('rodoTarget').style.display == "flex") {
            document.getElementById('rodoTarget').style.display = "none";
        }
    }

    function checkVisible() {

        if (document.getElementById('rodoTarget').style.display == "none") {
          console.log('sasf');
            document.getElementById('rodoTarget').style.display = "flex";
            document.getElementById('rodoTarget').addEventListener('click', hideRodo);
        }

    }

    var rodo = document.getElementById('rodo');

    rodo.addEventListener('click', checkVisible);
</script>

@endsection
