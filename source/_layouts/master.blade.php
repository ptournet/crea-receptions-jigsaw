<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    @include('_partials.head')
    <body class="text-base font-base">
        @include('_partials.header')

        @yield('content')

        @include('_partials.footer')
    </body>
</html>
