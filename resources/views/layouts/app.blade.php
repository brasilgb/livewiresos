<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('jquery-ui/external/jquery/jquery.js') }}"></script>
        <script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>

    </head>
    <body class="flex flex-col min-h-screen font-sans antialiased">
        <x-jet-banner />

        <div class="flex-grow bg-indigo-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-100 border-2 border-gray-200">
                    <div class="max-w-7xl mx-auto py-0 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="p-4 text-center border-t-2 border-gray-300 shadow-inner">
            <h3><span>Copyright © {{ date("Y")}} <a class="text-blue-700 hover:text-blue-400" href="https://abrasildigital.com.br/">ABrasil Digital</a>. Todos os
                direitos reservados.</span></h3>
           </footer>
        @stack('modals')
        @livewireScripts
        
    </body>
</html>