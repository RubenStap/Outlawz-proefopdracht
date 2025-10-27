<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <div class="flex space-x-2">
        @if (app()->getLocale() == 'nl')
            <a href="{{ route('localization', 'en') }}">
                <p><b>NL</b> / EN</p>
            </a>
        @else
            <a href="{{ route('localization', 'nl') }}">
                <p>NL / <b>EN</b></p>
            </a>
        @endif
    </div>
    <div id="app">
        <example-component>
            <h1>{{ __('welcome.title') }}</h1>
        </example-component>
    </div>
</body>

</html>
