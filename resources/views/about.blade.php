<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased min-h-screen bg-slate-100 flex justify-center items-center flex-col">
    <a href='/'>Home</a>
    <a href='/about'>About</a>
    <h1 class='mt-4'>About Page</h1>
    <h2>Owner: {{ $nama }}</h2>
</body>

</html>
