<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EventRight Pro') }}</title>

    <!-- Head Component -->
    <x-partials.frontend.head />
</head>

<body>
    <!-- Preloader Component -->
    <x-partials.frontend.preloader />

    <div id="app">
        <!-- Global Styles Component -->
        <x-partials.frontend.globalstyles>
            <div class="site-wrapper">

                <!-- Header -->
                <x-partials.frontend.header />

                <!-- Main Content -->
                <div class="min-h-screen flex flex-col">
                    <main class="flex-grow">
                        @yield('content')
                    </main>

                    <!-- Footer -->
                    <x-partials.frontend.footer />
                </div>

                <!-- Footer Scripts -->
                <x-partials.frontend.foot />

            </div>
        </x-partials.frontend.globalstyles>
    </div>
</body>

</html>
