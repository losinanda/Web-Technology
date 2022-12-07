<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('frontpage.name', 'Puskesmas Buleleng I') }}</title>
    <link rel="icon" type="image" href="https://i0.wp.com/puskesmasbanjarsatu.bulelengkab.go.id/wp-content/uploads/2021/09/cropped-Favicon.png?fit=32%2C32&#038;ssl=1" sizes="32x32"" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
            @include('layouts.frontpage.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.frontpage.footer')
    </div>
</body>

</html>
