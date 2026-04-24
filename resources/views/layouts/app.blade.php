<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
</head>
<body class="bg-dark">
    @include('partials.header')
    @include('partials.hero')
    <main> @yield('content')</main>
    @include('partials.services') 
    
    @include('partials.footer') 
</body>
</html>