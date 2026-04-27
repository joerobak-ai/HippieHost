<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Hippie Host | Managed Website & Email Hosting' }}</title>
    <meta name="description" content="{{ $description ?? 'Friendly managed website and email hosting for small businesses. Reliable hosting, real support, SSL, WordPress help, and simple plans.' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    {{ $slot }}
</body>
</html>