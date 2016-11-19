<!DOCTYPE html>
    <html lang="en">
    @include('layouts.head')
        <body>
            @include('layouts.navigation')
            @include('includes.popup.what-is-description')
            <div class="app-container">
                @yield('content')
            </div>
        </body>
@include('layouts.footer')
</html>
