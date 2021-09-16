<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
  
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            

            <!-- Page Heading -->
            <header class="bg-white shadow">
                 <header>
        
        <div class="selector">            
            <img src="/picture/ancres.png">    
            <span style="text-align: center">VHAGYC</span>
        </div>

    @if (Route::has('login'))
    <div class="selector">
        @auth
            @include('layouts.navigation')
        @else
            <div class="selector">   
                <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'IDENTIFIER</a>
            </div>
            @if (Route::has('register'))
                
                <div class="selector">     
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"-->INSCRIPTION</a>
                </div>
            @endif
        @endauth
    </div>
    @endif

</header>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
