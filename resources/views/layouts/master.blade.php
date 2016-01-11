<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        @include('includes.headystuff');
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    @include('includes.footer');
    </body>

</html>
