<!DOCTYPE html>
    <html lang="en">
    @include('layouts.head')
        <body>
            @include('layouts.navigation')
            @include('includes.popup.popup_mobile')
            @include('includes.popup.main_popup')
            <div class="app-container">
                @yield('content')
            </div>
        </body>
@include('layouts.footer')
</html>
