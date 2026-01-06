<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EventRight Pro') }} | Admin</title>

    <!-- Admin Head -->
    <x-partials.admin.head />
</head>

<body>

    <!-- Admin Styles -->
    <x-partials.admin.style />

    <input type="hidden" id="currency" value="$">
    <input type="hidden" id="base_url" value="{{ url('/') }}">

    <!-- Loader -->
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>

    <div id="app">
        <div class="main-wrapper">

            <!-- Header -->
            <x-partials.admin.header />

            <!-- Sidebar -->
            <div class="main-sidebar">
                <x-partials.admin.sidebar />
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard </h1>
                    </div>
                 @yield('admin')
                </section>
            </div>

            <!-- Footer -->
            <x-partials.admin.footer />

        </div>
    </div>

    <!-- Admin Scripts -->
    <x-partials.admin.foot />

</body>

</html>
