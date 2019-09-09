<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>

    <body>
        @include('partials._nav')

        <div class="container-fluid">
            @include('partials._messages')
            @yield('content')
        </div>

        </div>

        @yield('scripts')

    </body>

</html>
