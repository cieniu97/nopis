

<!doctype html>
<html lang="en">
  <head>
  <title>Nopis - @yield('title')</title>
  <link rel="shortcut icon" href="/layout/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie|Sulphur+Point&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
  </head>
  <body>


    <div class="container-fluid" style="padding:0;">
      @include('layouts.nav')

      <div class="row">
        <div class="col-sm-12">
          <div class="opis">


            @yield('content')

          </div>
        </div>
      </div>

    </div>

    @include('errors.base')
    @include('alerts.base')
    @include('layouts.footer')
  </body>
</html>
