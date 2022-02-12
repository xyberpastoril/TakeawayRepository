<!DOCTYPE HTML>
<html>
    <head>
        @include('includes.meta')
        @include('includes.assets')
        @stack('styles')
    </head>

    <body>
        @include('includes.navbar')

        <main class="container mt-5 pt-5">
            @yield('content')

        </main>

        @stack('scripts')
    </body>
</html>