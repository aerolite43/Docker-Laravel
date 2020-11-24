<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Acme</title>
            <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header>
            @include('inc.navbar')
        </header>
        <div class="container-fluid">
            @if(Request::is('/'))
                @include('inc.showcase')
            @endif
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-md-8 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>

        <footer id="footer" class="text-center">
            <p>Copyright 2020 &copy; Adrian</p>
        </footer>
    </body>
</html>