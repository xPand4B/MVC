<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._navigation')

        <div class="content">
            @yield('content')
        </div>

        @include('partials._javascript')
    </body>
</html>
