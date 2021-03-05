<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Favicon -->
        <link href="../assets/images/favicon.png" rel="icon" type="image/png">

        <!-- CSSa 
        ================================================== -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/night-mode.css">
        <link rel="stylesheet" href="../assets/css/framework.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css"> 
    
        <!-- icons
        ================================================== -->
        <link rel="stylesheet" href="../assets/css/icons.css">
        <style type="text/css">
            body {
                margin-top: 1%;
                margin-left: 1%;
            }
            .layer-1 {
                position: relative;
                z-index: 1;

            }
            .layer-2 {
                position: relative;
                z-index: 2;

            }
            </style>
</head>
<body>
    <div id="app">
        
        <div class="layer-1">
            <div class="uk-width-auto@s">
                <button href="127.0.0.1:8000" type="submit" class="btn btn-default">Back to Home</button>
            </div>
        </div>

        </div>
        <div class="layer-1">

            <main class="py-4">
                @yield('content')

                                
                <!-- For Night mode -->
                <script>
                    (function (window, document, undefined) {
                        'use strict';
                        if (!('localStorage' in window)) return;
                        var nightMode = localStorage.getItem('gmtNightMode');
                        if (nightMode) {
                            document.documentElement.className += ' night-mode';
                        }
                    })(window, document);


                    (function (window, document, undefined) {

                        'use strict';

                        // Feature test
                        if (!('localStorage' in window)) return;

                        // Get our newly insert toggle
                        var nightMode = document.querySelector('#night-mode');
                        if (!nightMode) return;

                        // When clicked, toggle night mode on or off
                        nightMode.addEventListener('click', function (event) {
                            event.preventDefault();
                            document.documentElement.classList.toggle('night-mode');
                            if (document.documentElement.classList.contains('night-mode')) {
                                localStorage.setItem('gmtNightMode', true);
                                return;
                            }
                            localStorage.removeItem('gmtNightMode');
                        }, false);

                    })(window, document);
                </script>


                <!-- javaScripts
                ================================================== -->
                <script src="../assets/js/framework.js"></script>
                <script src="../assets/js/jquery-3.3.1.min.js"></script>
                <script src="../assets/js/simplebar.js"></script>
                <script src="../assets/js/main.js"></script>
                <script src="../assets/js/bootstrap-select.min.js"></script>

            </main>
        </div>
    
        
    </div>
</body>
</html>
