@props([
  'title' => 'Portfolio',
  'description' => 'Personal portfolio',
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="system">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />

    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#0b1220" />

    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ asset('Personal/assets/img/apple-touch-icon.png') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
  </head>
  <body>
    <a class="skip-link" href="#main">Skip to content</a>

    {{ $slot }}

    @stack('scripts')
  </body>
</html>
