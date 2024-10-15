<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{"Speed Advertising Agency"}}</title>
        <link rel="icon" href="{{asset("assets/images/logo -03.png")}}" sizes="32x32">

        <link rel="stylesheet" href=" {{ asset('assets/lib/bootstrap-5.2.3-dist/css/bootstrap.min.css') }} ">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
          <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />


  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/DB/css/nucleo-svg.css') }} " rel="stylesheet">
  <link href="{{ asset('assets/DB/css/nucleo-icons.css') }} " rel="stylesheet">


  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <style>
    .CV-icone{
        padding: 0% 3%;
        margin-left: 40%;
    }
  </style>


    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts




    </body>
</html>
