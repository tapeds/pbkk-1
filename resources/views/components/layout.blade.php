<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-header>{{ $title }}</x-header>

<body>
    <x-navbar></x-navbar>
    <div class="antialiased min-h-screen bg-slate-100 flex justify-center items-center flex-col">
        {{ $slot }}
    </div>
</body>

</html>
