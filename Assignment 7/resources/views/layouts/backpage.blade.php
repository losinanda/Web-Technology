<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('backpage.name', 'Admin | Puskesmas Buleleng I') }}</title>
    <link rel="icon" type="image"
        href="https://i0.wp.com/puskesmasbanjarsatu.bulelengkab.go.id/wp-content/uploads/2021/09/cropped-Favicon.png?fit=32%2C32&#038;ssl=1"
        sizes="32x32" />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100 flex">
    @include('layouts.backpage.sidebar')
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        @include('layouts.backpage.navigation')
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                {{ $slot }}
            </main>
            @include('layouts.backpage.footer')
        </div>
    </div>
</body>

</html>
