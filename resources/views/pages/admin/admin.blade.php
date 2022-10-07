<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('image/nile.jpeg') }}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- style --}}
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    {{-- script --}}
    <script
      src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body class="sb-nav-fixed">
    @include('layouts.admin.navbar')
    
    <div id="layoutSidenav">
        @include('layouts.admin.sidenav')

        <div id="layoutSidenav_content">
            <main>
              @yield('admin')
            </main>
        </div>

    </div>

    {{-- script --}}
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>
</body>
</html>