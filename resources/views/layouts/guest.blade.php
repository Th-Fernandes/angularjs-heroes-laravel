<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="login">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js" integrity="sha512-8HMKqVxk5EaXfHPCUE6YwxvObaL288uUUKL5JA7Py7DKmHaox9DJmKUuUJIX4l8vvyuwjKBmGFrGYBALXVtYFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.8.3/angular-messages.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased" ng-controller="loginController">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
</html>