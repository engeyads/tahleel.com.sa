@include('layouts.head')
@include('layouts.header')
@include('layouts.footer')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>

<body class="text-white bg-dark">
    <div id="app">
        
        @yield('header')
        

        <main class="py-4">
            @yield('content')
        </main>
        @yield('footer')
    </div>
</body>
</html>
