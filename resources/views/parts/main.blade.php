@vite(['resources/css/app.css', 'resources/js/app.js'])

@include('parts.navbar')
@yield('content')
@include('parts.footer')
