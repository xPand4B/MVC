<!DOCTYPE html>
<html lang="en">
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
