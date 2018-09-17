<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! url('css/app.css') !!}">

    <title>@yield('title', 'Is it Suspicious?')</title>
    @section('header')
    @show
  </head>
  <body class="my-4">
    <div class="container">
      <div class="header clearfix pb-1 mb-4">
        <nav>
          <ul class="nav nav-pills float-right">
              <li class="nav-item"><a class="nav-link" href="{!! url('/') !!}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{!! url('help') !!}">Help</a></li>
              <li class="nav-item"><a class="nav-link" href="{!! url('about') !!}">About</a></li>
          </ul>
        </nav>

        <h3 class="text-muted">Is It Suspicious?</h3>
      </div>

      @yield('content')

      <div class="footer pt-1 text-muted text-center small">
        <p>This website is neither affliated nor endorsed by any of the mentioned authorities. When in doubt, always check with the relevant authorities.</p>
        <p>&copy 2018 Leong Hean Hong</p>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @stack('footer_scripts')
  </body>
</html>