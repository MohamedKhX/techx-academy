<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts and icons --}}
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    {{-- Nucleo Icons --}}
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dev.css') }}">

    {{-- Styles --}}
    @livewireStyles
</head>
<body>
    {{-- Navbar --}}
    <x-navbar />

    {{-- Header --}}
    {{ $header ?? null }}

    {{-- Slot --}}
    <div class="container py-5">
        {{ $slot }}
    </div>
    {{-- End Slot --}}

    {{-- Footer --}}
    <x-footer />

    {{-- Bootstap Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>

    @livewireScripts
</body>
</html>
