<!DOCTYPE html>
    <html lang="en">
    @include('layouts.head')
        <body>
            @include('layouts.navigation')
            <div class="app-container">
                @yield('content')
            </div>
        </body>
@include('layouts.footer')
</html>
