<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- Bootstap Styles --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- Styles --}}
    @livewireStyles
</head>
<body>
    {{-- Navbar --}}
    <x-navbar />

    {{-- Slot --}}
    <div class="container">
        {{ $slot }}
    </div>
    {{-- End Slot --}}

    {{-- Footer --}}
    <x-footer />

    {{-- Bootstap Scripts --}}
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">

    @livewireScripts
</body>
</html>
