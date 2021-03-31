<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title> {{ config('app.title') ?? 'TallStack Experiments' }} </title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

        @livewireStyles
        
    </head>
    <body class="bg-black w-full h-full m-0 overflow-hidden">
        {{ $slot }}
        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <x-livewire-alert::scripts />

        <script src="{{ asset('js/bodymovin.js') }}"></script>
    </body>
</html>