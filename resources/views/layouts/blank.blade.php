<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    {{ $slot }}
    @livewireScripts
</body>
</html>
