<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinguaLink</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,600;1,500&family=Montserrat:wght@400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="">
    @include('parts.navbar')
    @yield('content')
    @include('parts.footer')
</body>
</html>