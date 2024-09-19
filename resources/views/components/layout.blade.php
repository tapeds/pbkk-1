<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<x-head>{{ $title }}</x-head>

<body class="h-full">
    <x-navbar></x-navbar>

    <x-header>{{ $title }} Page</x-header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{ $slot }}
        </div>
    </main>
</body>

</html>
