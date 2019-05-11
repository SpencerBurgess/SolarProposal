<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ION - @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand mr-auto" href="#">ION</a>

                <!-- Links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">New</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Search</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                  </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>