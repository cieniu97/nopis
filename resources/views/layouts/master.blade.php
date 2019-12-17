<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nopis - @yield('title')</title>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="/nopis/storage/app/public/layout/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie|Sulphur+Point&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    @include('layouts.nav')


    @yield('content')



    @include('errors.base')
    @include('alerts.base')

</body>

</html>
